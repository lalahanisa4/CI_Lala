<?php

class hello extends CI_Controller {

public function index()
{
	$data['nama'] = "orang cantik";
	$this->load->view('hello_view',$data);
}
public function namasaya()
{
	$data['nama'] = "Lala";
	$this->load->view('hello_view',$data);
}
}