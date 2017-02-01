<?php
class Blog extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Meu Blog CodeIgniter';
		$data['page_title'] = 'Olá Blog CodeIgniter';
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands'); 

		$this->load->view('blogview', $data);
	}

	public function welcome()
	{
		echo "<h1>Bem-vindo!</h1>";
	}
}