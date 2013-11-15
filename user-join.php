<?php
include realpath(dirname(__FILE__)) . '/assets/inc/init.php'; //Flourish
include 'assets/inc/orm/model_estados.php';      // ORM Flourish
include 'assets/inc/header.php';      // css, bootstrap
?> 
    <link rel="stylesheet" href="assets/css/user-join.css">
  <title>Gestor Simples | Cadastro de usuários  </title>
  </head>

  <body>
    <!-- Wrap all page content here -->
    <div id="wrap">
        
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="assets/image/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Usuário</a></li>
            <li><a href="#about">Clientes</a></li>
            <li><a href="#contact">Boleto</a></li>
          </ul>
          
          
           <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Minha conta <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Meu cadastro</a></li>
                  <li><a href="#">Meus clientes</a></li>
                  <li><a href="#">Meus boletos</a></li>
                  <li><a href="#">Meus acessos</a></li>  
                </ul>
              </li>
              <li><a href="logout.php">
               	  <button type="button" class="btn btn-danger btn-xs">
                      <span class="glyphicon glyphicon-remove-circle"></span>                    
                  </button>
                  </a>
                </li>
    </ul>
        </div><!--/.nav-collapse -->
        
      </div>
    </div>
    
     <!-- Collect the nav links, forms, and other content for toggling -->
  
  
  

    <div class="container">

    <h3>Criar Cadastro</h3>
    <hr>
    <form id="fCadastro" class="form-horizontal" role="form" method="post" action="user-join-exec.php">
	    <div class="row">
		  <div class="col-md-3"><span class='green'>Dados básicos</span></div>
		  <div class="col-md-7">
		  	
		  	 <div class="form-group space">
			    <label for="fullname" class="col-lg-4 control-label">Nome completo</label>
			    <div class="col-lg-8">
			      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="">
			    </div>
			  </div>
			  
			  <div class="form-group space">
			    <label for="email" class="col-lg-4 control-label" >E-mail</label>
			    <div class="col-lg-8">
			      <input type="password" class="form-control" id="email" name="email" placeholder="Password">
			    </div>
			  </div>
			  

		  	 <div class="form-group space">
			    <label for="fullname" class="col-lg-4 control-label">Escolha uma senha</label>
			    <div class="col-lg-8">
			      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="">
			    </div>
			  </div>
			  
			  <div class="form-group space">
			    <label for="email" class="col-lg-4 control-label" >Confirme a senha</label>
			    <div class="col-lg-8">
			      <input type="password" class="form-control" id="email" name="email" placeholder="Password">
			    </div>
			  </div>
			  
			  
			  
			  
		  	
		  </div>
	    </div>
	    <hr>
	    <div class="row">
	     <div class="col-md-3"><span class='green'>Dados pessoais</span></div>
	     
		  <div class="col-md-7">
		  	
		  	
		  	
		  <div class="form-group space">
				<label class="col-lg-4 control-label" style="text-align: left;" for="sexo1">Sexo</label>
				<div class="col-lg-8">
					<label class="radio-inline"><input type="radio" name="sexo" id="sexo1" value="F" checked="checked">Feminino</label>
					<label class="radio-inline"><input type="radio" name="sexo" id="sexo2" value="M">Masculino</label>
				</div>
			</div>
			
			
			<div class="form-group space">
				<label class="col-lg-4 control-label" style="text-align: left;" for="aniversario_dia">Nascimento</label>
				
  					<div class="col-lg-8">
						<input type="text" class="form-control" id="aniversario_dia" name="aniversario_dia" alt="dia">
						<select name="aniversario_mes" id="aniversario_mes" class="form-control input">
							<option value="">Selecione</option>
													<option value="01">Janeiro</option>
													<option value="02">Fevereiro</option>
													<option value="03">Março</option>
													<option value="04">Abril</option>
													<option value="05">Maio</option>
													<option value="06">Junho</option>
													<option value="07">Julho</option>
													<option value="08">Agosto</option>
													<option value="09">Setembro</option>
													<option value="10">Outubro</option>
													<option value="11">Novembro</option>
													<option value="12">Dezembro</option>
												</select>
						<input type="text" class="form-control" id="aniversario_ano" name="aniversario_ano" alt="ano">
					</div>
			</div>
			
				<div class="form-group space">
				<label class="col-lg-4 control-label" for="ddd_telefone">Telefone</label>
				<div class="col-lg-8">
					<input type="text" class="form-control" id="ddd_telefone" name="ddd_telefone" alt="ddd">
					<input type="text" class="form-control" id="telefone" name="telefone">
				</div>
				</div>
				
				
				<div class="form-group space">
					<label class="col-lg-4 control-label" for="ddd_telefone">Estado</label>
					<div class="col-lg-8">
						
						<select name="estado" id="estado" class="form-control input">
								<option value="">Selecione</option>
								
								<?php
								
								try {
									//-- 
								$result = $gsdb->query('SELECT * FROM states');
								foreach ($result as $r) {
									echo '<option value="' .$r['id'] .'"> ' .$r['nome_estado'] .'</option>';
								};
								  
								
								} catch (fExpectedException $e) {
								    echo $e->printMessage();
								}
								?>
						
					
						</select>
						
					</div>
				</div>
				
				<div class="form-group space">
				<label class="col-lg-4 control-label" for="ddd_telefone">Cidade</label>
				<div class="col-lg-8" id="cidade">
					<!--input type="text" class="form-control" id="cidade" name="cidade" alt="cidade" -->
					<div id='loadingmessage' style='display:none'>
					  <img src='assets/image/ajax-loader.gif'/>
					</div>
				</div>
				</div>
				
				
			    <br>
			    <div class="form-group space">
			    	<div class="col-lg-10 center">
			    		  <input type="submit" class="btn btn-success btn-lg" value="Criar minha conta" />	
			    	</div>
			    </div>
			    <br>
			  
		</div>
		</div>
	</form>
	
	
	
	
	
    </div><!-- /.container -->
    </div>

<!-- /.footer -->
<?php include 'assets/inc/footer.php'; 
//Jquery, bootstrap.js
?>

<script type="text/javascript">

		$('#estado').change(function(){
    		var estado =  $(this).val();
  			$('#loadingmessage').show();
  
  
  		$.ajax({
				url : "assets/tools/estado-cidade.php",
				data : {
					estado : estado,
				},
				success : function(data) {
					//$("#result").html(data);
					//clear fields
				$('#cidade').html(data);
				$('#loadingmessage').hide();
				}
			});
	});
	
		
</script>
<div id="result">
	
</div>

<!--
	/*
		$('#estado').click(function() {
			var email = $('#inputEmail').val();
			var pass = $('#inputPassword').val();
			$.ajax({
				url : "login_validate.php",
				data : {
					email : email,
					pass : pass,
				},
				success : function(data) {
					$("#msg").html(data);
					//clear fields
					$('#inputPassword').val('');
				}
			});
		});
	}); 
	*/
	
-->