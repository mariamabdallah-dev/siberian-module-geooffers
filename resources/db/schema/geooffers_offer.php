<?php


    $schemas = (!isset($schemas)) ? [] : $schemas;

    $schemas["geooffers_offer"] = [
        "offer_id" => [
            "type" => "int(11) unsigned",
            "auto_increment" => true,
            "primary" => true,
        ],

        "title" => [
            "type" => "varchar(140)",
            "default" => "",
            "index" => true,
        ],

        "body" => [
            "type" => "text",
            "is_null" => true,
        ],

        "starts_at" => [
            "type" => "datetime",
            "is_null" => true,
            "index" => true,
        ],

        "ends_at" => [
            "type" => "datetime",
            "is_null" => true,
            "index" => true,
        ],

        "is_active" => [
            "type" => "tinyint(1) unsigned",
            "default" => 1,
            "index" => true,
        ],

        // "priority" => ["type" => "int(11) unsigned", "default" => 100, "index" => true],
        // "cta_label" => ["type" => "varchar(60)", "is_null" => true],
        // "cta_url" => ["type" => "varchar(255)", "is_null" => true],

        "created_at" => ["type" => "datetime"],
        "updated_at" => ["type" => "datetime"],
    ];
