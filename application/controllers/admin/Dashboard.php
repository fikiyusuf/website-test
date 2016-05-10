<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');
class Dashboard extends CI_Controller {
 public function index(){
 if ($this->session->userdata('username')) {
 $data = array('title' => 'Halaman Dashboard Administrator - TUTORIAL-IT',
 'isi' => 'admin/dashboard/dashboard_view'
 );
 
 $this->load->view('admin/layout/wrapper', $data);
 }
 else {
 redirect('admin/login');
 }
 }
}