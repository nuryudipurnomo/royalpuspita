<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$content = array(
			"main" => $this->contentHome(),
			"title"		=> ucfirst("home"),
			"company"	=> ucfirst("royalpuspita"),
			);
		$this->load->view("html/mainTemplate", $content);
	}
//content home
	public function contentHome(){
		$data = array(
			);
		return $this->load->view("html/pages/homeContent", $data, true);
	}
//end content home

//content data
	public function data(){
		$content = array(
			"main" 		=> $this->contentDataBoneka('', true),
			"title"		=> ucfirst("home"),
			"company"	=> ucfirst("royalpuspita"),
			);
		$this->load->view("html/mainTemplate", $content);
	}

	public function contentDataBoneka(){
		$data = array(
			
			);
		return $this->load->view("html/pages/daftarBonekaContent2", $data, true);
	}
//end content data
}
