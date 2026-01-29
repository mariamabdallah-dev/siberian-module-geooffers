<?php

    class GeoOffers_Model_Db_Table_Location extends Core_Model_Db_Table
    {
        protected $_name = "geooffers_location";
        protected $_primary = "location_id";

       
        public function findByDescriptor(array $descriptor)
        {

            // $select = $this->select()->where("type = ?", $descriptor["type"]);
            // if(!empty($descriptor["country_code"])) $select->where("country_code = ?", $descriptor["country_code"]);
            // if(!empty($descriptor["city"])) $select->where("city = ?", $descriptor["city"]);
            // return $this->fetchAll($select);

            return []; 
        }
    }
