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
        background-color: #FfFFFf;
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
        background:#F0F0FF;
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
        margin-top: 40px;

    }
    .c input{
        padding: 8px 4px 10px;
        
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
        padding : 12px 8px 12px 8px;
        margin-left: 60px;
        margin-left: 60px;
        
    }
    .c input[type="email"]{
        border: 1px solid #000;
    }
    
    

    </style>
</head>
<body>

        <div class="a">
        <form action="../control/controller.php" method="post">
            <div class="b">
                <h2>LOG IN</h2>
                <div class="c">
                    <input type="text" name="nom" placeholder="full name or email">
                </div>
                <div class="c">
                    <input type="password" name="password" placeholder="password">
                </div>
                <div class="c">
                    <input type="submit" value="log in" name="log in">
                </div>
            </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@fingerprintjs/fingerprintjs@3/dist/fp.min.js"></script>
<script src="./js/fct.js"></script>
<script>
send_ad();
</script>
        
</body>
</html>