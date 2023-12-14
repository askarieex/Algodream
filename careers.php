<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADTS</title>
    <link rel="stylesheet" type="text/css" href="dist/css/styleHeader.css">
    <link rel="stylesheet" type="text/css" href="dist/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/contact.css">
    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <style>
        .containerm {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #000;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        button:hover {
            background-color: #0056b3;
        }
        .containerm h3{
            color: black;
            font-size: 16px;
            line-height: 20px;
            font-weight: 200;
            text-align: center;
            word-wrap: break-word;
            /* font-weight: bold; */
            /* word-spacing: 1px; */
            font-family:Arial, Helvetica, sans-serif;
            border-bottom: 2px solid #0a54cd;
            padding-bottom: 10px;
           
        

        }
        .containerm  h1{
            color: #0a54cd;
            text-transform: uppercase;
            font-size: 35px;
        }
        @media (max-width: 767px) {
            .header-logo-image {
                height: 40px !important;
            }
        }

    </style>

</head>


<body class="is-boxed has-animations">
<?php
    include 'components/header.php';
    ?>
   <div class="containerm">
            <h1>Internship Application</h1>
        <h3>Fill out the Application form and submit your updated Resume. Our team will reach out to you, if your profile aligns. Wishing you Success!</h3>
        <br>
            <form id="application-form" action="process.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="special">What makes you special? (Less than 150 words)</label>
                    <textarea id="special" name="special" rows="4" maxlength="150" required></textarea>
                </div>
                <div class="form-group">
                    <label for="resume">Resume (PDF)</label>
                    <input type="file" id="resume" name="resume" accept=".pdf, .html" required>
                </div>
                <button type="submit">Submit Application</button>
            </form>
        </div>



        </div>
        <?php
        include 'components/footer.php';
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="dist/js/main.min.js"></script>
        <script src="dist/js/mynewscript.js"></script>
        <script>
            // document.addEventListener("DOMContentLoaded", function() {
            //     const form = document.getElementById("application-form");

            //     form.addEventListener("submit", function(event) {
            //         event.preventDefault();

            //         // You can add code here to handle the form submission,
            //         // like sending data to a server or displaying a thank you message.

            //         alert("Thank you for submitting your internship application!");
            //         form.reset();
            //     });
            // });
        </script>
</body>

</html>