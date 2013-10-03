<?php
   
include realpath(dirname(__FILE__)) . '/assets/inc/init.php';

//-- msg alerta Bootstrap
include 'includes/msgHelper.php';


$email      = $_GET['email'];
$pass       = $_GET['pass'];


if(!empty( $email ) && $email != 'test' &&
   !empty( $pass ) && $pass != "test123" )
{
    $access = true;
    echo "acess OK";
}else {
   $msg = 'Deve ser um login válido, não pode estar vazio!';
    echo msg_error('Error!', $msg);

}





///