<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {


    function __construct(){
        parent::__construct();
    }

	public function display()
	{
        // echo "Hello World";
        // $this->load->view('v_mahasiswa');
        $this->load->view('v_mahasiswa_table');
	}
}