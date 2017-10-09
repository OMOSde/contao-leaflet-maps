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

declare(strict_types=1);

namespace Netzmacht\Contao\Leaflet\Listener\Dca;

/**
 * Class StyleDcaListener.
 *
 * @package Netzmacht\Contao\Leaflet\Listener\Dca
 */
class StyleDcaListener
{
    /**
     * Style type options.
     *
     * @var array
     */
    private $icons;

    /**
     * StyleDcaListener constructor.
     *
     * @param array $styles Styles options.
     */
    public function __construct(array $styles)
    {
        $this->icons = $styles;
    }

    /**
     * Get style options.
     *
     * @return array
     */
    public function getStyleOptions(): array
    {
        return $this->icons;
    }
}
