<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @stack('style')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #1e1f26;
            color: #ffffff;
            scroll-behavior: smooth;
        }


        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #1e1e1e;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            background: #00bfa6;
            left: 0;
            bottom: -5px;
            transition: 0.3s;
        }

        nav a:hover::after,
        nav a.active::after {
            width: 100%;
        }

        .resume-btn {
            background-color: #00bfa6;
            padding: 8px 12px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-weight: bold;

        }

        .section {
            width: 100%;
            padding: 60px 80px;
        }

        .section-divider {
            width: 100%;
            height: 1px;
            background-color: #444;
            margin: 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .head {
            color: #00bfa6;
            font-size: 32px;
            margin-bottom: 10px;
        }

        /* Hero Section */
        .hero {
            display: flex;
            justify-content: center;
            padding-top: 100px;
            padding-left: 0;
            padding-right: 0;
        }

        .hero-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            padding: 0 20px;
        }

        .hero-text {
            flex: 1 1 500px;
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 36px;
            margin: 20px 0;
        }

        .hero-text h2 {
            margin-top: 30px;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .hero-text .highlight {
            color: #00bfa6;
        }

        .hero-text p {
            margin: 20px 0;
        }

        .social-buttons {
            margin-top: 15px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .social-buttons a {
            text-decoration: none;
            color: #fff;
            background: #00bfa6;
            padding: 8px 14px;
            border-radius: 4px;
            font-weight: bold;

            transition: 0.3s;
        }

        .social-buttons a:hover {
            background: #009c87;
        }

        .hero-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
        }

        /* About Section */
        .about-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: flex-start;
            justify-content: space-between;
        }

        .about-image img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
        }

        .about-text {
            flex: 1 1 60%;
        }

        .education-box {
            background-color: #1e1e1e;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 191, 166, 0.3);
        }

        .education-list li {
            margin-bottom: 10px;
        }

        .education-list {
            list-style: none;
            padding-left: 0;
        }

        /* Skills & Works */
        .cards-container {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            justify-content: center;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            row-gap: 30px;
            column-gap: 130px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .card {
            width: 100%;
            background-color: #1e1e1e;
            padding: 14px;
            border-radius: 10px;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(0, 191, 166, 0.3);
        }

        .card img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .card h3 {
            margin: 8px 0;
            color: #00bfa6;
            font-size: 18px;
        }

        .card:hover {
            transform: translateY(-5px);
            background-color: #2c2c2c;
        }

        /* Contact Section */
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            align-items: flex-start;
            justify-content: space-between;
        }

        .contact-info {
            flex: 1 1 35%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-box {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 191, 166, 0.3);
            color: #fff;
        }

        .contact-form {
            flex: 1 1 55%;
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-left: -20px;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            border-radius: 5px;
            border: none;
            outline: none;
            resize: vertical;
        }

        .contact-form button {
            padding: 12px;
            background-color: #00bfa6;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #1e1e1e;
            margin-top: 40px;
            font-size: 14px;
            color: #ccc;
        }

        @media (max-width: 1024px) {
            .portfolio-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {

            .hero-container,
            .about-container,
            .contact-container {
                flex-direction: column;
                align-items: center;
            }

            header {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                padding: 20px 30px;
            }

            nav ul {
                display: none;
                flex-direction: column;
                gap: 15px;
                background-color: #1e1e1e;
                padding: 20px;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                z-index: 999;
                border-top: 1px solid #444;
            }

            nav ul.show {
                display: flex;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .card {
                width: 100%;
                max-width: 90%;
            }
        }

        .skill-card {
            flex: 1 1 300px;
            min-height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 0 10px rgba(0, 191, 166, 0.3);
        }

        .github-btn-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .github-btn {
            background-color: #009c87;
            color: white;
            padding: 8px 14px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .github-btn:hover {
            background-color: #009c87;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 25px;
            height: 20px;
            cursor: pointer;
            z-index: 1001;
        }

        .hamburger span {
            display: block;
            height: 3px;
            background-color: white;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translateY(8px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translateY(-8px);
        }

        @media (max-width: 768px) {
            header {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                padding: 20px 30px;
                position: relative;
            }

            .hamburger {
                display: flex;
                margin-left: auto;
            }
        }
    </style>
</head>

<body>
    @yield('main-content')

    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
