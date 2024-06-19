<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data = array(
            'pagetitle' => 'Home'
        );
		load_view_with_layout('home', $data);
	}
	public function about()
	{
		$data = array(
            'pagetitle' => 'About us'
        );
		load_view_with_layout('about', $data);
	}
}
