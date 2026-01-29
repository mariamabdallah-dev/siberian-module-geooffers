        <?php


$init = function($bootstrap) {
    if(class_exists("Siberian_Assets")) {
        Siberian_Assets::registerAssets("GeoOffers");

        Siberian_Assets::addJavascripts([
            "modules/geooffers/controllers/geooffers.js",
            "modules/geooffers/services/geooffers.js",
            "modules/geooffers/factory/geooffers.js",
        ]);

        Siberian_Assets::addStylesheets([
            "modules/geooffers/styles/geooffers.css",
        ]);
    }

    if(class_exists("\\Siberian\\Module")) {
        
        \Siberian\Module::addEditorMenu(
            "GeoOffers",
            "geooffers",
            "GeoOffers",
            "/geooffers/application/list",
            "fa fa-map-marker"
        );

        \Siberian\Module::addMenu(
            "GeoOffers",
            "geooffers",
            "GeoOffers",
            "/geooffers/backoffice/index",
            "fa fa-map-marker"
        );
    }
};
