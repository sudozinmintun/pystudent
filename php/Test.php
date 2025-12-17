<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

	public function index()
	{
		$this->load->view('partials/styles_test');
	}

	public function other_index()
	{
		$this->load->view('partials/styles_test');
	}
}
