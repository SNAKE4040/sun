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
        background-color: #24232a;
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
        background: linear-gradient(0deg, transparent, #2376f5, #2376f5);
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
        background: #24232a;
        border-radius: 8px;
        z-index: 10;
        padding: 50px 40px;
        display: flex;
        flex-direction: column;
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