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
        {dados_empresa}
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
		  <input type="text" class="form-control" placeholder="Endere√ßo" readonly="true" name="endereco_emp" value="{endereco_emp}">
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
		  <input type="text" class="form-control" placeholder="Agencia"  readonly="true" name="agencia_emp" value="{agencia_emp}">
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
        {/dados_empresa}

        </form>
      </div>
      
      <div class="tab-pane fade" id="meupacote">
          <div class="content slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
		<ul class="responsive">
			<li class="header-section">
				<p class="placefiller">
					<div class="embed-responsive embed-responsive-4by3" style="width:100%;">
					  <iframe class="embed-responsive-item" src="../../lojavirtual/sales/order/history/" style="width:100%;"></iframe>
					</div>
				</p>
			</li>
			<li class="body-section">
				<p class="placefiller"></p>
			</li>
			</ul>
      </div>
        <!-- 
        <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Dados</h3>
      </div>
      <div class="panel-body">
        
        <div class="input-group">
		  <span class="input-group-addon">Data de Cadastro</span>
		  <input type="text" class="form-control" placeholder="Data de Cadastro">
		</div>
        
        <div class="input-group">
		  <span class="input-group-addon">Ativo</span>
		  <input type="text" class="form-control" placeholder="Aivo">
		</div>
		
		<div class="input-group">
		  <span class="input-group-addon">Plano Escolhido</span>
		  <input type="text" class="form-control" placeholder="Plano Escolhio">
		</div> 
		
		<div class="input-group">
		  <span class="input-group-addon">Descrição</span>
		  <input type="text" class="form-control" placeholder="Descricao">
		</div>
		   
		<div class="input-group">
		  <span class="input-group-addon">R$</span>
		  <input type="text" class="form-control" placeholder="Valor">
		</div>
		
		<div class="input-group">
		  <span class="input-group-addon">Pagamento</span>
		  <input type="text" class="form-control" placeholder="Pagamento">
		</div>
		
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Mudar Plano</button>
		    </div>
	  </div>
		
      </div>
    </div> -->
        
      </div>
      
      <div class="tab-pane fade" id="meucombo">
        <div class="content slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
		<ul class="responsive">
			<li class="header-section">
				<p class="placefiller">
					<div class="embed-responsive embed-responsive-4by3" style="width:100%;">
					  <iframe class="embed-responsive-item" src="../../lojavirtual/sales/order/history/" style="width:100%;"></iframe>
					</div>
				</p>
			</li>
			<li class="body-section">
				<p class="placefiller"></p>
			</li>
			</ul>
      </div>
      </div>
      
      <div class="tab-pane fade" id="ultimosacessos">
        
        
        <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>IP</th>
            <th>Data / Hora</th>
            <th>Navegador</th>
          </tr>
        </thead>
        <tbody>
        {acessos}
          <tr>
          <td>{ip}</td>
          <td>{data_hora}</td>
          <td>{navegador}</td>
          </tr>
          {/acessos}
        </tbody>
      </table>
    </div>
    
      </div>
      
      <div class="tab-pane fade" id="configuracoes">
      <form action="pagina_inicial/save_configuracoes" method="POST" id="form_dados_empresa">
      {dados_configuracoes}
      <input type="hidden" value="{id}" name="id">
    <div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="tipo_lado" value="D" {lado_direito}>
      </span>
      <input type="text" class="form-control" value="Direita" disabled>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
    <div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="tipo_lado" value="E" {lado_esquerdo}>
      </span>
      <input type="text" class="form-control" value="Esquerda" disabled>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

<div class="col-lg-3">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="tipo_lado" value="B" {lado_balanco}>
      </span>
      <input type="text" class="form-control" value="Balanço" disabled>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->





  <div class="col-lg-3">
    <div class="input-group">
      
        <button type="submit" class="btn btn-primary">Salvar</button>
        {/dados_configuracoes}
      </form>
      
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

      </div>
    </div>
