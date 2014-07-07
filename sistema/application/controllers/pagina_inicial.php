<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagina_Inicial extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$e = new Empresa();
		$dados = $e->get_empresa(1);
		$this->parser->parse('pagina_inicial',$dados);
	}

	public function save_empresa(){
		$dados = $_POST;
		$e = new Empresa;
		$e->salvar($dados);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */