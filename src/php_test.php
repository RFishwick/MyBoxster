<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>PHP_Test</title>
</head>

<html>

<body>
    <h1>PHP Test Page</h1>

    <?php
    echo "<h2>A Simple Program</h2>";

    echo "This ", "string ", "was ", "made ", "with multiple parameters.<br><br>";

    echo "The value of PI: ";
    echo (pi());

    echo "<p>Count to 10: ";
    $count = 0;
    for ($i = 1; $i <= 10; $i++) {
        $count += $i;
        echo "$i\n";
    }

    echo "<h3>Why kind of web browser do you have?</h3>";

    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br><b
    r>";

    echo "<h3>Server Info:</h3>";
    echo phpinfo();
    echo "<br>";
    ?>

</body>

</html>