<?php
// require_once '../model/client.php';
// session_start();
// if (!isset($_SESSION['client'])) {
//     header("Location: ../view/login.php");
//     exit();
// }
// $client = unserialize($_SESSION['client']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dynamic Course Buttons</title>
  <link rel="stylesheet" href="./css/style.css">
  <style>
    button { margin: 5px; padding: 8px 12px; }
  </style>
</head>
<body class="plan_page">

<form id="courForm">
  <select name="cour" id="cour">
    <option value="css">Cour 1</option>
    <option value="cour2">Cour 2</option>
    <option value="cour3">Cour 3</option>
  </select>
  <button type="submit">Search</button>
</form>

<form method="post" action="../control/controller.php" id="buttonForm">
  <div id="buttonsContainer"></div>
</form>

<script src="./js/fct.js"></script>

  <script>
  const level = <?php echo json_encode($client->getlevel() ?? 0); ?>;
  getcour(level / 10);
</script>


</body>
</html>