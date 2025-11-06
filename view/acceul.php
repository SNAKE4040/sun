
<?php 
        // require_once '../model/client.php';
        // session_start(); 
        // if (isset($_SESSION['client']) && $_SESSION['client']) { 
        //     $client = unserialize($_SESSION['client']);
        // } else { 
        //     header("Location: controller.php"); 
        //     exit(); 
        // } 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider avec menu fixe</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            
            height: 100vh;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: rgba(0, 119, 182, 0.8);
            padding: 0 2rem;
            display: flex;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(6px);
        }

        .menu ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .menu ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .swiper-container {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100%;
            z-index: 0;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;
        }

        .swiper-pagination {
            position: absolute;
            bottom: 20px;
            left: 20px;
            z-index: 10;
        }

        .swiper-pagination-bullet {
            border-radius: 0;
            width: 1.125rem;
            height: 0.25rem;
            background: white;
            opacity: 1;
        }
        .swiper-slide::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0.2));
            z-index: 1;
        }
    .menu ul li a:hover {
        color: #000;
        background-color: #B0FFB0;
        border-radius: 20px;
        transition: background 0.3s ease;
        padding: 10px;
    }
    .intro{
        /* position: absolute;
        top: 80px; 
        left: 30px; */
        z-index: 10;
        color: #F1F5F9; 
        background-color: rgba(0, 0, 0, 0.4); 
        padding: 1rem 1.5rem;
        border-left: 4px solid #3B82F6; 
        font-size: 1.4rem;
        font-weight: 500;
        max-width: 500px;
        line-height: 1.6;
        border-radius: 8px;
        margin-bottom: 1rem;
    }
    /* .intro{
        /* position: absolute;
        top: 130px; 
        left: 30px; */
        /* z-index: 10;
        color: #F1F5F9; 
        background-color: rgba(0, 0, 0, 0.4); 
        padding: 1rem 1.5rem;
        border-left: 4px solid #3B82F6; 
        font-size: 1.4rem;
        font-weight: 500;
        max-width: 500px;
        line-height: 1.6;
        border-radius: 8px; */
   
    .intro1, .intro {
        animation: fadeUp 1s ease-in-out;
    }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .logo {
        margin-right: auto;
        display: flex;
        align-items: center;
    }

    .logo img {
        height: 45px;
        width: auto;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .name {
        font-size: 1.6rem;          
        font-weight: 700;            
        margin-left: 12px;          
        background: linear-gradient(90deg, #00B4DB, #0083B0); 
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        letter-spacing: 2px;         
        text-transform: uppercase;   
        font-family: 'Segoe UI', sans-serif;
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 119, 182, 0.9);
    color: white;
    text-align: center;
    padding: 0.7rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
footer .socials img {
    width: 20px;
    margin: 0 10px;
}
.content{
    position: absolute;
        top: 70px; 
        left: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: scroll;
    max-height: calc(100vh - 200px);
}

    </style>
</head>
<body>

    <nav class="menu">
        <div class="logo">
            <img src="../src/1.png" alt="Logo">
            <span class="name">Seren</span>
        </div>
        <ul>
            <li><select>
                <option value="language1">Language 1</option>
                <option value="language2">Language 2</option>
                <option value="language3">Language 3</option>
            </select></li>
            <li><a href="cours.php">LESSONS</a></li>
            <li><a href="profil.php">PROFILE</a></li>
            <li><a href="#">QUIZ</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
<div class="content">
<p class="intro">Welcome to SEREN,
    hi <?php echo htmlspecialchars($client->getname()); ?>
</p>
<p class="intro">Empowering you to master coding step by step — anytime, anywhere.</p>
</div>
<div class="swiper-container gallery-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('../src/4.png');"></div>
        <div class="swiper-slide" style="background-image: url('../src/5.png');"></div>
        <div class="swiper-slide" style="background-image: url('../src/6.png');"></div>
        <div class="swiper-slide" style="background-image: url('../src/7.png');"></div>
        <div class="swiper-slide" style="background-image: url('../src/8.png');"></div>
        <div class="swiper-slide" style="background-image: url('../src/9.png');"></div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<footer>
    <p>© 2025 SEREN. All rights reserved</p>
    <div class="socials">
        <a href="#"><img src="facebook.svg" alt="Facebook"></a>
        <a href="#"><img src="github.svg" alt="GitHub"></a>
        <a href="#"><img src="linkedin.svg" alt="LinkedIn"></a>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var slider = new Swiper(".gallery-slider", {
            slidesPerView: 1,
            loop: true,
            loopedSlides: 5,
            keyboard: {
                enabled: true
            },
            mousewheel: {
                thresholdDelta: 70
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            }
        });
    </script>
</body>
</html>
