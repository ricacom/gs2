<?php


//alert Bootstrap ERROR
function msg_error($title, $msg, $obs = ''){
    
    $msgReturn  = "<div class='alert alert-error'>";
    $msgReturn .= "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
    $msgReturn .= "<h4>" .$title ."</h4>";
    $msgReturn .= $msg;
    $msgReturn .= "<br>" .$obs;
    $msgReturn .= "</div>";
    
    
    return $msgReturn;
}


