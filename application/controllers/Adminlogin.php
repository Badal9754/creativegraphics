<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminlogin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (sessionId('user_id') != "") {
			redirect(base_url("dashboard"));
		}
	}
	public function index()
	{
		$data['title'] = 'Admin login';
		$data['type'] = 'login'; 
		if (count($_POST) > 0) {
			$contact_no = $this->input->post('contact_no');
			$password = $this->input->post('password');
			$user_id = $this->CommonModal->getSingleRowById('registeration', ['contact_no' => $contact_no]);

			if ($user_id) {
				if ($user_id['password'] == $password) {
					$this->session->set_userdata('user_id', $user_id['id']);
					$this->session->set_userdata('user_type', $user_id['login_type']);
					redirect('dashboard');
				} else {
					userMutiData(['type' => 'error', 'message' => 'Invalid Password']);
				}
			} else {
				userMutiData(['type' => 'error', 'message' => 'Invalid Username']);
			}
			// redirect(base_url('login'));
		} 
		load_admin_view_with_layout('admin/login', $data );
	}
}
