<?php

    class GeoOffers_Model_Db_Table_Offer extends Core_Model_Db_Table
    {
        protected $_name = "geooffers_offer";
        protected $_primary = "offer_id";

    
        public function selectActive($now = null)
        {

            // $now = $now ?: date("Y-m-d H:i:s");
            // $select = $this->select()
            //   ->where("is_active = 1")
            //   ->where("(starts_at IS NULL OR starts_at <= ?)", $now)
            //   ->where("(ends_at IS NULL OR ends_at >= ?)", $now);
            // return $select;

            return null;
        }
    }
