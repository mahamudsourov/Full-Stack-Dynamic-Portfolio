<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .disp-flex {
            display: flex;
        }

        .flex-justify-space {
            justify-content: space-between;
        }

        .p {
            padding: 10px;
        }

        nav {
            background-color: aqua;
        }

        .no-decor {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav>
        <div class="disp-flex flex-justify-space">
            <div class="logo">
                <p>Sourov</p>
            </div>
            <div class="nav-links">
                <a class="no-decor" href="#">About</a>
                <a class="no-decor" href="#">Research Project</a>
                <a class="no-decor" href="#">Blog</a>
                <a class="no-decor" href="#">Contact</a>
                <a class="no-decor" href="#">Linked In</a>
                <a class="no-decor" href="#">Git</a>
            </div>
        </div>
    </nav>
    <section>
        <div class="disp-flex flex-justify-space">
            <div class="img1">
                <img id="avatar" src="{{ asset('assets/images/p1.jpg') }}" alt="">
            </div>
            <div>
                about
            </div>
        </div>
        <div class="disp-flex flex-justify-space">
            <div>
                Portfolio
            </div>
            <div>
                My projects
            </div>
        </div>
        <div>
            <h1 class="title">Hello I am Sourov</h1>
            <p id="test">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, reprehenderit.</p>
        </div>
    </section>

    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
