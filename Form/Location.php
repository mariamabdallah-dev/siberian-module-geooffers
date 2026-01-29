<?php

    class GeoOffers_Form_Location
    {
        public function getDefinition()
        {
            return [
                "type" => [
                    "type" => "select",
                    "label" => "Location type",
                    "options" => [
                        "country" => "Country",
                        "city" => "City",
                        "geofence" => "Geofence",
                    ],
                    "required" => true,
                ],
                "country_code" => [
                    "type" => "text",
                    "label" => "Country code",
                    "placeholder" => "US, FR, BR ...",
                    "help" => "ISO-3166 alpha-2 code (example).",
                ],
                "city" => [
                    "type" => "text",
                    "label" => "City",
                    "placeholder" => "New York",
                ],
                "geofence_json" => [
                    "type" => "json",
                    "label" => "Geofence definition",
                    "help" => "Example JSON: {\"type\":\"circle\",\"center\":{\"lat\":0,\"lng\":0},\"radius_m\":500}",
                ],
            ];
        }
    }
