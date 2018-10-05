<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 05/10/18
 * Time: 10:59
 */

namespace Controller;
use Model;

class contactController
{
    public function Person()
    {
        $contactController = new Model\contactModel();
        $contacts = $contactController->fullname();
        require __DIR__ . '/../View/contactView.php';
    }
    public function newContact()
    {
        $rewritecontact = new Model\contactModel();
        $rewritecontact->rewrite();
    }
}