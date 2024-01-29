<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->db      = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        echo view('common/header');
        echo view('pages/index');
        echo view('common/footer');
    }
    public function contactus()
    {
        echo view('common/header');
        echo view('pages/contactus');
        echo view('common/footer');
    }

    public function privacy()
    {
        echo view('common/header');
        echo view('pages/privacy-and-policy');
        echo view('common/footer');
    }

    public function termsAndConditions()
    {
        echo view('common/header');
        echo view('pages/terms-and-conditions');
        echo view('common/footer');
    }

    public function courses()
    {
        echo view('common/header');
        echo view('pages/courses');
        echo view('common/footer');
    }

    public function cca_course()
    {
        echo view('common/header');
        echo view('pages/cca-course');
        echo view('common/footer');
    }
}
