<?php
        require_once '../model/client.php';
        require_once '../model/cours.php';
        require_once '../model/db.php';

        session_start();
        if (isset($_SESSION['client']) && $_SESSION['client']) {
            $client = unserialize($_SESSION['client']);
        } else {
            header("Location: controller.php");
            exit();
        }
        $cour = new Cours($database->getConnection());
    ?>
<!DOCTYPE html>
<html lang="en" class="plan_page">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
</head>
<body>
        
        <div class="profile">
                <div class="profile-photo">
                        <?php if ($client->getPhoto()!=null){
                                echo '<img class="profil" src="'.$client->getPhoto().'" alt="Profile Photo">';
                        } else {
                                echo '<img class="profil" src="../src/inco.png" alt="default">';
                        } ?>
                        <form method="post" enctype="multipart/form-data" >
                        <div class="photo">
                        <label for="fileUpload" class="custom-upload"><img src="../src/edit.png" alt=""></label>
                         <input type="file" id="fileUpload" style="display: none;">
                        
                        </div>
                        </form>
                </div>
                <div class="profile-info">
                       <div class="info-item"> <p>Name: <?php echo "<b class='p_child'>".$client->getName()."</b>"; ?></p><button type="submit" name="modify_name">Modify Name</button></div>
                       <div class="info-item"> <p>Email: <?php echo "<b class='p_child'>".$client->getEmail()."</b>"; ?></p><button type="submit" name="modify_email">Modify Email</button></div>

                </div>
                <div class="profile-info2">

                        <?php $length = count($client->getLanguage());
                        if($length > 0) {
                            for ($i = 0; $i < $length; $i++) {
                                echo "<div class='info-item2'>";
                                echo " <div>Language:</div><div> <b class='p_child'>".$client->getLanguage()[$i]."</b></div>";
                                echo "<div>Level:</div><div><b class='p_child'>".$client->getLevel()[$i]."</b></div>";
                                echo "<div>Experience:</div><div><b class='p_child'>".$client->getExp()[$i]."</b></div>";
                            echo "</div>";
                        }
                        }
                        else {
                            echo "<div class='info-item3'>No languages added yet.</div>";
                        }
                        ?>
        </div>
         
</body>
</html>