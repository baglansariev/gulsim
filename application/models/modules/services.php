<?php
    namespace models\modules;
    use core\engine\Model;

    class Services extends Model
    {
        public function getServices()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "services ORDER BY sort_order ASC";
            return $this->db->getAllRows($sql);
        }

        public function getServiceList($service_id)
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "service_list WHERE service_id = " . (int)$service_id;
            return $this->db->getAllRows($sql);
        }
    }