<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP MOTORS Website by Alma Benavides in CSE 340">
    <title>Registration | PHP MOTORS</title>

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>
<body>
    <header id="page_header"><?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?> </header>
    <nav><?php echo $navList; ?></nav>
    <main>
        <h1>Register to PHP Motors</h1>
        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>
        <form id="loginform" method="post" action="/phpmotors/accounts/index.php">
            <fieldset>
                <legend>Register</legend>
                <label class="top" for="fname">First name<input id="fname" type="text" name="clientFirstname" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?> required></label>
                <label class="top" for="lname">Last name<input id="lname" type="text" name="clientLastname" <?php if(isset($clientLastname)){echo "value='$clientLastname'";}  ?> required></label>
                <label class="top" for="email">Email<input id="email" type="email" name="clientEmail" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> required></label><br>
                <span>Password must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
                <label class="top" for="password">Password<input id="password" type="password" name="clientPassword" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"></label>
            </fieldset>
            <button class="blue-btn form-btn" type="submit" name="submit" value="register">Register</button>
            <!-- Add the action name - value pair -->
            <input type="hidden" name="action" value="register">
        </form>
    </main>
    <footer id="page_footer"><?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?> </footer>  
</body>
</html>