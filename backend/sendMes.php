<?php 
require_once "../class.php";

echo "response";

if(isset($_POST['mess'], $_POST['user'])) {
    $mess = $_POST['mess'];
    $user = $_POST['user'];
    $act->sendMes($mess, $user);
} else {
    echo "Where the fuck are u coming from";
}