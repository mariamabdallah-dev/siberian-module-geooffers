\
    <?php

    /**
     * Offer entity 
     * - store offer content fields
     * - manage relations to locations
     * - provide helper methods: isActiveNow(), toPublicArray()
     */
    class GeoOffers_Model_Offer extends Core_Model_Default
    {
        protected $_db_table = "GeoOffers_Model_Db_Table_Offer";

        public function isActiveNow($now = null)
        {
            $now = $now ?: date("Y-m-d H:i:s");

            $isActive = (int) $this->getData("is_active") === 1;
            $startsAt = $this->getData("starts_at");
            $endsAt   = $this->getData("ends_at");

            if(!$isActive) return false;
            if($startsAt && $now < $startsAt) return false;
            if($endsAt && $now > $endsAt) return false;

            return true;
        }

        public function toPublicArray()
        {
            return [
                "offer_id" => (int) $this->getId(),
                "title"    => (string) $this->getData("title"),
                "body"     => (string) $this->getData("body"),
                "starts_at"=> $this->getData("starts_at"),
                "ends_at"  => $this->getData("ends_at"),
            ];
        }
    }
