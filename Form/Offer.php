<?php

    class GeoOffers_Form_Offer
    {
        public function getDefinition()
        {
            return [
                "title" => [
                    "type" => "text",
                    "label" => "Title",
                    "required" => true,
                    "max_length" => 140,
                    "help" => "Internal title (can be used as a seed marker).",
                ],
                "body" => [
                    "type" => "textarea",
                    "label" => "Message",
                    "required" => false,
                    "help" => "Text shown to users in the mobile app.",
                ],
                "starts_at" => [
                    "type" => "datetime",
                    "label" => "Start date (optional)",
                ],
                "ends_at" => [
                    "type" => "datetime",
                    "label" => "End date (optional)",
                ],
                "is_active" => [
                    "type" => "toggle",
                    "label" => "Active",
                    "default" => true,
                ],
                "location_ids" => [
                    "type" => "multiselect",
                    "label" => "Target locations",
                    "help" => "Attach one or more locations (country/city/geofence).",
                ],
            ];
        }
    }
