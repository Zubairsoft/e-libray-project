<?php

namespace App\Controllers;

use \Core\View;
/**
 * Home controller
 * php version 8.0
 */

class Catagorey extends \Core\Controller
{   
    /**
     * Show Catagory page
     * @return void
     */
 
    public function showAction(){
        View::render('categorey.php',[
        
        ]);
   }
}
    ?>