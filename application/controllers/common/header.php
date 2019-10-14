<?php
	namespace controllers\common;
	use core\engine\Controller;

	class Header extends Controller
	{
		public function index()
		{
            $data['desktop_menu'] = $this->load->controller('common/menu')->mainMenu('desktop');
            $data['mobile_menu'] = $this->load->controller('common/menu')->mainMenu('mobile');

			return $this->load->view('common/header', $data);
		}
	}
