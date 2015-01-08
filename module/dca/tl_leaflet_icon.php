<?php

$GLOBALS['TL_DCA']['tl_leaflet_icon'] = array
(
    'config' => array(
        'dataContainer'    => 'Table',
        'enableVersioning' => true,
        'sql'              => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),

    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('title'),
            'flag'                    => 1,
            'headerFields'            => array('title', 'type'),
        ),
        'label' => array
        (
            'fields'                  => array('title', 'type'),
            'format'                  => '%s <span class="tl_gray">[%s]</span>',
        ),
        'global_operations' => array
        (
            'map' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['map'],
                'href'                => 'table=tl_leaflet_map',
                'icon'                => 'system/modules/leaflet/assets/img/leaflet.png',
                'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="m"'
            ),
            'layers' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['layersBtn'],
                'href'                => 'table=tl_leaflet_layer',
                'icon'                => 'system/modules/leaflet/assets/img/layers.png',
                'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
            ),
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
            ),
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'toggle' => array
            (
                'label'           => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['toggle'],
                'icon'            => 'visible.gif',
                'attributes'      => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
                'button_callback' => \Netzmacht\Contao\DevTools\Dca::createToggleIconCallback(
                    'tl_leaflet_icon',
                    'active'
                )
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    'palettes' => array(
        '__selector__' => array('type')
    ),

    'metapalettes'    => array(
        'default' => array(
            'title'   => array('title', 'alias', 'type'),
        ),
        'image extends default' => array(
            'config'  => array(
                '',
                'iconImage',
                'iconRetinaImage',
                'iconAnchor',
                'popupAnchor',
                'className',
            ),
            'shadow'  => array(
                'shadowImage',
                'shadowRetinaImage',
                'shadowAnchor',
            ),
            'active' => array(
                'active'
            )
        )
    ),

    'fields' => array
    (
        'id'           => array
        (
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp'       => array
        (
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'pid'          => array
        (
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'title'        => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['title'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'alias'        => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['alias'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => array('mandatory' => false, 'maxlength' => 255, 'tl_class' => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'type'                  => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['type'],
            'exclude'   => true,
            'inputType' => 'select',
            'eval'      => array(
                'mandatory'          => true,
                'tl_class'           => 'w50',
                'includeBlankOption' => true,
                'submitOnChange'     => true,
                'chosen'             => true,
            ),
            'options'   => &$GLOBALS['LEAFLET_ICONS'],
            'reference' => &$GLOBALS['TL_LANG']['leaflet_icon'],
            'sql'       => "varchar(32) NOT NULL default ''"
        ),
        'active'                => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['active'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => array('tl_class' => 'w50'),
            'sql'       => "char(1) NOT NULL default ''"
        ),
        'iconImage'         => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['iconImage'],
            'exclude'   => true,
            'inputType' => 'fileTree',
            'eval'      => array(
                'filesOnly'  => true,
                 'fieldType'  => 'radio',
                 'mandatory'  => true,
                 'tl_class'   => 'clr',
                 'extensions' => 'gif,png,svg,jpg'
            ),
            'sql'       => "binary(16) NULL",
        ),
        'iconRetinaImage'   => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['iconRetinaImage'],
            'exclude'   => true,
            'inputType' => 'fileTree',
            'eval'      => array(
                 'filesOnly'  => true,
                 'fieldType'  => 'radio',
                 'mandatory'  => false,
                 'tl_class'   => 'clr',
                 'extensions' => 'gif,png,svg,jpg'
            ),
            'sql'       => "binary(16) NULL",
        ),
        'shadowImage'         => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['shadowImage'],
            'exclude'   => true,
            'inputType' => 'fileTree',
            'eval'      => array(
                'filesOnly'  => true,
                'fieldType'  => 'radio',
                'mandatory'  => false,
                'tl_class'   => 'clr',
                'extensions' => 'gif,png,svg,jpg'
            ),
            'sql'       => "binary(16) NULL",
        ),
        'shadowRetinaImage'   => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['shadowRetinaImage'],
            'exclude'   => true,
            'inputType' => 'fileTree',
            'eval'      => array(
                'filesOnly'  => true,
                'fieldType'  => 'radio',
                'mandatory'  => false,
                'tl_class'   => 'clr',
                'extensions' => 'gif,png,svg,jpg'
            ),
            'sql'       => "binary(16) NULL",
        ),
        'iconAnchor'  => array
        (
            'label'         => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['iconAnchor'],
            'exclude'       => true,
            'inputType'     => 'text',
            'save_callback' => array(
                array('Netzmacht\Contao\Leaflet\Dca\Leaflet', 'validateCoordinate')
            ),
            'eval'          => array(
                'maxlength'   => 255,
                'tl_class'    => 'w50',
                'nullIfEmpty' => true,
            ),
            'sql'           => "varchar(255) NULL"
        ),
        'shadowAnchor'  => array
        (
            'label'         => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['shadowAnchor'],
            'exclude'       => true,
            'inputType'     => 'text',
            'save_callback' => array(
                array('Netzmacht\Contao\Leaflet\Dca\Leaflet', 'validateCoordinate')
            ),
            'eval'          => array(
                'maxlength'   => 255,
                'tl_class'    => 'w50',
                'nullIfEmpty' => true,
            ),
            'sql'           => "varchar(255) NULL"
        ),
        'popupAnchor'  => array
        (
            'label'         => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['popupAnchor'],
            'exclude'       => true,
            'inputType'     => 'text',
            'save_callback' => array(
                array('Netzmacht\Contao\Leaflet\Dca\Leaflet', 'validateCoordinate')
            ),
            'eval'          => array(
                'maxlength'   => 255,
                'tl_class'    => 'w50',
                'nullIfEmpty' => true,
            ),
            'sql'           => "varchar(255) NULL"
        ),
        'className'          => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_leaflet_icon']['className'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => array('mandatory' => false, 'maxlength' => 64, 'tl_class' => 'w50'),
            'sql'       => "varchar(64) NOT NULL default ''"
        ),
    ),
);