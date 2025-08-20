<?php 
require_once '../model/db_action.php';
require_once '../model/client.php';
$db = new db_action();
if($_POST['login']){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $deviceId = $_POST['visitorId'];
    if(cheque_admin($email,$deviceId)==true){
        header("controller_ad.php");
    }
    if (cheque_adminq($email,$deviceId)=="admin") {
        header("../view/admin_verification.php");
    } else {
    if(!isset($email) || !isset($password)) {
        echo "Veuillez remplir tous les champs.";
        exit;
    }

    $user = $db->checuser($email, $password);
    if($user) {
        // Authentification réussie
     session_start();
     $client = new client($user);
     $_SESSION['client'] = $client;
     header("Location: ../view/accueil.php");
     exit();
}
}
}
$deviceId = $_POST['visitorId'];

echo "Device ID: $deviceId";
?>
