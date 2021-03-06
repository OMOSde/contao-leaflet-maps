<?php

/**
 * Leaflet maps for Contao CMS.
 *
 * @package    contao-leaflet-maps
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2017 netzmacht David Molineus. All rights reserved.
 * @license    LGPL-3.0 https://github.com/netzmacht/contao-leaflet-maps/blob/master/LICENSE
 * @filesource
 */

namespace Netzmacht\Contao\Leaflet\Mapper\Control;

use Contao\Model;
use Netzmacht\Contao\Leaflet\Mapper\DefinitionMapper;
use Netzmacht\Contao\Leaflet\Mapper\Request;
use Netzmacht\Contao\Leaflet\Model\ControlModel;
use Netzmacht\Contao\Toolkit\Data\Model\RepositoryManager;
use Netzmacht\LeafletPHP\Definition;
use Netzmacht\LeafletPHP\Definition\Control\Zoom;
use Netzmacht\LeafletPHP\Plugins\Loading\LoadingControl;
use Netzmacht\LeafletPHP\Plugins\Loading\SpinJsLoadingControl;

/**
 * Class LoadingControlMapper maps the control model to the loading control definition.
 *
 * @package Netzmacht\Contao\Leaflet\Mapper\Control
 */
class LoadingControlMapper extends AbstractControlMapper
{
    /**
     * Layer type.
     *
     * @var string
     */
    protected static $type = 'loading';

    /**
     * Repository manager.
     *
     * @var RepositoryManager
     */
    private $repositoryManager;

    /**
     * Construct.
     *
     * @param RepositoryManager $repositoryManager Repository manager.
     */
    public function __construct(RepositoryManager $repositoryManager)
    {
        $this->repositoryManager = $repositoryManager;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function getClassName(Model $model, DefinitionMapper $mapper, Request $request = null)
    {
        if ($model->spinjs) {
            return SpinJsLoadingControl::class;
        }

        return LoadingControl::class;
    }

    /**
     * {@inheritdoc}
     */
    protected function initialize()
    {
        parent::initialize();

        $this->optionsBuilder->addOption('separate');
    }

    /**
     * {@inheritdoc}
     */
    protected function build(
        Definition $definition,
        Model $model,
        DefinitionMapper $mapper,
        Request $request = null,
        Definition $parent = null
    ) {
        parent::build($definition, $model, $mapper, $request);

        if ($definition instanceof SpinJsLoadingControl && $model->spin) {
            $config = json_decode($model->spin, true);

            if (is_array($config)) {
                $definition->setSpin($config);
            }
        }

        if ($definition instanceof LoadingControl && !$definition->isSeparate() && $model->zoomControl) {
            // Only assign if zoom control is activated and part of the map.
            $repository = $this->repositoryManager->getRepository(ControlModel::class);
            $control    = $repository->findOneBy(
                ['active=1', 'type=?', 'pid=?', 'id=?'],
                ['zoom', $model->pid, $model->zoomControl]
            );

            if ($control) {
                $control = $mapper->handle($control);

                if ($control instanceof Zoom) {
                    // By default the loading control overrides the position of the zoom control. Deactivate it by
                    // overriding the position.
                    $definition->setPosition($control->getPosition());
                    $definition->setZoomControl($control);
                }
            }
        }
    }
}
