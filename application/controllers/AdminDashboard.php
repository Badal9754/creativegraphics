<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{
    public $profile_data = array();
    public function __construct()
    {
        parent::__construct();
        if (sessionId('user_id') == "") {
            redirect(base_url("login"));
        }
        $this->profile_data = $this->CommonModal->getRowById('registeration', 'id', sessionId('user_id'));
        date_default_timezone_set("Asia/Kolkata");
    }
    public function index()
    {

        $data = array(
            'title' => 'Home',
            'pagetitle' => 'Dashboard',
            'breadcrumbs1' => '',
            'breadcrumbs2' => '',
            'type' => 'dashboard'
        );
        load_admin_view_with_layout('admin/dashboard', $data);
    }
    public function manage_category($cat_id = 0)
    {

        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        if ($cat_id != 0) {
            $data['category_row'] = $this->CommonModal->getSingleRowById('category', ['id' => $cat_id]);
        } else {
            $data['category_row'] = [];
        }
        if (isset($_GET['did'])) {
            $is_delete = $this->CommonModal->deleteRowById('category', ['id' => $_GET['did']]);
            if ($is_delete) {
                userMutiData(['type' => 'success', 'message' => 'Category deleted successfully']);
            } else {
                userMutiData(['type' => 'error', 'message' => 'Not deleted.Please try again later.']);
            }
            redirect(base_url('manage_category'));
        }
        if (count($_POST) > 0) {
            $post = $this->input->post();
            if ($_FILES['picture']['name'] != '') {
                $post['picture'] = imageUpload('picture', 'uploads/category/');
            }
            if ($cat_id != 0) {
                $saved = $this->CommonModal->updateRowById('category', 'id', $cat_id, $post);
                userMutiData(['type' => 'success', 'message' => 'Category updated successfully']);
            } else {
                $saved = $this->CommonModal->insertRowReturnId('category', $post);
                userMutiData(['type' => 'success', 'message' => 'Category Added successfully']);
            }
            if (!$saved) {
                userMutiData(['type' => 'error', 'message' => 'Facing some error. Please try again later.']);
            }
            redirect(base_url('manage_category'));
        }
        load_admin_view_with_layout('admin/manage_category', $data);
    }

    public function profile()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/profile', $data);
    }

    public function wallet()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/wallet', $data);
    }

    public function change_password()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/change_password', $data);
    }
    public function product($pro_id = 0)
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'product',
            'breadcrumbs2' => 'Manage product',
            'type' => 'dashboard',
            'product' => getData('product'),
            'category' => getData('category')
        );
        if ($pro_id != 0) {
            $data['product_row'] = $this->CommonModal->getSingleRowById('product', ['id' => $pro_id]);
        } else {
            $data['product_row'] = [];
        }
        if (isset($_GET['did'])) {
            $is_delete = $this->CommonModal->deleteRowById('product', ['id' => $_GET['did']]);
            if ($is_delete) {
                userMutiData(['type' => 'success', 'message' => 'Product deleted successfully']);
            } else {
                userMutiData(['type' => 'error', 'message' => 'Not deleted.Please try again later.']);
            }
            redirect(base_url('product'));
        }
        if (count($_POST) > 0) {

            $post = $this->input->post();
            $files = processUploadedFiles($_FILES, 'uploads/product/');

            if ($pro_id != 0) {
                $saved = $this->CommonModal->updateRowById('product', 'id', $pro_id, $post);
                userMutiData(['type' => 'success', 'message' => 'product updated successfully']);
            } else {
                $saved = $this->CommonModal->insertRowReturnId('product', $post);

                foreach ($files as $pic_data) {
                    $picture_data = [];
                    $picture_data['picture'] = $pic_data;
                    $picture_data['product_id'] = $saved;
                    $saved_img = $this->CommonModal->insertRowReturnId('product_gallery', $picture_data);
                }
                userMutiData(['type' => 'success', 'message' => 'product Added successfully']);
            }
            if (!$saved) {
                userMutiData(['type' => 'error', 'message' => 'Facing some error. Please try again later.']);
            }
            
            redirect(base_url('product'));
        }
        load_admin_view_with_layout('admin/product', $data);
    }

    public function add_printing_press()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/add_printing_press', $data);
    }

    public function printing_press_list()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/printing_press_list', $data);
    }

    public function add_order()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/add_order', $data);
    }

    public function order_history()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/order_history', $data);
    }

    public function reporting()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/reporting', $data);
    }

    public function complaints()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/complaints', $data);
    }

    public function contact_us()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/contact_us', $data);
    }

    public function training_material()
    {
        $data = array(
            'title' => 'Setting',
            'pagetitle' => 'Setting',
            'breadcrumbs1' => 'Category',
            'breadcrumbs2' => 'Manage Category',
            'type' => 'dashboard',
            'category' => getData('category')
        );
        load_admin_view_with_layout('admin/training_material', $data);
    }
}
