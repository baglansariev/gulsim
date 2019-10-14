<?php
    namespace models\modules;
    use core\engine\Model;

    class Certificates extends Model
    {
        public function getCertificates()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "certificates";
            return $this->db->getAllRows($sql);
        }
    }