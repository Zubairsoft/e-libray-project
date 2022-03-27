<?php

namespace App\Controllers;

use \Core\View;
/**
 * Home controller
 * php version 8.0
 */

class Detail extends \Core\Controller
{   
    /**
     * Show details page
     * @return void
     */
 
    public function showAction(){
        View::render('detail.php',[
        
        ]);
   }
}
    ?>