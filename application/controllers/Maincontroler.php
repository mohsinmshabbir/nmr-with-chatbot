<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maincontroler extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('');
        $this->load->library('session');
        $this->load->database();
    }

	public function index()
	{
		$this->load->view('indexx');
	}

    public function showservices(){
        $this->load->view('service');
    }
    public function contactus(){
        $this->load->view('contact');
    }
    public function aboutus(){
        $this->load->view('about');
    }
}

?>