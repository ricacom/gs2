<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login Page</title>
		<meta name="author" content="ricacom" />
		<!-- Date: 2013-10-03 -->

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-responsive.min.css">
		
		
		<link rel="stylesheet" href="assets/css/login.css">
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="wrapper">
            <div class="content-main">
                <div id="content">
			<div class="row">
				<div class="col-lg-6">
					<div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								E-mail: 
							</button> </span>
						<!-- input type="text" class="form-control" -->
						<input type="text" class="form-control" id="inputEmail" placeholder="Informe o seu e-mail">
						
						
						
						
						
					</div><!-- /input-group -->
					
					<br>
					
					   <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                Senha: 
                            </button> </span>
                        
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        
                        
                        
                        
                        
                    </div><!-- /input-group -->
                    <br>
                    <button type="button" class="btn btn-success  btn-lg" id="btnEnter">
                        <span class="glyphicon glyphicon-lock"></span>
                        Entrar
                    </button>
                    <div class="span">
                        <a href='#'>Esqueci a senha</a>
                    </div>
					<br>
					<div id="msg"></div>
					
				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
            </div>
		</div>
        
</div>


	</body>
</html>

<script type="text/javascript">
	$(function() {
		$('#btnEnter').click(function() {
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
</script>