


<html>

<head>
    <title>Lab 3.1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>E-mail</legend>
            email : <input type="email" name="email" value="" />
        
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    echo $email;
}
?>
