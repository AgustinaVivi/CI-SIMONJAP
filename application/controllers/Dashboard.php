<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('UsersModel', 'data_user');
        $this->load->model('PendudukModel', 'data_penduduk');
    }
    
    public function index() {
        $data['user'] = $this->data_user->getData();
        $data['total'] = $this->data_penduduk->getJumlah();
        $this->load->view('pages/dashboard', $data);
     }
}