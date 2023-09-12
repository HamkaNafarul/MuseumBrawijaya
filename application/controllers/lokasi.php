<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class lokasi extends CI_Controller {

	public function index()
	{
		$data['title']		= 'Jadwal';
		$data['page']		= 'lokasi/index';

		$this->load->view('front/layouts/main', $data);
	}

}

/* End of file Controllername.php */
