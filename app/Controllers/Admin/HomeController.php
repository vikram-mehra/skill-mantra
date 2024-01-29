<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use CodeIgniter\Controller;

class HomeController extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->db = \Config\Database::connect();
        $this->validation = \Config\Services::validation();
    }
    
    public function index()
    {
        echo view('admin/common/header');
        echo view('admin/pages/index');
        echo view('admin/common/footer');
    }

    public function dashboard()
    {
        $admin_id = $this->session->has('admin_id');
		if($admin_id)
		{
            echo view('admin/common/header');
            echo view('admin/common/sidebar');
            echo view('admin/pages/dashboard');
            echo view('admin/common/footer');
		}
		else
		{
            return redirect()->route('admin');
		}
    }
    public function contactList()
    {
        $query = $this->db->table('contact_us');
        // $query->where(['type' => 1]);
        $results = $query->get()->getResult();
        $admin_id = $this->session->has('admin_id');
		if($admin_id)
		{
            echo view('admin/common/header');
            echo view('admin/common/sidebar');
            echo view('admin/pages/contact_list', ['data' => $results]);
            echo view('admin/common/footer');
		}
		else
		{
            return redirect()->route('admin');
		}
    }
    public function callRequestList()
    {
        $admin_id = $this->session->has('admin_id');
		if($admin_id)
		{
            $query = $this->db->table('call_request');
            $results = $query->get()->getResult();
            echo view('admin/common/header');
            echo view('admin/common/sidebar');
            echo view('admin/pages/call_request_list', ['data' => $results]);
            echo view('admin/common/footer');
		}
		else
		{
            return redirect()->route('admin');
		}
    }
        /** visa Form submission start */

    public function updateFormData($key, $id, $data, $table) {
        // Get an instance of the database query builder
        $builder = $this->db->table($table);
    
        // Update the data based on the provided ID
        $builder->where($key, $id);
        $builder->update($data);
    
        // Return the number of affected rows (can be used to check if the update was successful)
        return $this->db->affectedRows();
    }

    /** visa Form submission end */
}
