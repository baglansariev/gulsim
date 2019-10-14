<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class Certificates extends Controller
    {
        public function index()
        {
            $certificates_model = $this->load->model('modules/certificates');
            $data = array();

            $certificates = $certificates_model->getCertificates();
            if($certificates){
                $data['certificates'] = array();

                foreach($certificates as $key => $certificate){
                    $data['certificates'][$key]['id'] = $certificate['id'];
                    $data['certificates'][$key]['img'] = $certificate['img'];
                    $data['certificates'][$key]['thumbnail'] = $certificate['thumbnail'];
                }
            }

            return $this->load->view('modules/certificates', $data);
        }
    }