<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dynamic Course Buttons</title>
  <link rel="stylesheet" href="./cour/css/style.css">
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
    getcour(3);
</script>
<!-- // document.getElementById('courForm').addEventListener('submit', function(e) {
//   e.preventDefault(); // Prevent form reload

//   const cour = document.getElementById('cour').value;
//   const formData = new FormData();
//   formData.append('cour', cour);

//   fetch('get_cour.php', {
//     method: 'POST',
//     body: formData
//   })
//   .then(response => response.json())
//   .then(data => {
//     const container = document.getElementById('buttonsContainer');
//     container.innerHTML = ''; // Clear previous buttons

//     data.forEach((line, index) => {
//       const btn = document.createElement('button');
//       btn.type = 'submit';
//       btn.name = 'action';
//       btn.value = index;
//       btn.textContent = line;
//       container.appendChild(btn);
//       container.appendChild(document.createElement('br'));
//     });
//   })
//   .catch(error => {
//     console.error('Error:', error);
//   });
// }); -->


</body>
</html>