<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajuda extends CI_Controller {

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
		$a = new Ajudas();
		$dados['comunicados'] = ($a->get_ajuda('C'));
		#echo "<pre>"; print_r($dados['comunicados']); echo "</pre>";
		$this->parser->parse('comunicados_vw',$dados);
	}
	
	public function save_comunicado(){
		$dados 					= 	$_POST;
		$dados['data_hora_aju']	=	date('Y-m-d h:m:s');
		#echo "<pre>"; print_r($dados); echo "</pre>";
		$a 						= new Ajudas();
		$a->salvar($dados);
		redirect('index.php/ajuda');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */