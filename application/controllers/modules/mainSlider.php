<?php
    namespace controllers\modules;
    use core\engine\Controller;

    class MainSlider extends Controller
    {
        public function index()
        {
            $slider_module = $this->load->model('modules/mainSlider');
            $data = array();

            $slider = $slider_module->getSlides();
            if($slider){
                $data['slider'] = array();

                foreach($slider as $key => $slide){
                    $data['slider'][$key]['id'] = $slide['id'];
                    $data['slider'][$key]['title'] = $slide['title'];
                    $data['slider'][$key]['subtitle'] = $slide['subtitle'];
                    $data['slider'][$key]['img'] = $slide['img'];
                    $data['slider'][$key]['links'] = $slider_module->getSlideLinks($slide['id']);
                }
            }

            return $this->load->view('modules/main-slider', $data);
        }
    }