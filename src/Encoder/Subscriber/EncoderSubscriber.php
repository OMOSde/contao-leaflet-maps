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

namespace Netzmacht\Contao\Leaflet\Encoder\Subscriber;

use Netzmacht\Contao\Leaflet\Frontend\RequestUrl;
use Netzmacht\JavascriptBuilder\Exception\EncodeValueFailed;
use Netzmacht\JavascriptBuilder\Flags;
use Netzmacht\JavascriptBuilder\Symfony\Event\EncodeReferenceEvent;
use Netzmacht\JavascriptBuilder\Symfony\Event\EncodeValueEvent;
use Netzmacht\LeafletPHP\Definition\Type\Icon;
use Netzmacht\LeafletPHP\Plugins\Omnivore\OmnivoreLayer;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class EncoderSubscriber subscribes to the internal encoding event dispatcher.
 *
 * @package Netzmacht\Contao\Leaflet\Subscriber
 */
class EncoderSubscriber implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            EncodeValueEvent::NAME     => [
                ['encodeIcons', 1000],
                ['loadLayer', 100],
            ],
            EncodeReferenceEvent::NAME => ['referenceIcon', 100],
        ];
    }

    /**
     * Create icon reference to the contao leaflet icon registry.
     *
     * @param EncodeReferenceEvent $event The subscribed event.
     *
     * @return void
     */
    public function referenceIcon(EncodeReferenceEvent $event)
    {
        $value = $event->getObject();

        if ($value instanceof Icon) {
            $event->setReference('L.contao.getIcon(\'' . $value->getId() . '\')');
            $event->stopPropagation();
        }
    }

    /**
     * Force that icons are encoded as reference to the L.contao icon registry.
     *
     * @param EncodeValueEvent $event The subscribed event.
     *
     * @return void
     */
    public function encodeIcons(EncodeValueEvent $event)
    {
        $value = $event->getValue();

        if ($value instanceof Icon) {
            // Do not encode the icon, as it is generated in an separate icon file.
            $event->setSuccessful();
            $event->stopPropagation();
        }
    }

    /**
     * Encode OmnivoreLayers so that the internal used contao.loadLayer method is used.
     *
     * @param EncodeValueEvent $event The subscribed event.
     *
     * @return void
     * @throws EncodeValueFailed If encoding failed.
     */
    public function loadLayer(EncodeValueEvent $event)
    {
        $value    = $event->getValue();
        $encoder  = $event->getEncoder();
        $template = 'L.contao.%s(%s, %s, %s, %s, map);';
        $method   = 'loadFile';

        if ($value instanceof OmnivoreLayer) {
            $url = $value->getUrl();

            if ($url instanceof RequestUrl) {
                $url    = $url->getHash();
                $method = 'load';
            }

            if ($value->getCustomLayer()) {
                $ref = $encoder->encodeReference($value->getCustomLayer());
            } else {
                $template = $encoder->encodeReference($value) . ' = ' . $template;
                $ref      = 'null';
            }

            $event->addLine(
                sprintf(
                    $template,
                    $method,
                    $encoder->encodeValue($url),
                    $encoder->encodeValue(strtolower(str_replace('Omnivore.', '', $value->getType()))),
                    $encoder->encodeArray($value->getOptions(), JSON_FORCE_OBJECT),
                    $ref
                )
            );

            foreach ($value->getMethodCalls() as $call) {
                $event->addLine($call->encode($encoder, Flags::CLOSE_STATEMENT));
            }
        }
    }
}
