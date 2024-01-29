<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

class FormController extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->db      = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    /** Contact Form submission start */

	public function submitContactForm()
	{
        $data = $this->formValidation();
        $redirect = $data['isContactForm'] ? "contact-us" : "courses";
        // Now, you can use the validation instance to check the rules
        if ($data['status']) {
            $this->saveFormData($data['formData'], "contact_us");
            $this->session->setFlashdata('success', 'Your message has been sent. Thank you!');
            return redirect()->route($redirect);
        } else {
            // Validation failed
            $errors = $this->validation->getErrors();
            // Validation failed, return to the form with errors
        }
        $this->session->setFlashdata('error', 'An error occurred, While submitting!');
        return redirect()->route($redirect);
	}

    public function formValidation() {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $requirement = ($_POST['requirement']) ??"";
        $type = isset($_POST['requirement']) ? 1 : 2;
        $isContactForm = isset($_POST['requirement']) ? true : false;
        $formData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'type' => $type,
            'requirement' => $requirement
        ];

        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email',
            'phone' => 'required'
        ];
        
        // Set the rules
        $this->validation->setRules($rules);
        $status =  $this->validation->run($formData);
        return [
            "status" => $status,
            "isContactForm" => $isContactForm,
            "formData" => $formData
        ];
    }

    /** Contact Form submission end */


    
    /** phone request Form submission start */

	public function requestCallForm()
	{
        $phone = $_POST['call_number'];
        $formData = [
            'phone' => $phone,
        ];
        // Now, you can use the validation instance to check the rules
        if (!empty($phone)) {
            $this->saveFormData($formData, "call_request");
            $this->session->setFlashdata('success', 'Request Sumitted');
            return redirect()->route('/');
        } else {
            // Validation failed
            $errors = $this->validation->getErrors();
            // Validation failed, return to the form with errors
        }
        $this->session->setFlashdata('error', 'An error occurred, While submitting!');
        return redirect()->route('/');
	}

    /** request Form submission end */

    public function saveFormData($data, $table) {
        // Get an instance of the database query builder
        $builder = $this->db->table($table);

        // Insert the data
        $builder->insert($data);
        // Get the last inserted ID
        $insertId = $this->db->insertID();

        return $insertId;
    }
}
