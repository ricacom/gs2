<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login Page</title>
        <meta name="author" content="ricacom" />
        <!-- Date: 2013-10-03 -->
        <style>
            #content{
                border: 1px solid #CCC;
                width: 400px;
                margin: 30px auto;
                padding: 10px;
                padding-top:20px;
                border-radius: 8px;
            }
            #msg{
                border: 1px solid red;
            }
        </style>
        

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-responsive.min.css">

            
        </script>
    </head>
    <body>
        
         
         <div id="content">
             <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputPassword">Senha</label>
                    <div class="controls">
                      <input type="password" id="inputPassword" placeholder="Senha">
                    </div>
                  </div>
                  
                    <div class="controls">
                          <div class="row">
                              <div class="span">
                                  <button type="button" class="btn btn-success" id="btnEnter">Entrar</button>
                              </div>
                              <div class="span">
                                  <a href='#'>Esqueci a senha</a>
                              </div>
                            </div/>
    
                      
                    </div>
                  
                </form>
             <div id="msg">
                 
                 
             </div>
             
             
                  
             
               
         </div>

    </body>
</html>



<script type="text/javascript"> 
        $(function(){
            $('#btnEnter').click(function(){
            var email = $('#inputEmail').val();
            var pass = $('#inputPassword').val();
            var random = Math.floor((Math.random()*5)+1);
                $.ajax({
                  url: "login_validate.php",
                  data: {
                    email: email ,
                    pass: pass,
                    tk: 'log' + random
                  },
                  success: function( data ) {
                    $( "#msg" ).html( data );
                    //clear fields
                    $('#inputPassword').val('');    
                  }
                });
                
            
                
            });     
            
        });
</script>