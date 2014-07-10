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
		$a = new Acessos();
		$c = new Configuracoes();
		$dados['dados_empresa'] = array($e->get_empresa(1));
		$this->save_dados_acesso();
		$dados['acessos'] = $a->get_acessos();
		$dados['dados_configuracoes'] = array($c->get_configuracoes());
		if(!empty($dados['dados_configuracoes'])){
			if($dados['dados_configuracoes'][0]['tipo_lado'] == 'D'){
				$dados['dados_configuracoes'][0]['lado_direito']="checked";	
			}
			else if($dados['dados_configuracoes'][0]['tipo_lado'] == 'E'){
				$dados['dados_configuracoes'][0]['lado_esquerdo']="checked";	
			}
			else if($dados['dados_configuracoes'][0]['tipo_lado'] == 'B'){
				$dados['dados_configuracoes'][0]['lado_balanco']="checked";	
			}
		}
		//echo "<pre>"; print_r($dados['dados_configuracoes']); echo "</pre>";
		$this->parser->parse('pagina_inicial',$dados);
	}

	public function save_empresa(){
		$dados = $_POST;
		$e = new Empresa;
		$e->salvar($dados);
	}
	
	public function save_configuracoes(){
		$dados 	= $_POST;
		//echo "<pre>"; print_r($dados); echo "</pre>";
		$c 		= new Configuracoes();
		$c->salvar($dados);
	}
	
	public function save_dados_acesso(){
		$a = new Acessos();
		$dados['ip']		= $this->session->userdata('ip_address');
		$dados['data_hora']	= date('Y-m-d h:m:s');
		$dados['navegador'] = $this->session->userdata('user_agent');
		
		$a->salvar($dados);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */