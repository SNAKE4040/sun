<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Two Halves Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100vh;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .top-half {
            height: 50%;
            overflow: hidden;
        }

        .top-half img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .bottom-half {
            height: 50%;
            background-color: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .content {
            display: flex;
            gap: 30px;
        }

        .card {
            background-color: white;
            padding: 25px 20px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .card h2 {
            font-size: 1.5rem;
            margin-bottom: 12px;
            color: #1e40af;
        }

        .card p {
            font-size: 1rem;
            color: #444;
            line-height: 1.5;
    }
    </style>
</head>
<body>

    <div class="container">
        <div class="top-half">
            <img src="../src/12.png" alt="">
        </div>
        <div class="bottom-half">
            <div class="content">
                    <div class="card">
                        <h2>CALL US</h2>
                        <p>For any inquiries or support, please contact us at:</p>
                        <p><strong>Phone:</strong> </p>
                    </div>
                    <div class="card">
                        <h2>CONTACT US </h2>
                        <p>We are here to help you with any questions or concerns. Reach out to us via email:</p>
                        <p><strong>Email:</strong></p>
                    </div>
            </div>
        </div>
    </div>

</body>
</html>
