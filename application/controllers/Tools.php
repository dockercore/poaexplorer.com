<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller {
	
	public function __construct()
	{
       	parent::__construct();
        $this->load->model('Api_model');
   	}
	public function verify()
	{
		$data['compilers'] = json_decode(file_get_contents('https://ethereum.github.io/solc-bin/bin/list.json'));
		$data['title'] = 'POA Network Explorer - Verify Smart Contract';
		$data['main'] = 'tools/verify';
		$this->load->view('template/file', $data);
	}
	
	public function api()
	{
		$data['title'] = 'POA Network Explorer - Api';
		$data['main'] = 'tools/api';
		$this->load->view('template/file', $data);
	}
	
	public function opcode()
	{
		$data['title'] = 'POA Network Explorer - Byte Code to OPCode';
		$data['main'] = 'tools/opcode';
		$this->load->view('template/file', $data);
	}
	
	public function totalpoa()
	{
		$data['total'] = $this->Api_model->circulating_supply();
		echo $data['total'];
	}
}
