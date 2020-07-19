<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
</head>

<body>
    <!-- use form to send data -->
    <!-- action="target PHP" -->
    <!-- !! writing without security is dangerous !! -->
    <!-- method="the HTTP method for collecting data, usually POST" -->
    <!-- the name="" inside input tag will become a key for $_POST global array -->
    <!-- and the value which user entered will be saved as its value -->
    <form action="form.php" method="POST">
        <p>text must be longer than 5 characters.</p>
        <input type="text" name="text" placeholder="enter here" />
        <br>
        <input type="submit" name="submit" />
    </form>
    <!-- response to the request -->
    <?php
    if (isset($_POST['submit'])) {
        $text = $_POST['text'];
        $minlen = 5;
        if (strlen($text) <= $minlen) {
            echo "please enter more than 5 characters.";
        } else {
            echo $text . " was entered.";
        }
    }
    ?>
</body>

</html>