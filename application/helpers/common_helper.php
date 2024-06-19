<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// date functions
function setDateTime()
{
	return date('Y-m-d H:i:s');
}
function setDateOnly()
{
	return date('Y-m-d');
}
function convertDatedmy($dt)
{
	return date("d-m-Y", strtotime($dt));
}
function convertDatedmyhis($dt)
{
	return date("d-m-Y H:i s", strtotime($dt));
}
function dateDiff($date1, $date2)
{
	$date1_ts = strtotime($date1);
	$date2_ts = strtotime($date2);
	$diff = $date2_ts - $date1_ts;
	return round($diff / 86400);
}
function getDateAfter($startDate, $daysToAdd)
{
	$startDateTimestamp = strtotime($startDate);
	$newDateTimestamp = strtotime("+$daysToAdd days", $startDateTimestamp);
	return date('Y-m-d', $newDateTimestamp);
}
// sessions function
function sessionId($id)
{
	$ci = &get_instance();
	return $ci->session->userdata($id);
}
function userData($var, $message)
{
	$ci = &get_instance();
	return $ci->session->set_userdata($var, $message);
}
function userMutiData($data)
{
	$ci = &get_instance();
	return $ci->session->set_userdata($data);
}
function unset_userdata($data)
{
	$ci = &get_instance();
	$ci->session->unset_userdata($data);
}
// insert in database
function insertRow($table, $data)
{
	$ci = &get_instance();
	$clean = $ci->security->xss_clean($data);
	return $ci->db->insert($table, $clean);
}
function insertRowreturnId($table, $data)
{
	$ci = &get_instance();
	$ci->db->insert($table, $data);
	return $ci->db->insert_id();
}
// fetch data from database
function getData($table, $where = [], $start = null, $end = null, $type = 'all', $column = null, $ordtype = 'desc')
{
	$ci = &get_instance();
	$ci->db->select()->from($table)->where($where);
	if (!is_null($column)) {
		$ci->db->order_by($column, $ordtype);
	}
	if (!is_null($start) && !is_null($end)) {
		$ci->db->limit($end, $start);
	}
	$get = $ci->db->get();
	if ($get->num_rows() > 0) {
		if ($type == 'all') {
			return $get->result_array();
		} else {
			return $get->row_array();
		}
	} else {
		return false;
	}
}
function getNumRows($table, $where)
{
	$ci = &get_instance();
	$get = $ci->db->select()
		->from($table)
		->where($where)
		->get();
	return $get->num_rows();
}
// update data in databse
function updateRowById($table, $column, $id, $data)
{
	$ci = &get_instance();
	$clean = $ci->security->xss_clean($data);
	$query = $ci->db->where($column, $id)
		->update($table, $clean);
	return $ci->db->affected_rows();
}
// delete data in database
function deleteRowById($table, $where, $image = null, $path = null)
{
	$ci = &get_instance();
	if ($image != null) {
		$row = getData($table, $where, 'single');
		if (file_exists($row['picture'])) {
			unlink($path . $image);
		}
	}
	$ci->db->where($where);
	$ci->db->delete($table);
	if ($ci->db->affected_rows() > 0) {
		return true;
	} else {
		return $ci->db->error();
	}
}
// encryption 
function encryptId($id)
{
	$ci = &get_instance();
	$key = $ci->encrypt->encode($id);
	return $key;
}
function decryptId($key)
{
	$ci = &get_instance();
	$id = $ci->encrypt->decode($key);
	return $id;
}
function sendmail($username, $password, $fromName, $sendToEmail, $subject, $mail_body, $cc, $bcc, $attachment = null)
{
	$config['protocol']    = 'smtp';
	$config['smtp_host']    = HOST;
	$config['smtp_port']    = '25';
	$config['smtp_user']    = $username;
	$config['smtp_pass']    = $password;
	$config['charset']    = 'utf-8';
	$config['newline']    = "\n";
	$config['mailtype'] = 'html';
	$ci = &get_instance();
	$ci->email->initialize($config);
	$ci->email->from($username, $fromName);
	$ci->email->to($sendToEmail);
	$ci->email->cc($cc);
	$ci->email->bcc($bcc);
	$ci->email->subject($subject);
	$ci->email->message($mail_body);
	if ($attachment != null) {
		$ci->email->attach(base_url() . $attachment, 'inline');
	}
	$rtr = $ci->email->send();
	return $rtr;
}
function imageUpload($imageName, $path)
{
	// print_r($_FILES);exit;
	$ci = &get_instance();

	// Check if the directory exists, if not create it
	if (!is_dir($path)) {
		mkdir($path, 0755, true);
	}

	$config['file_name'] = date('dm') . round(microtime(true) * 1000);
	$config['allowed_types'] = '*';
	$config['upload_path'] = $path;
	$target_path = $path;
	$config['remove_spaces'] = true;
	$config['overwrite'] = false;

	$ci->load->library('upload', $config);
	$ci->upload->initialize($config);

	if ($ci->upload->do_upload($imageName)) {
		$data = array('upload_data' => $ci->upload->data());
		$path = $data['upload_data']['full_path'];
		$picture = $data['upload_data']['file_name'];

		$configi['image_library'] = 'gd2';
		$configi['quality'] = '100%';
		$configi['create_thumb'] = FALSE;
		$configi['source_image'] = $path;
		$configi['new_image'] = $target_path;
		$configi['maintain_ratio'] = TRUE;
		$configi['width'] = 380;
		$configi['height'] = 260;

		$ci->load->library('image_lib');
		$ci->image_lib->initialize($configi);
		$ci->image_lib->resize();

		return $picture;
	} else {
		// return false;
		return $ci->upload->display_errors();
	}
}
function load_view_with_layout($content_view, $common_data = array(), $header_data = array(), $content_data = array(), $footer_data = array())
{
	$ci = &get_instance();

	// Merge common data with specific data
	$header_data = array_merge($common_data, $header_data);
	$content_data = array_merge($common_data, $content_data);
	$footer_data = array_merge($common_data, $footer_data);

	$ci->load->view('commonfiles/header', $header_data);
	$ci->load->view($content_view, $content_data);
	$ci->load->view('commonfiles/footer', $footer_data);
}

function load_admin_view_with_layout($content_view, $common_data = array())
{
	$ci = &get_instance();

	$ci->load->view('admin/includes/header', $common_data);
	if ($common_data['type'] == 'dashboard') {
		$ci->load->view('admin/includes/menu', $common_data);
	}
	$ci->load->view($content_view, $common_data);
	if ($common_data['type'] == 'dashboard') {
		$ci->load->view('admin/includes/footer', $common_data);
	}
	$ci->load->view('admin/includes/footer-link', $common_data);
}
function checkImageFile($imageName, $imagePath)
{
	$defaultFilename = base_url() . 'uploads/default.jpg';
	if ($imageName == '') {
	} else {
		$filePath = rtrim($imagePath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $imageName;
		if (file_exists($filePath) && filesize($filePath) > 0) {
			return base_url() . $filePath;
		}
	}

	return base_url() . $defaultFilename;
}

function processUploadedFiles($files, $uploadDir)
{
	$filesname = [];
	if (!empty($files['picture'])) {
		for ($i = 0; $i < count($files['picture']['name']); $i++) {
			if (!empty($files['picture']['name'][$i])) {
				$_FILES['uploadedFile'] = [
					'name' => $files['picture']['name'][$i],
					'full_path' => $files['picture']['full_path'][$i],
					'type' => $files['picture']['type'][$i],
					'tmp_name' => $files['picture']['tmp_name'][$i],
					'error' => $files['picture']['error'][$i],
					'size' => $files['picture']['size'][$i]
				];
				$filesname[] = imageUpload('uploadedFile', $uploadDir);
			}
		}
	}

	return $filesname;
}
