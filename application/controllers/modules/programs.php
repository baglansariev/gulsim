<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class Programs extends Controller
    {
        public function index()
        {
            $data = array();
            $programs_module = $this->load->model('modules/programs');

            $programs = $programs_module->getPrograms();
            if($programs){
                $data['programs'] = array();

                foreach($programs as $key => $program){
                    $data['programs'][$key]['id'] = $program['id'];
                    $data['programs'][$key]['title'] = $program['title'];
                    $data['programs'][$key]['subtitle'] = $program['subtitle'];
                    $data['programs'][$key]['img'] = $program['img'];
                    $data['programs'][$key]['duration'] = $program['duration'];
                    $data['programs'][$key]['price_m'] = number_format($program['price_m'], 0, '', ' ');
                    $data['programs'][$key]['price_w'] = number_format($program['price_w'], 0, '', ' ');
                    $data['programs'][$key]['button_text'] = $program['button_text'];
                    $data['programs'][$key]['button_link'] = $program['button_link'];
                    $data['programs'][$key]['services'] = $programs_module->getProgramServices($program['id']);
                }
            }

            return $this->load->view('modules/programs', $data);
        }
    }