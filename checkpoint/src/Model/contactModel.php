<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 05/10/18
 * Time: 10:50
 */

namespace Model;
require __DIR__.'/../../app/db.php';

class contactModel
{

    public function fullname()
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT lastname, firstname, civility FROM contact JOIN civility c ON civility_id = c.id ORDER BY lastname";
        $resultat = $pdo->query($query);
        $res = $resultat->fetchAll();
        return $res;
    }

    public function rewrite()
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "INSERT INTO contact (lastname, firstname, civility_id)VALUES('".$_POST['last']."', '".$_POST['first']."', '".$_POST['civil']."' )";
        $res = $pdo->exec($query);
    }
}
