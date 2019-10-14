<?php
	namespace controllers\pages;

	use core\engine\Controller;

	class HomeController extends Controller
	{

	    public function indexAction()
	    {
	    	$this->view->asset->setMetaDesc('Тест');
	    	$this->view->asset->setMetaKeys('Тест');
	    	$this->view->asset->setTitle('Гульсим');
	    	$this->view->asset->setCss('/public/style/css/main-slider.css');
	    	$this->view->asset->setCss('/public/style/css/programs.css');
	    	$this->view->asset->setCss('/public/style/css/services.css');

	    	$data['slider'] = $this->load->controller('modules/mainSlider');
	    	$data['programs'] = $this->load->controller('modules/programs');
	    	$data['services'] = $this->load->controller('modules/services');
            $data['about_me'] = $this->load->view('modules/about-me');
            $data['certificates'] = $this->load->controller('modules/certificates');
            $data['header'] = $this->load->controller('common/header');
	    	$data['footer'] = $this->load->controller('common/footer');
	    	$this->view->response('pages/home', $data);
	    }

//	    public function mailAction()
//        {
//            $json = array();
//
//            // Modal form send
//            if($this->request->has('modal-name') && $this->request->has('modal-phone') && $this->request->has('modal-message')){
//                $name = $this->request->post['modal-name'];
//                $phone = $this->request->post['modal-phone'];
//                $message = $this->request->post['modal-message'];
//                $course = 'нет';
//
//                if($this->request->has('modal-course')){
//                    $course = $this->request->post['modal-course'];
//                }
//                if(!$this->mail->formSend($name, $phone, $message, $course)){
//                    $json['error'] = $this->mail->error_msg;
//                }
//                else{
//                    $json['success'] = $this->mail->success_msg;
//                }
//                $this->response->outputJSON($json);
//            }
//            // form send
//            else if($this->request->has('main-name') && $this->request->has('main-phone') && $this->request->has('main-message')){
//                $json['success'] = 'YES';
//                $name = $this->request->post['main-name'];
//                $phone = $this->request->post['main-phone'];
//                $message = $this->request->post['main-message'];
//                $subject = '';
//
//                if($this->request->has('main-subject')){
//                    $subject = $this->request->post['main-subject'];
//                }
//                if(!$this->mail->formSend($name, $phone, $message, $subject)){
//                    $json['error'] = $this->mail->error_msg;
//                }
//                else{
//                    $json['success'] = $this->mail->success_msg;
//                }
//                $this->response->outputJSON($json);
//            }
//            else{
//                $this->view->errorResponse('errors/404', 404);
//            }
//        }
	}
