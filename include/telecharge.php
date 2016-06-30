<?php
require("class.pdogsb.inc.php");
session_start();
$pdo = PdoGsb::getPdoGsb();
?>
<?php

                $mois= $_SESSION['mois'];
                $pdo->getFiche($mois);
?>
