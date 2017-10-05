<?php

/**
 * @package    contao-leaflet-maps
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2016 netzmacht David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Leaflet\Mapper\Layer;

use Netzmacht\Contao\Leaflet\Filter\Filter;
use Netzmacht\Contao\Leaflet\Mapper\DefinitionMapper;
use Netzmacht\Contao\Leaflet\Model\LayerModel;
use Netzmacht\LeafletPHP\Definition;

/**
 * Class ReferenceLayerMapper maps an reference layer to another layer.
 *
 * @package Netzmacht\Contao\Leaflet\Mapper\Layer
 */
class ReferenceLayerMapper extends AbstractLayerMapper
{
    /**
     * Layer type.
     *
     * @var string
     */
    protected static $type = 'reference';

    /**
     * {@inheritdoc}
     */
    public function handle(
        $model,
        DefinitionMapper $mapper,
        Filter $filter = null,
        $elementId = null,
        Definition $parent = null
    ) {
        $reference = LayerModel::findByPk($model->reference);

        if (!$reference || !$reference->active) {
            return null;
        }

        $elementId = $model->standalone ? $this->getElementId($model, $elementId) : null;

        return $mapper->handle($reference, $filter, $elementId);
    }
}