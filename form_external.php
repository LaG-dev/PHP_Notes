<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form external</title>
</head>

<body>
    <!-- use form to send data -->
    <!-- action="target PHP/URL" -->
    <!-- !! writing without security is dangerous !! -->
    <!-- method="the HTTP method for collecting data, usually POST" -->
    <!-- the name="" inside input tag will become a key for $_POST global array -->
    <!-- and the value which user entered will be saved as its value -->
    <form action="form_external_process.php" method="POST">
        <p>text must be longer than 5 characters.</p>
        <input type="text" name="text" placeholder="enter here" />
        <br>
        <input type="submit" name="submit" />
    </form>
</body>

</html>