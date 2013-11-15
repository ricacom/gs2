<?php


include realpath(dirname(__FILE__)) . '/assets/inc/init.php';
fSession::open();
//-- msg alerta Bootstrap
include 'includes/msgHelper.php';




?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login Page</title>
		<meta name="author" content="ricacom" />
		<!-- Date: 2013-10-03 -->

		<script type="text/javascript" src="assets/js/jquery10.2.js"></script>

		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-responsive.min.css">

		<link rel="stylesheet" href="assets/css/login.css">
		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="wrapper">
			<div class="content-main">
				<div id="content">
					<form method="post" action="login_validate.php" id="formLogin">
						<div class="row">
							<div class="col-lg-6">
								<div class="input-group">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">
											E-mail:
										</button> </span>
									<!-- input type="text" class="form-control" -->
									<input type="text" class="form-control" id="inputEmail" name="email" placeholder="Informe o seu e-mail">

								</div><!-- /input-group -->

								<br>

								<div class="input-group">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">
											Senha:
										</button> </span>

									<input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Password">
								</div><!-- /input-group -->

								<br>

								<div id="captcha">
									<img src="assets/tools/capcha.php?n=<?php echo time();?>" alt="captcha image" id="img-cap">
									<div id="reload">
										<span class="glyphicon glyphicon-refresh"></span>
									</div>
									<br />
								</div>

								<div class="input-group">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">
											Verificação:
										</button> </span>
									<input type="text" class="form-control" id="inputCaptcha" name="captcha" placeholder="Digite os caracters acima">

								</div><!-- /input-group -->

								<br>

								<button type="submit" class="btn btn-success  btn-lg" id="btnEnter">
									<span class="glyphicon glyphicon-lock"></span>
									Entrar
								</button>
								<div class="span">
									<a href='#'>Esqueci a senha</a>
								</div>
					</form>
					<br>
					<div id="msg">
						<?php
						//resgata a checagem dos dados enviados para login (login_validate.php)
						$isDtLogin = fSession::get('check');
                        
                       
                        
                        // se estiver tudo ok e checado o código é 55555
                        if ($isDtLogin == '55555') {
                            // Realiza o check com a base de dados...
                            echo "valido";
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            //faz a rotina de checagem na base e tals
                            
                         }
                         
                         //informa ao usuário que o login nao é valido..
                          $msg = 'Dados informados não cumprem os critérios:<br>';
                         if ($isDtLogin == '22222') {
                                $msg = 'Impossível realizar o login: <br> - Por favor preencha os dados.<br>';
                        }
                         
                    
                         if (preg_match("/^22/", $isDtLogin)) { //email trouble
                             $msg .= '- Usuário e/ou senha incorretos<br>';
                            }
                            
                        if (preg_match("/2$/", $isDtLogin)) {  //capcha trouble
                             $msg .= '- Verificador inválido <br>';
                                                           
                          } else {
                             // $msg = 'Dados informados não cumprem os critérios:<br>
                            //   - Usuário e/ou senha incorretos<br>';
                            $msg = 5;
       
                          }
                        
                             if($msg != 5 ){
                                echo msg_error('Oops!', $msg);
                               // var_dump($isDtLogin);
                                fSession::destroy();
                             }
						?>
					</div>

				</div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div>
		</div>

		</div>

	</body>
</html>

<script type="text/javascript">
	$(function() {
		$('#reload').click(function() {
		window.location.reload();
		});
	});

</script>