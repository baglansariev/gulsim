<?php
    namespace models\common;
    use core\engine\Model;

    class Menu extends Model
    {
        public function getMenuList()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "menu";
            return $this->db->getAllRows($sql);
        }

        public function getAccountMenuList($status = false)
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "account_menu WHERE status = 'common' ";

            if($status == 'admin'){ $sql .= "OR status = '" . $status . "' "; }

            $sql .= "ORDER BY sort_order ASC";
            return $this->db->getAllRows($sql);
        }
    }