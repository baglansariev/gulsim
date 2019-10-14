<?php
    namespace models\modules;
    use core\engine\Model;

    class MainSlider extends Model
    {
        public function getSlides()
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "slider";
            return $this->db->getAllRows($sql);
        }

        public function getSlideLinks($slide_id)
        {
            $sql = "SELECT * FROM " . DB_PREFIX . "slider_links WHERE slide_id = " . (int)$slide_id;
            return $this->db->getAllRows($sql);
        }
    }