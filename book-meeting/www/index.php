<?php
/**
* @package   book-meeting
* @subpackage 
* @author    Priscille Quistin
* @copyright 2013 Book Meeting
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

require ('../application.init.php');
require (JELIX_LIB_CORE_PATH.'request/jClassicRequest.class.php');

checkAppOpened();

jApp::loadConfig('index/config.ini.php');

jApp::setCoord(new jCoordinator());
jApp::coord()->process(new jClassicRequest());



