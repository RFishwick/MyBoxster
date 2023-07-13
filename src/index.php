<?php
// If the request is made from our space preview functionality then turn on PHP error reporting
if (isset($_SERVER['HTTP_X_FORWARDED_URL']) && strpos($_SERVER['HTTP_X_FORWARDED_URL'], '.w3spaces-preview.com/') !== false) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}
?>

 <!doctype html>

<html>

<head>
    <meta charset="utf-8">

    <title>My Boxster</title>

    <!-- Load external CSS styles -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    <h1>My Boxster</h1>

    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
                1 of 3
            </div>
            <div class="col-md-auto">
                Variable width content
            </div>
            <div class="col col-lg-2">
                3 of 3
            </div>
        </div>
        <div class="row">
            <div class="col">
                1 of 3
            </div>
            <div class="col-md-auto">
                Variable width content
            </div>
            <div class="col col-lg-2">
                3 of 3
            </div>
        </div>
    </div>


    <?php
        echo "PHP Rules!";
    ?>

    <!-- Load external JavaScript -->
    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>