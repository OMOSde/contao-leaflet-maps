<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Leaflet\Mapper\Control;

use Netzmacht\Contao\Leaflet\Mapper\DefinitionMapper;
use Netzmacht\LeafletPHP\Definition;
use Netzmacht\LeafletPHP\Definition\Control\Attribution;
use Netzmacht\LeafletPHP\Definition\Type\LatLngBounds;

/**
 * AttributionControlMapper maps the the attribution database definition to the definition class.
 *
 * @package Netzmacht\Contao\Leaflet\Mapper\Control
 */
class AttributionControlMapper extends AbstractControlMapper
{
    /**
     * Class of the definition being created.
     *
     * @var string
     */
    protected static $definitionClass = 'Netzmacht\LeafletPHP\Definition\Control\Attribution';

    /**
     * Layer type.
     *
     * @var string
     */
    protected static $type = 'attribution';

    /**
     * {@inheritdoc}
     */
    protected function initialize()
    {
        parent::initialize();

        $this->addConditionalOption('prefix');
    }

    /**
     * {@inheritdoc}
     */
    protected function doBuild(Definition $definition, \Model $model, DefinitionMapper $builder, LatLngBounds $bounds = null)
    {
        if (!$definition instanceof Attribution) {
            return;
        }

        $attributions = deserialize($model->attributions, true);

        foreach ($attributions as $attribution) {
            $definition->addAttribution($attribution);
        }
    }
}
