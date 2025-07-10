<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .a{
        margin: 0 ;
        padding: 20px;
        box-sizing: border-box;
        font-family: "poppins", sans-serif;
        position: relative;
        width: 300px;
        height: 420px;
        background: #030013;
        border-radius: 8px;
        overflow: hidden;

    }
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #F0F0FF;/*#ffc9be;*/
    }
    .a::before{
        content: "";
        position: absolute;
        width: 300px;
        height: 420px;
        background: linear-gradient(0deg, transparent, #fe03f5, #fe03f6);
        top: -50%;
        left: -50%;
        transform-origin: bottom right;
        animation : anime 7s linear infinite;
    }
    .a::after{
        content: "";
        position: absolute;
        width: 300px;
        height: 460px;
        background: linear-gradient(0deg, transparent, #26fdfa, #1bfd00);
        top: -50%;
        left: -50%;
        transform-origin: bottom right;
        animation : anime 7s linear infinite;
        animation-delay: 3s;
    }
    @keyframes anime{
        100%{
            transform: rotate(360deg);
        }
    }
    .b{
        position : absolute;
        inset: 3px;
        background:#FfFFFf;/* #fff8be;*/
        border-radius: 8px;
        z-index: 10;
        padding: 30px 40px;
        display: flex;
        flex-direction: column;

        
    }
    .b h2{
        color: #000;
        text-align: center;
        letter-spacing: 3px;
    }
    .c{
        position: relative;
        width: 300px;
        margin-top: 30px;

    }
    .c input{
        padding: 6px 4px 10px;
        
        background: transparent;
        
        font-size: 18px;
        outline: none;
        color: #000;
    }
    input[type="submit"]{
        /*border: 1px solid #000;*/
        cursor: pointer;
        background: #93eeda;
        border-radius: 10px;
        padding : 10px 6px 10px 6px;
    }

    </style>
</head>
<body>
        <div class="a">
         <form action="../control/controller.php" method="post">
            <div class="b">
                <h2>Sign Up</h2>
                <div class="c">
                    <input type="text" name="nom" id="nom" placeholder="Nom Complet">
                </div>
                <div class="c">
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="c">
                    <input type="password" name="password" id="password" placeholder="Mot de passe">
                </div>
                <div class="c">
                    <input type="submit" value="Sign Up" name="signup">
                </div>
            </div>
            </form>
        </div>
        <script>
            const submitBtn = document.querySelector('.c input[type="submit"]');
const emailField = document.querySelector('.c input[type="email"]');
const passwordField = document.querySelector('.c input[type="password"]');
const nomField = document.querySelector('.c input[type="text"]');
const form = document.querySelector('form');

submitBtn.addEventListener('click', function(e) {
    e.preventDefault(); // Emp�che la soumission automatique

    const nomValid = /^([A-Za-zÀ-ÖØ-öø-ÿ]+(?:[-\s][A-Za-zÀ-ÖØ-öø-ÿ]+)*)$/.test(nomField.value.trim());
    const passwordValid = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(passwordField.value);
    const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value);

    if (nomField.value.trim() === "") {
    alert("Le champ Nom Complet est obligatoire");
    nomField.focus();
    return;
}


    if (!nomValid) {
        let a=document.getElementById("nom");
        alert('Nom Complet non valide : la première lettre doit étre une majuscule');
        a.value = "";
        a.focus();
        
    } else if (!emailValid) {
        let b =document.getElementById("email");
        alert('Email non valide : il doit contenir "@" et "."');
        b.value ="";
        b.focus();

    } else if (!passwordValid) {
        let c =document.getElementById("password");
        alert('Mot de passe non valide : au moins 8 caractères, une lettre et un chiffre');
        c.value ="";
        c.focus()

    } else {
        
        alert('Inscription rèussie !');
        form.submit();
    }
});
submitBtn.addEventListener('mouseover', () => {
    const nomValid = /^[A-Z][a-z]+/.test(nomField.value);
    const passwordValid = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(passwordField.value);
    const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value);

    if (nomValid && passwordValid && emailValid) {
        submitBtn.style.background = '#0adc20'; 
    } else {
        submitBtn.style.background = '#fe7b0d'; 
    }
});
submitBtn.addEventListener('mouseout', () => {
    submitBtn.style.background = '#93eeda';
    });

        </script>
</body>
</html>