<?php
require_once 'includes/head.php';

?>

<ul id="myTab" class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#informacoes" role="tab" data-toggle="tab">Informações</a></li>
      <li class=""><a href="#meupacote" role="tab" data-toggle="tab">Meu Pacote</a></li>
      <li class=""><a href="#meucombo" role="tab" data-toggle="tab">Meu Combo</a></li>
      <li class=""><a href="#ultimosacessos" role="tab" data-toggle="tab">Últimos Acessos</a></li>
      <li class=""><a href="#configuracoes" role="tab" data-toggle="tab">Configurações</a></li>
      <!-- <li class="dropdown active">
        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
          <li class="active"><a href="#dropdown1" tabindex="-1" role="tab" data-toggle="tab">@fat</a></li>
          <li class=""><a href="#dropdown2" tabindex="-1" role="tab" data-toggle="tab">@mdo</a></li>
        </ul>
      </li> -->
    </ul>
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="informacoes">
    	
    	<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Dados Empresa</h3>
      </div>
      <div class="panel-body">
        <form action="pagina_inicial/save_empresa" method="POST" id="form_dados_empresa">
        <input type="hidden" value="{id}" name="id">
        <div class="input-group">
		  <span class="input-group-addon">Nome Empresa</span>
		  <input type="text" class="form-control" placeholder="Nome da empresa" readonly="true" name="nome_emp" value="{nome_emp}">
		</div>
        
        <div class="input-group">
		  <span class="input-group-addon">CPF/CNPJ</span>
		  <input type="text" class="form-control" placeholder="CPF ou CNPJ"  readonly="true" name="cpfcnpj_emp" value="{cpfcnpj_emp}">
		</div>
		
		<div class="input-group">
		  <span class="input-group-addon">Endereço</span>
		  <input type="text" class="form-control" placeholder="Endereço" readonly="true" name="endereco_emp" value="{endereco_emp}">
		</div> 
		
		<div class="input-group">
		  <span class="input-group-addon">Pais</span>
		  <input type="text" class="form-control" placeholder="Pais" readonly="true"  name="pais_emp" value="{pais_emp}">
		</div>
		   
      </div>
    </div>
        
        
        <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Conta Bancária</h3>
      </div>
      <div class="panel-body">
        
        <div class="input-group">
		  <span class="input-group-addon">Banco</span>
		  <input type="text" class="form-control" placeholder="Banco" readonly="true" name="banco_emp" value="{banco_emp}">
		</div>
		
		<div class="input-group">
		  <span class="input-group-addon">Agência</span>
		  <input type="text" class="form-control" placeholder="Agência"  readonly="true" name="agencia_emp" value="{agencia_emp}">
		</div>
		
        <div class="input-group">
		  <span class="input-group-addon">Conta</span>
		  <input type="text" class="form-control" placeholder="Conta"  readonly="true" name="conta_emp" value="{conta_emp}">
		</div>
		        
      </div>
      
    </div>
        
              <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Informações Adicionais</h3>
      </div>
      <div class="panel-body">
        
       <div class="input-group">
		  <span class="input-group-addon">Observações</span>
		  <input type="text" class="form-control" placeholder="Observações"  readonly="true" name="observacoes_emp" value="{observacoes_emp}">
		</div>
		        
      </div>
      
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary" id="salvar">Salvar</button>
        </div>
    </div>
        </form>
      </div>
      
      <div class="tab-pane fade" id="meupacote">
        
        <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Dados</h3>
      </div>
      <div class="panel-body">
        
        <div class="input-group">
		  <span class="input-group-addon">Data de Cadastro</span>
		  <input type="text" class="form-control" placeholder="Username">
		</div>
        
        <div class="input-group">
		  <span class="input-group-addon">Ativo</span>
		  <input type="text" class="form-control" placeholder="Username">
		</div>
		
		<div class="input-group">
		  <span class="input-group-addon">Plano Escolhido</span>
		  <input type="text" class="form-control" placeholder="Username">
		</div> 
		
		<div class="input-group">
		  <span class="input-group-addon">Descrição</span>
		  <input type="text" class="form-control" placeholder="Username">
		</div>
		   
		<div class="input-group">
		  <span class="input-group-addon">R$</span>
		  <input type="text" class="form-control" placeholder="Username">
		</div>
		
		<div class="input-group">
		  <span class="input-group-addon">Pagamento</span>
		  <input type="text" class="form-control" placeholder="Username">
		</div>
		
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Mudar Plano</button>
		    </div>
	  </div>
		
      </div>
    </div>
        
      </div>
      
      <div class="tab-pane fade" id="meucombo">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
      </div>
      
      <div class="tab-pane fade" id="ultimosacessos">
        
        
        <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>IP</th>
            <th>Data</th>
            <th>Hora</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          </tr>
        </tbody>
      </table>
    </div>
    
      </div>
      
      <div class="tab-pane fade" id="configuracoes">
        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
      </div>
    </div>
