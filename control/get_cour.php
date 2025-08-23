<?php

if (isset($_POST['cour'])) {
    // session_start();
    // $_SESSION['lng_slct'] = $_POST['cour'];
    // if($_SESSION['lng_slct_index']!=""||$_SESSION['lng_slct']!="language"){
    // $_SESSION['lng_slct'] = $client->getLanguage($_SESSION['lng_slct_index']);
    // $cour = $_SESSION['lng_slct'];
    $cour = $_POST['cour'];
    $filePath = "../cour/" . $cour . "/plan.txt";

    if (file_exists($filePath)) {
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        echo json_encode($lines);
    } else {
        echo json_encode(["Unable to open file!"]);
    }
// }else {
//     echo json_encode(["select language"]);
// }
} else {
    echo json_encode(["error"]);
}

?>