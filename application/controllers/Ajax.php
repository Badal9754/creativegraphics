<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{
    public function index()
    {
    }
    public function delete()
    {
        extract($_POST);
        $table = ' ';
        $idnm = ' ';
        if ($datatable == 'manager') {
            $table = 'tbl_managers';
            $idnm = 'manager_id';
        }
        if ($datatable == 'user') {
            $table = 'tbl_users';
            $idnm = 'user_id';
        }
         
        $update = $this->CommonModal->deleteRowById($table, array($idnm => $dataid));
        if ($update) {
            echo '1';
        } else {
            echo '0';
        }
    }
}
