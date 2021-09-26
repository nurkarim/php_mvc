<?php

class View extends Controller {

    public function __construct() {
        
    }

    public function render($name,$otherPanel=false, $noInclude = false) {
        if ($noInclude == TRUE) {
            require 'view/' . $name . '.php';
        } 
        else if($otherPanel==TRUE){

            //require 'views/dashboard/header.php';
            require 'view/dashboard/' . $name . '.php';
           // require 'views/dashboard/footer.php';
        }
        else {
            //require 'views/header.php';
            require 'view/' . $name . '.php';
            //require 'views/footer.php';
        }
        
    }


}

?>
