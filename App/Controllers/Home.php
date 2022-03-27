<?php

namespace App\Controllers;

use \Core\View;
/**
 * Home controller
 * php version 8.0
 */

class Home extends \Core\Controller
{   
    /**
     * Show index page
     * @return void
     */
 

    public function indexAction(){
        View::render('index.php',[
        
        ]);
    }

    public function showCheckOutAction(){
        View::render('checkout.php',[
        
        ]);
    }
        public function showDetailAction(){
            View::render('detail.php',[
            
            ]);
        }
            public function showAction(){
                View::render('categorey.php',[
                
                ]);
            }

    // protected function before(){echo " before";}
    // protected function after(){echo " after";}
}
