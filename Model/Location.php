<?php

    /**
     
     * A location can be:
     * - country (country_code)
     * - city (country_code + city)
     * - geofence (geofence_json)
     */
    class GeoOffers_Model_Location extends Core_Model_Default
    {
        protected $_db_table = "GeoOffers_Model_Db_Table_Location";

        public function toDescriptor()
        {
            return [
                "location_id" => (int) $this->getId(),
                "type" => (string) $this->getData("type"),
                "country_code" => $this->getData("country_code"),
                "city" => $this->getData("city"),
                "geofence_json" => $this->getData("geofence_json"),
            ];
        }
    }
