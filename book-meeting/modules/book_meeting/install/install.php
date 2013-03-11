<?php
/**
* @package   book-meeting
* @subpackage book_meeting
* @author    Priscille Quistin
* @copyright 2013 Book Meeting
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/


class book_meetingModuleInstaller extends jInstallerModule {

    function install() {
        //if ($this->firstDbExec())
        //    $this->execSQLScript('sql/install');

        /*if ($this->firstExec('acl2')) {
            jAcl2DbManager::addSubject('my.subject', 'book_meeting~acl.my.subject', 'subject.group.id');
            jAcl2DbManager::addRight('admins', 'my.subject'); // for admin group
        }
        */
    }
}