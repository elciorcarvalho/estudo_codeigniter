<?php
class Blog extends CI_Controller
{
	public function index()
	{
		// Inserir
		$data['title'] = 'Meu Blog CodeIgniter';
		$data['page_title'] = 'Olá Blog CodeIgniter';
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

		$this->load->helper('url');
		$data['link_p_google'] = "echo anchor('http://google.com', 'Click Here');"

		$this->load->view('blogview', $data);		
	}

	public function welcome()
	{
		echo "<h1>Bem-vindo, usuário!</h1>";
	}
}