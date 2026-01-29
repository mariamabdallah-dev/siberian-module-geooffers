<?php


    $schemas = (!isset($schemas)) ? [] : $schemas;

    $schemas["geooffers_offer_location"] = [
        "offer_location_id" => [
            "type" => "int(11) unsigned",
            "auto_increment" => true,
            "primary" => true,
        ],

        "offer_id" => [
            "type" => "int(11) unsigned",
            "foreign_key" => [
                "table" => "geooffers_offer",
                "column" => "offer_id",
                "name" => "FK_GEOOFFERS_OFFER_LOCATION_OFFER_ID",
                "on_update" => "CASCADE",
                "on_delete" => "CASCADE",
            ],
            "index" => true,
        ],

        "location_id" => [
            "type" => "int(11) unsigned",
            "foreign_key" => [
                "table" => "geooffers_location",
                "column" => "location_id",
                "name" => "FK_GEOOFFERS_OFFER_LOCATION_LOCATION_ID",
                "on_update" => "CASCADE",
                "on_delete" => "CASCADE",
            ],
            "index" => true,
        ],

      
        // "unique" => [
        //   "name" => "UQ_GEOOFFERS_OFFER_ID_LOCATION_ID",
        //   "columns" => ["offer_id", "location_id"]
        // ],

        "created_at" => ["type" => "datetime"],
        "updated_at" => ["type" => "datetime"],
    ];
