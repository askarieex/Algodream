<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OUR PORTFOLIO</title>
    <link rel="stylesheet" type="text/css" href="dist/css/styleHeader.css">
    <link rel="stylesheet" type="text/css" href="dist/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <style>
        /* Reset some default browser styles */
        body,
        h1,
        h2,
        p,
        a {
            margin: 0;
            padding: 0;
            /* color: #fff; */
        }

        /* Apply a background color and set text color */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }

        /* Style the header */
        .header {
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }


        /* Style the portfolio */
        .portfolio {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
            padding: 20px;
        }

        /* Style the portfolio items */
        .portfolio-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: calc(33.33% - 20px);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .portfolio-item:hover {
            transform: scale(1.05);
        }

        /* Style the portfolio item headings */
        .portfolio-item h2 {
            color: #007bff;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        /* Style links within portfolio items */
        .portfolio-item a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .portfolio-item a:hover {
            text-decoration: underline;
        }

        /* Style images within portfolio items */
        .portfolio-item img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* Style the footer */
        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #007bff;
            color: #fff;
        }
        #youprf{
            /* border: 2px solid red; */
            text-align: center;
            color: #fff;
            text-transform: uppercase;
            font-size: 35px;
        }
        @media (max-width: 767px) {
            .portfolio{
                flex-direction: column;
                flex-wrap: wrap;
            justify-content: space-around;
            width: 100%; 
            justify-content: center;
            align-items: center;

            }
            .portfolio-item{
                width: 80%;
            }
            .header-logo-image{
  height: 40px !important;
 }
        }

    </style>

</head>

<body class="is-boxed has-animations">
    <?php
    include 'components/header.php';
    ?>
    <header>
        <h1 id="youprf">our Portfolio</h1>
        <br>
    </header>

    <main class="portfolio">
        <article class="portfolio-item">
            <h2>Mohallapaatshala</h2>
            <a href="https://mohallapaatshala.org" target="_blank"><img src="dist/images/mohalla.png" alt="AlgoDream Website"></a>
            <p>Website URL: <a href="https://mohallapaatshala.org" target="_blank">Mohallapaatshala</a></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consequat justo vitae neque egestas, non egestas justo ultricies.</p>
        </article>

        <article class="portfolio-item">
            <h2>Dreamers Movement</h2>
            <a href="https://dreamersmovement.com" target="_blank"><img src="dist/images/dreamers.png" alt="Dreamers Movement Website"></a>
            <p>Website URL: <a href="https://dreamersmovement.com" target="_blank">dreamersmovement.com</a></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consequat justo vitae neque egestas, non egestas justo ultricies.</p>
        </article>

        <!-- Add more portfolio items here -->

    </main>

    <footer>
        <p>&copy; 2023 Your Portfolio</p>
    </footer>


    <?php
    include 'components/footer.php';
    ?>
    <script src="dist/js/main.min.js"></script>
    <script src="dist/js/script.js"></script>
</body>

</html>