<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .a{
        margin: 0 ;
        padding: 0;
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
        background-color: #ffc9be;
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
        height: 420px;
        background: linear-gradient(0deg, transparent, #1bfd00, #1bfd00);
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
        background: #fff8be;
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
        margin-top: 35px;
    }
    .c input{
        padding: 10px 10px 10px;
        border-color: #000;
        background: transparent;
        border-left: none;
        border-right: none;
        border-top: none;
        font-size: 18px;
        outline: none;
        color: #000;
    }
    input[type="submit"]{
        border: 1px solid #000;
        cursor: pointer;
    }
    </style>
</head>
<body>
        <div class="a">
            <div class="b">
                <h2>Sign Up</h2>
                <div class="c">
                    <input type="text" name="nom" placeholder="Nom Complet">
                </div>
                <div class="c">
                    <input type="password" name="password" placeholder="Mot de passe">
                </div>
                <div class="c">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="c">
                    <input type="submit" value="Sign Up" name="signup">
                </div>
            </div>
        </div>
</body>
</html>