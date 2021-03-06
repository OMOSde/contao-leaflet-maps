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

$GLOBALS['TL_LANG']['tl_leaflet_layer']['title_legend']  = 'Layer';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['active_legend'] = 'Activation';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['expert_legend'] = 'Expert settings';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['config_legend'] = 'Configuration';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['style_legend']  = 'Style';

$GLOBALS['TL_LANG']['tl_leaflet_layer']['map'][0]    = 'Manage maps';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['map'][1]    = 'Manage leaflet maps';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['icons'][0]  = 'Manage icons';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['icons'][1]  = 'Manage marker icons';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['popups'][0] = 'Manage popups';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['popups'][1] = 'Manage popups icons';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['styles'][0] = 'Manage styles';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['styles'][1] = 'Manage vector styles';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['new'][0]    = 'Create layer';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['new'][1]    = 'Create new layer';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['edit'][0]   = 'Edit layer';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['edit'][1]   = 'Edit layer ID %s';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['copy'][0]   = 'Copy layer';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['copy'][1]   = 'Copy layer ID %s';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['delete'][0] = 'Delete layer';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['delete'][1] = 'Delete layer ID %s';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['toggle'][0] = 'Toggle activation';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['toggle'][1] = 'Toggle activation of layer ID %s';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['show'][0]   = 'Show details';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['show'][1]   = 'Show layer ID %s details';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['cut'][0]    = 'Move layer';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['cut'][1]    = 'Move layer ID %s';

$GLOBALS['TL_LANG']['tl_leaflet_layer']['title'][0]                      = 'Title';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['title'][1]                      = 'Title of the layer.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['alias'][0]                      = 'Alias';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['alias'][1]                      = 'Alias of the layer.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['type'][0]                       = 'Type';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['type'][1]                       = 'Choose the layer type.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['tile_provider'][0]              = 'Tile provider';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['tile_provider'][1]              = 'Choose the layer type.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['tile_provider_variant'][0]      = 'Tile variant';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['tile_provider_variant'][1]      = 'Tile variant style.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['active'][0]                     = 'Activate layer';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['active'][1]                     = 'Activate layer on the map.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['reference'][0]                  = 'Reference';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['reference'][1]                  = 'Choose the reference layer. Otherwise the same javscript object is used.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['standalone'][0]                 = 'Standalone';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['standalone'][1]                 = 'Integrate reference as a copy of the referenced layer.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['markerCluster'][0]              = 'Marker cluster';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['markerCluster'][1]              = 'Choose a marker cluster layer so that markers get clustered.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['deferred'][0]                   = 'Deferred loading';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['deferred'][1]                   = 'Load data of the layer deferred using ajax.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['groupType'][0]                  = 'Group type';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['groupType'][1]                  = 'Choose a layer group type.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['onEachFeature'][0]              = 'onEachFeature expression';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['onEachFeature'][1]              = 'Use a custom onEachFeature expression. Can be a anonymous function or method reference. If defined the extension does not handle popup adding for you.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['pointToLayer'][0]               = 'pointToLayer expression';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['pointToLayer'][1]               = 'Use a custom pointToLayer expression. Can be a anonymous function or method reference. If defined the extension does not handle popup or icon adding for you.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['showCoverageOnHover'][0]        = 'Show coverage on hover';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['showCoverageOnHover'][1]        = 'When you mouse over a cluster it shows the bounds of its markers.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['zoomToBoundsOnClick'][0]        = 'Zoom to bounds on click';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['zoomToBoundsOnClick'][1]        = 'When you click a cluster we zoom to its bounds.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['spiderfyOnMaxZoom'][0]          = 'Spiderfy on max zoom';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['spiderfyOnMaxZoom'][1]          = 'When you click a cluster at the bottom zoom level we spiderfy it so you can see all of its markers.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['removeOutsideVisibleBounds'][0] = 'Remove when outside of visible bounds';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['removeOutsideVisibleBounds'][1] = 'Clusters and markers too far from the viewport are removed from the map for performance.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['animateAddingMarkers'][0]       = 'Animate adding markers';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['animateAddingMarkers'][1]       = 'If set to true then adding individual markers to the MarkerClusterGroup after it has been added to the map will add the marker and animate it in to the cluster.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['disableClusteringAtZoom'][0]    = 'Disable clustering at zoom level';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['disableClusteringAtZoom'][1]    = 'If set, at this zoom level and below markers will not be clustered. This defaults to disabled. ';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['maxClusterRadius'][0]           = 'Max cluster radius';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['maxClusterRadius'][1]           = 'The maximum radius that a cluster will cover from the central marker (in pixels).';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['polygonOptions'][0]             = 'Polygon options';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['polygonOptions'][1]             = 'Options to pass when creating the L.Polygon(points, options) to show the bounds of a cluster.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['singleMarkerMode'][0]           = 'Show cluster instead of marker';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['singleMarkerMode'][1]           = 'If set to true, overrides the icon for all added markers to make them appear as a 1 size cluster.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['spiderfyDistanceMultiplier'][0] = 'Spiderfy distance multiplier';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['spiderfyDistanceMultiplier'][1] = 'Increase from 1 to increase the distance away from the center that spiderfied markers are placed. Use if you are using big marker icons.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['iconCreateFunction'][0]         = 'Create cluster icon function';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['iconCreateFunction'][1]         = 'Function used to create the cluster icon.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['disableDefaultStyle'][0]        = 'Disable default style';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['disableDefaultStyle'][1]        = 'Do not load default marker cluster stylesheets.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['boundsMode'][0]                 = 'Bounds relation';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['boundsMode'][1]                 = 'Choose a mode how the layer data should affect the map bounds.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['minZoom'][0]                    = 'Minimum zoom';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['minZoom'][1]                    = 'Minimum zoom number.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['maxZoom'][0]                    = 'Maximum zoom';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['maxZoom'][1]                    = 'Minimum zoom number.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['maxNativeZoom'][0]              = 'Maximum zoom where tiles are provided';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['maxNativeZoom'][1]              = 'Maximum zoom number the tiles source has available. If it is specified, the tiles on all zoom levels higher than maxNativeZoom will be loaded from maxZoom level and auto-scaled.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['tileSize'][0]                   = 'Tile size';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['tileSize'][1]                   = 'Tile size (width and height in pixels, assuming tiles are square).';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['subdomains'][0]                 = 'Subdomain';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['subdomains'][1]                 = 'Subdomains of the tile service. Each letter is handled as a subdomain.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['errorTileUrl'][0]               = 'Error url';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['errorTileUrl'][1]               = 'URL to the tile image to show in place of the tile that failed to load.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['attribution'][0]                = 'Attribution';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['attribution'][1]                = 'The tile layer attribution. Be aware of the conditions of the tile providers!';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['tms'][0]                        = 'TMS Service';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['tms'][1]                        = 'Inverse the Y axis numbering for TMS services';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['continuousWorld'][0]            = 'Continuous World';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['continuousWorld'][1]            = 'If set to true, the tile coordinates won\'t be wrapped by world width (-180 to 180 longitude) or clamped to lie within world height (-90 to 90). Use this if you use Leaflet for maps that don\'t reflect the real world (e.g. game, indoor or photo maps).';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['noWrap'][0]                     = 'No wrap';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['noWrap'][1]                     = 'If set to true, the tiles just won\'t load outside the world width (-180 to 180 longitude) instead of repeating.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['zoomOffset'][0]                 = 'Zoom offset';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['zoomOffset'][1]                 = 'The zoom number used in tile URLs will be offset with this value.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['zoomReverse'][0]                = 'Reserve zoom';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['zoomReverse'][1]                = 'If set to true, the zoom number used in tile URLs will be reversed';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['opacity'][0]                    = 'Opacity';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['opacity'][1]                    = 'The opacity of the tile layer.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['zIndex'][0]                     = 'zIndex';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['zIndex'][1]                     = 'The explicit zIndex of the tile layer. Not set by default.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['unloadvisibleTiles'][0]         = 'Unload not visible tiles';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['unloadvisibleTiles'][1]         = 'If true, all the tiles that are not visible after panning are removed.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['updateWhenIdle'][0]             = 'Update then idle';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['updateWhenIdle'][1]             = 'If false, new tiles are loaded during panning, otherwise only after it ';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['detectRetina'][0]               = 'Detect retina displays';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['detectRetina'][1]               = 'If true and user is on a retina display, it will request four tiles of half the specified size and a bigger zoom level in place of one to utilize the high resolution.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['reuseTiles'][0]                 = 'Reuse tiles';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['reuseTiles'][1]                 = 'If true, all the tiles that are not visible after panning are placed in a reuse queue from which they will be fetched when new tiles become visible (as opposed to dynamically creating new ones).';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['bounds'][0]                     = 'Bounds';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['bounds'][1]                     = 'When this option is set, the TileLayer only loads tiles that are in the given geographical bounds. Each field defines a corner of the bounds as comma separated value (Latitude,longitude[,altitude]).';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['cache'][0]                      = 'Enable cache';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['cache'][1]                      = 'If enabled the dynamic loaded data is cached.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['cacheLifeTime'][0]              = 'Cache lifetime';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['cacheLifeTime'][1]              = 'Indicates how long a cache entry is valid in seconds.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['overpassQuery'][0]              = 'Overpass API query';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['overpassQuery'][1]              = 'Overpass API query. See <a href="https://overpass-turbo.eu/" target="_blank">https://overpass-turbo.eu/</a> for examples.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['overpassEndpoint'][0]           = 'Overpass API endpoint';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['overpassEndpoint'][1]           = 'Endpoint for overpass API request. If empty //overpass-api.de/api/ is used.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['overpassPopup'][0]              = 'Popup expression';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['overpassPopup'][1]              = 'Define a custom function or reference to create the popup. <em>feature</em> and <em>markerOrLayer</em> are passed as arguments.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['amenityIcons'][0]               = 'Amenity icons';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['amenityIcons'][1]               = 'Define the mapping between amenities and icon styles.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['amenity'][0]                    = 'Amenity';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['amenity'][1]                    = 'OSM amenity.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['amenityIcon'][1]                = 'Icon';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['amenityIcon'][0]                = 'Icon style';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormat'][0]                 = 'File formats';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormat'][1]                 = 'Choose which file format is used.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['file'][0]                       = 'File';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['file'][1]                       = 'Choose a file containing geodata. Supported formats are: %s.';

$GLOBALS['TL_LANG']['tl_leaflet_layer']['groupTypes']['layer'][0]   = 'Layer group';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['groupTypes']['layer'][1]   = 'Basic layer group. <br> See <a href="http://leafletjs.com/reference.html#layergroup" target="_blank">http://leafletjs.com/reference.html#layergroup</a>';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['groupTypes']['feature'][0] = 'Feature group';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['groupTypes']['feature'][1] = 'Extended layer group with events and popup support. <br>See <a href="http://leafletjs.com/reference.html#featuregroup" target="_blank">http://leafletjs.com/reference.html#featuregroup</a>';

$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['gpx'][0]      = 'GPX';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['gpx'][1]      = 'GPS Exchange format. <a href="https://github.com/mapbox/togeojson#gpx-feature-support" target="_blank">Read the documentation</a> for more information.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['kml'][0]      = 'KML';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['kml'][1]      = 'Keyhole Markup Language. <a href="https://github.com/mapbox/togeojson#kml-feature-support" target="_blank">Read the documentation</a> for more information.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['wkt'][0]      = 'WKT';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['wkt'][1]      = 'Well-known text  <a href="https://github.com/mapbox/togeojson#kml-feature-support" target="_blank">Read the documentation</a> for more information.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['topojson'][0] = 'TopoJSON';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['topojson'][1] = 'TopoJSON is a topological geospatial data interchange format based on GeoJSON. <a href="https://github.com/topojson/topojson#api-reference" target="_blank">Read the documentation</a> for more information.';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['geojson'][0]  = 'GeoJSON';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['fileFormats']['geojson'][1]  = 'GeoJSON is a format for encoding a variety of geographic data structures. <a href="https://github.com/mapbox/wellknown" target="_blank">Read the documentation</a> for more information.';

$GLOBALS['TL_LANG']['tl_leaflet_layer']['pasteinto'][1]  = 'Paste into layer %s';
$GLOBALS['TL_LANG']['tl_leaflet_layer']['pasteafter'][1] = 'Paste after layer %s';

$GLOBALS['TL_LANG']['tl_leaflet_layer']['countEntries'] = 'Entries';
