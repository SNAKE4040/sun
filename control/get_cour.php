<?php
if (isset($_POST['cour'])) {
    $cour = $_POST['cour'];
    $filePath = "../cour/" . $cour . "/plan.txt";

    if (file_exists($filePath)) {
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        echo json_encode($lines);
    } else {
        echo json_encode(["Unable to open file!"]);
    }
} else {
    echo json_encode(["error"]);
}
?>