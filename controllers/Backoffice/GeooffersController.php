<?php

    class Geooffers_Backoffice_GeooffersController extends Core_Controller_Backoffice_Default
    {
        public function indexAction()
        {
            // $this->loadPartials();
            // $this->render("geooffers/backoffice/index.phtml");
        }

        public function healthcheckAction()
        {
            // $db = Zend_Db_Table::getDefaultAdapter();
            // $tables = ["geooffers_offer", "geooffers_location", "geooffers_offer_location"];
            // foreach($tables as $t) { $db->query("SELECT 1 FROM {$t} LIMIT 1"); }
            // $this->_sendJson(["ok" => true]);

           
        }

        public function settingsAction()
        {
            
        }
    }
