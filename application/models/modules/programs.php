<?php
    namespace models\modules;
    use core\engine\Model;

    class Programs extends Model
    {
        public function getPrograms()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "programs";
            return $this->db->getAllRows($sql);
        }

        public function getProgramServices($program_id)
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "program_services WHERE program_id = " . (int)$program_id;
            return $this->db->getAllRows($sql);
        }
    }