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