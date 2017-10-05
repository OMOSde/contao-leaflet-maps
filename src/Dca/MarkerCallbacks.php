<?php

/**
 * Leaflet maps for Contao CMS.
 *
 * @package    contao-leaflet-maps
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2016-2017 netzmacht David Molineus. All rights reserved.
 * @license    LGPL-3.0 https://github.com/netzmacht/contao-leaflet-maps/blob/master/LICENSE
 * @filesource
 */

namespace Netzmacht\Contao\Leaflet\Dca;

use Netzmacht\Contao\Toolkit\Dca\Options\OptionsBuilder;
use Netzmacht\Contao\Leaflet\Model\IconModel;
use Netzmacht\Contao\Leaflet\Model\PopupModel;

/**
 * Class Marker is the dca helper class for the tl_leaflet_marker dca.
 *
 * @package Netzmacht\Contao\Leaflet\Dca
 */
class MarkerCallbacks
{
    /**
     * Generate the row label.
     *
     * @param array $row Current data row.
     *
     * @return string
     */
    public function generateRow($row)
    {
        return $row['title'];
    }

    /**
     * Get all icons.
     *
     * @return array
     */
    public function getIcons()
    {
        $collection = IconModel::findAll(array('order' => 'title'));
        $builder    = OptionsBuilder::fromCollection(
            $collection,
            function ($model) {
                return sprintf('%s [%s]', $model['title'], $model['type']);
            }
        );

        return $builder->getOptions();
    }

    /**
     * Get all popups.
     *
     * @return array
     */
    public function getPopups()
    {
        $collection = PopupModel::findAll(array('order' => 'title'));
        $builder    = OptionsBuilder::fromCollection($collection, 'title');

        return $builder->getOptions();
    }

    /**
     * Save the coordinates.
     *
     * @param string         $value         The raw data.
     * @param \DataContainer $dataContainer The data container driver.
     *
     * @return string
     */
    public function saveCoordinates($value, $dataContainer)
    {
        $combined = array(
            'latitude'  => null,
            'longitude' => null,
            'altitude'  => null
        );

        $values = trimsplit(',', $value);
        $keys   = array_keys($combined);
        $count  = count($values);

        if ($count >= 2 && $count <= 3) {
            for ($i = 0; $i < $count; $i++) {
                $combined[$keys[$i]] = $values[$i];
            }
        }

        \Database::getInstance()
            ->prepare('UPDATE tl_leaflet_marker %s WHERE id=?')
            ->set($combined)
            ->execute($dataContainer->id);

        return null;
    }

    /**
     * Load the coordinates.
     *
     * @param string         $value         The raw data.
     * @param \DataContainer $dataContainer The data container driver.
     *
     * @return string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function loadCoordinates($value, $dataContainer)
    {
        $result = \Database::getInstance()
            ->prepare('SELECT latitude, longitude, altitude FROM tl_leaflet_marker WHERE id=?')
            ->execute($dataContainer->id);

        if ($result->numRows) {
            $buffer = $result->latitude;

            if ($buffer && $result->longitude) {
                $buffer .= ',' . $result->longitude;
            } else {
                return $buffer;
            }

            if ($buffer && $result->altitude) {
                $buffer .= ',' . $result->longitude;
            }

            return $buffer;
        }

        return '';
    }
}
