function send_ad(){
const btn = document.querySelector('input[type="submit"]');

btn.addEventListener('click', function (event) {
  event.preventDefault();

  FingerprintJS.load().then(fp => {
    fp.get().then(result => {
      const visitorId = result.visitorId;
      const form = document.querySelector('form');
      const hidn=document.createElement('input');
      hidn.setAttribute('type', 'hidden');
      hidn.setAttribute('name', 'visitorId');
      hidn.setAttribute('value', visitorId);
      form.appendChild(hidn);
      form.submit();    
     });
  });
});
}
function getcour(ad){
  document.getElementById('courForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Prevent form reload

  const cour = document.getElementById('cour').value;
  const formData = new FormData();
  formData.append('cour', cour);

  fetch('../control/get_cour.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    const container = document.getElementById('buttonsContainer');
    container.innerHTML = ''; // Clear previous buttons

    data.forEach((line, index) => {
      if (line !="Unable to open file!" && line != "error") {
       const btn = document.createElement('button');
       
       btn.name = 'action';
       btn.value = index;
       btn.textContent = line;
       if(ad<index){
         btn.setAttribute('aria-disabled', 'true');
         btn.textContent = line + " (Locked)";
         const lockarea = document.createElement('div');
         btn.onclick = function(e) {
          alert("This course is locked. Please contact the administrator for access.");
          e.preventDefault();
         };
         lockarea.className = "lock-area";
         container.appendChild(lockarea);
         lockarea.appendChild(btn);
        }
       else {
        btn.type = 'submit';
        const unlockarea = document.createElement('div');
       unlockarea.className = "unlock-area";
       container.appendChild(unlockarea);
       unlockarea.appendChild(btn);
       }
      container.appendChild(document.createElement('br'));
    }else{
      const errorMsg = document.createElement('div');
      errorMsg.textContent = line;
      errorMsg.style.color = '#fa0202ff';
      errorMsg.style.fontWeight = 'bold';
      errorMsg.style.textAlign = 'center';
      errorMsg.style.fontSize = '1.2em';
      errorMsg.style.border = '1px solid rgba(71, 60, 60, 1)';
      errorMsg.style.padding = '10px';
      container.appendChild(errorMsg);

    }
    });
  })
  .catch(error => {
    console.error('Error:', error);
  });
});
}
