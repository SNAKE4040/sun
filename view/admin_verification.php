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
        background-color: #F0F0FF;
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
        background:#FfFFFf;
        border-radius: 8px;
        z-index: 10;
        padding: 30px 40px;
        display: flex;
        flex-direction: column;
    }
    .b h2{
        color: #000;
        text-align: center;
        font-family: Courier, monospace;
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
        cursor: pointer;
        background: #93eeda;
        border-radius: 10px;
        padding : 10px 6px 10px 6px;
    }
    </style>
</head>
<body>
    <div class="a">
        <form action="" >
            <div class="b">
                <h2>Hi Master </h2>
                <div class="c">
                    <input type="text">
                </div>
                <div class="c">
                    <input type="submit" value="valider">
                </div>
            </div>
    </form>
    </div>
</body>
</html>