<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class Services extends Controller
    {
        public function index()
        {
            $data = array();
            $services_model = $this->load->model('modules/services');

            $services = $services_model->getServices();
            if($services){
                $data['services'] = array();
                foreach($services as $key => $service) {
                    $data['services'][$key]['id'] = $service['id'];
                    $data['services'][$key]['title'] = $service['title'];
                    $data['services'][$key]['img'] = $service['img'];
                    $data['services'][$key]['list'] = $services_model->getServiceList($service['id']);
                }
            }

            return $this->load->view('modules/services', $data);
        }
    }