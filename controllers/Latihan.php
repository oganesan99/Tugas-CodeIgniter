<?php
defined('BASEPATH') or exit('No direct 
script access allowed');

class Latihan extends CI_Controller{
    public function index(){
        $data = array(
            'kampus' =>"Universitas Universal",
            'email' => "info@uvers.ac.id",
            'telp' => "007"
        );
        $this->load->view('hello_uvers', $data);
    }
    public function tes(){
        echo"<h1>Menampilkan Langsung dari Controller</h1>";
    }
}