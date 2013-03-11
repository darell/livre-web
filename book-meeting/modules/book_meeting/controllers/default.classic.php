<?php
/**
* @package   book-meeting
* @subpackage book_meeting
* @author    Priscille Quistin
* @copyright 2013 Book Meeting
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class defaultCtrl extends jController {
    /**
    *
    */
    function index() {
        $rep = $this->getResponse('html');

        // this is a call for the 'welcome' zone after creating a new application
        // remove this line !
        //$rep->body->assignZone('MAIN', 'jelix~check_install');

        return $rep;
    }
}
