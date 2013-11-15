<?php
   
include realpath(dirname(__FILE__)) . '/assets/inc/init.php';







class CheckLogin { 
    public $email; 
    public $pass; 
    public $captcha;
    
    
    function setPostVar($var) {      
        if(isset($_POST[$var])){
            $this->{$var} = ($_POST[$var]); 
            return $this->{$var}; 
        }else{
            return 2;
        }
    }
    
    public function sizeInput($str){
        if(strlen($str) >= 6){
            return 5;
        }else{
            return 2;
        }   
    } 
    

    public function rightCaptcha($var){
        if($var == fSession::get('captcha')){
            return 5;
        }else{
            return 2;
        }
    }
 
    function isEmailValid($email){
        $ok = strpos($email, '@');
        if($ok){return 5;}
        else{return 2;}
    }
    
    function getVar($var){
        return $this->{$var};
    }
    
} 

$c = new CheckLogin;
$c->setPostVar('email');
$c->setPostVar('pass');
$c->setPostVar('captcha');

$chEmailSize    =       $c->sizeInput($c->getVar('email'));
$chEmail        =       $c->isEmailValid($c->getVar('email'));
$chPassSize     =       $c->sizeInput($c->getVar('pass'));
$chCaptchaSize  =       $c->sizeInput($c->getVar('captcha'));
$chCaptchaRight =       $c->rightCaptcha($c->getVar('captcha'));

//var_dump($chEmail);
//var_dump($chEmailSize);

$cod = $chEmailSize.$chEmail.$chPassSize.$chCaptchaSize.$chCaptchaRight;
//echo $c->rightCaptcha($c->getVar('captcha'));
/*
echo "Email: "      .$c->getVar('email')      ." <br>";
echo "Pass: "       .$c->getVar('pass')       ." <br>";
echo "Captcha: "    .$c->getVar('captcha')     ." <br>";
*/


//echo " Dump: ";
//var_dump($_REQUEST);


fSession::set('check', $cod);
// Redirect to a relative page
fURL::redirect('login.php');
 









