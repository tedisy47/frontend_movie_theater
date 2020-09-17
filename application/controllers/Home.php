<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$get = $this->input->get();
		if (!empty($get)) {
			# code...
			$param['url'] = $this->config->item( 'api' ).'film?'.$get['param'].'='.$get['value'];
			$data['filem'] = get_data($param);
		}else{
			$param['url'] = $this->config->item( 'api' ).'film';
			$data['film'] = get_data($param);
			
		}

		$param['url'] = $this->config->item( 'api' ).'geenre';
		$data['geenre'] = get_data($param);

		$data['title'] = 'film';
		$data['page'] = 'page/home';
		$this->load->view('index',$data);
	}
	public function detail($id)
	{
		if (empty($id)) {
			# code...
			redirect();
		}
		$param['url'] = $this->config->item( 'api' ).'film/'.$id.'/';
		$data['film'] = get_data($param);

		// print_r($data);die;
		$param['url'] = $this->config->item( 'api' ).'schedule?film='.$data['film']['id'];
		$data['schedule'] = get_data($param);

		$param['url'] = $this->config->item( 'api' ).'geenre';
		$data['geenre'] = get_data($param);

		$data['title'] = 'film';
		$data['page'] = 'page/detail';
		$this->load->view('index',$data);
	}
}

