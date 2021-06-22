<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mahasiswa extends CI_Controller {
 
  public function __construct(){
    parent::__construct();
   
    $this->load->model('ModelTabel');
  }
 
  public function index(){
    $data['mahasiswa'] = $this->ModelTabel->view();
    $this->load->view('mahasiswa/index', $data);
  }
 
  public function tambah(){
    if($this->input->post('submit')){
      if($this->ModelTabel->validation("save")){
        $this->ModelTabel->save();
        redirect('mahasiswa');
      }
    }
   
    $this->load->view('mahasiswa/tambah');
  }
 
  public function ubah($nrp){
    if($this->input->post('submit')){
      if($this->ModelTabel->validation("update")){
        $this->ModelTabel->edit($nrp);
        redirect('mahasiswa');
      }
    }
   
    $data['mahasiswa'] = $this->ModelTabel->view_by($nrp);
    $this->load->view('mahasiswa/ubah', $data);
  }
 
  public function hapus($nrp){
    $this->ModelTabel->delete($nrp);
    redirect('mahasiswa');
  }
}