<?php

    $schemas = (!isset($schemas)) ? [] : $schemas;

    $schemas["geooffers_location"] = [
        "location_id" => [
            "type" => "int(11) unsigned",
            "auto_increment" => true,
            "primary" => true,
        ],

        "type" => [
            "type" => "varchar(20)",
            "default" => "city", // country|city|geofence
            "index" => true,
        ],

        "country_code" => [
            "type" => "varchar(2)",
            "is_null" => true,
            "index" => true,
        ],

        "city" => [
            "type" => "varchar(120)",
            "is_null" => true,
            "index" => true,
        ],

        "geofence_json" => [
            "type" => "text",
            "is_null" => true, {"type":"circle","center":{"lat":0,"lng":0},"radius_m":500}
        ],

      
        // "label" => ["type" => "varchar(120)", "is_null" => true, "index" => true],

        "created_at" => ["type" => "datetime"],
        "updated_at" => ["type" => "datetime"],
    ];
