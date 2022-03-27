<?php
namespace App\Controllers;

/**
 * Posts controller
 * php version 8.0
 */

class Users extends \Core\Controller
{   
    /**
     * Show index page
     * @return void
     */
    public function indexAction(){

        echo "heloo index User page";
        var_dump($_GET);

    }
    
    public function userAction(){

        echo "<br>heloo index User acation<br>";
        var_dump($_GET);

    }

        /**
     * Show Add new post page
     * @return void
     */
    public function addNewAction(){
        echo "heloo add new User";
    }
    protected function before(){echo " before";}
    protected function after(){echo " after";}
}