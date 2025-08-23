<?php 
require_once '../model/db_action.php';
require_once '../model/client.php';
$db = new action($database);
if($_POST['action'] == 'login'){
    $email = $_POST['nom'];
    $password = $_POST['password'];
    $deviceId = $_POST['visitorId'];
    if($db->cheque_admin($email,$deviceId)==true&&$db->cheque_admin($email,$deviceId)!="admin"){
        header("Location: controller_ad.php");
        echo "Admin connected";
        exit();
    }
    if ($db->cheque_admin($email,$deviceId)=="admin" && $db->cheque_admin($email,$deviceId)==true) {
        header("Location: ../view/admin_verification.php");
        exit();
    } else {
    if(!isset($email) || !isset($password)) {
        echo "Veuillez remplir tous les champs.";
        exit;
    }

    $user = $db->checuser($email, $password);
    if($user) {
        
     session_start();
     $client = new client($user);
     $client=serialize($client);
     $_SESSION['client'] = $client;
     header("Location: ../view/acceul.php");
     exit();
}
}
}
if(isset($_POST['action']) && $_POST['action'] == 'signup') {
    $name = $_POST['name'];
    // $exp = $_POST['exp'];
    // $levl = $_POST['levl'];
    // $language = $_POST['language'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $photo = $_POST['photo'];

    if(empty($name)|| empty($email) || empty($password)) {
        echo "Veuillez remplir tous les champs.";
        exit;
    }

    if($db->add_user($name, $email, $password)) {
        header("Location: ../view/log.php");
        exit();
    } else {
        echo "Erreur lors de l'enregistrement.";
    }
}
// echo $db->cheque_admin($email, $deviceId);

?>
