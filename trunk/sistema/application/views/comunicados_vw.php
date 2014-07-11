<?php
require_once 'includes/head.php';

?>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="#novo_comunicado">
    	
    	<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Novo Comunicado</h3>
      </div>
      <div class="panel-body">
         <form action="ajuda/save_comunicado" method="POST" id="form_dados_empresa">
        <input type="hidden" value="" name="id">
        <input type="hidden" value="C" name="tipo_aju">
        <input type="hidden" value="C" name="caminho_img_aju">
        <div class="input-group">
		  <span class="input-group-addon">Titulo Comunicado</span>
		  <input type="text" class="form-control" placeholder="Titulo Comunicado"  name="titulo_aju" value="">
		</div>
        
        <div class="input-group">
		  <span class="input-group-addon">Conteudo Comunicado</span>
			<textarea class="form-control" rows="3" name="conteudo_aju"></textarea>
		</div>
		

  <div class="col-lg-3">
    <div class="input-group">
      
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
      
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
        </form>
      </div>
      
  
      </div>
    </div>
    </div>
    
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in" id="#lista_comunicados">
    	
    	<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Lista de Comunicados</h3>
      </div>
      <div class="panel-body">
        <form action="comunicado/salvar_comunicado" method="POST" id="form_comunicados">
        {comunicados}
        <input type="hidden" value="{id}" name="id">
        <input type="hidden" value="C" name="tipo_aju">
			<div class="bs-callout bs-callout-info">
		    <h4>{titulo_aju}</h4>
		    <p>{conteudo_aju}</p>
		  </div>
        {/comunicados}

        </form>
      </div>
      
  
      </div>
    </div>
    </div>
