<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('san_pham/m_san_pham');
	}
	function index()
	{
		$result['data']=$this->m_san_pham->dispsp1();
		$this->load->view('main/index',$result);
	}
	public function detailproduct()
	{
		$id=$this->input->get('id');
		$result['dispid']=$this->m_san_pham->displayrecordsById($id);
		$sx=$this->input->get('sx');
		$data['dispsx']=$this->m_san_pham->displayrecordsBysx($sx);
		$lq=$this->input->get('lq');
		$result['displq']=$this->m_san_pham->displayrecordsBysx($lq);
		$this->load->view('detail/san_pham_chi_tiet',$result,$data);
	}
	public function user()
	{
		$this->load->view('user/Dang_nhap');
	}
	public function do_lam_banh()
	{
		$result['data']=$this->m_san_pham->dispsp();
		$this->load->view('navbar/do_lam_banh',$result);
	}
	public function do_nau_an()
	{
		$result['data']=$this->m_san_pham->dispsp2();
		$this->load->view('navbar/do_nau_an',$result);
	}
	public function do_pha_che()
	{
		$result['data']=$this->m_san_pham->dispsp3();
		$this->load->view('navbar/do_pha_che',$result);
	}
	public function khach_kinh_doanh()
	{
		$this->load->view('navbar/khach_kinh_doanh');
	}
	public function ship_hang()
	{
		$this->load->view('navbar/ship_hang');
	}
	public function blog()
	{
		$this->load->view('navbar/blog');
	}
	public function dia_chi()
	{
		$this->load->view('navbar/dia_chi');
	}

}

/* End of file Suno.php */
/* Location: ./application/controllers/Suno.php */