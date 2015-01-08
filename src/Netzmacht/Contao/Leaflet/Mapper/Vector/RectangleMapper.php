<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Leaflet\Mapper\Vector;


use Netzmacht\Contao\Leaflet\Mapper\DefinitionMapper;
use Netzmacht\LeafletPHP\Definition;
use Netzmacht\LeafletPHP\Definition\Type\LatLng;
use Netzmacht\LeafletPHP\Definition\Type\LatLngBounds;
use Netzmacht\LeafletPHP\Definition\Vector\Circle;
use Netzmacht\LeafletPHP\Definition\Vector\Rectangle;

class RectangleMapper extends AbstractVectorMapper
{
    /**
     * Class of the definition being created.
     *
     * @var string
     */
    protected static $definitionClass = 'Netzmacht\LeafletPHP\Definition\Vector\Rectangle';

    /**
     * Layer type.
     *
     * @var string
     */
    protected static $type = 'rectangle';

    protected function initialize()
    {
        parent::initialize();
    }

    protected function buildConstructArguments(\Model $model, DefinitionMapper $mapper, LatLngBounds $bounds = null)
    {
        $latLngs = array_map(
            function($latLng) {
                return LatLng::fromString($latLng);
            },
            deserialize($model->bounds, true)
        );

        $arguments   = parent::buildConstructArguments($model, $mapper, $bounds);
        $arguments[] = new LatLngBounds($latLngs[0], $latLngs[1]);

        return $arguments;
    }
}