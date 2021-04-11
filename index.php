<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.cs">
</head>
<body>
    <main>
        <p>SEND E-MAIL</p>
        <form class="content-form" action="contentform.php" method="post" >
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your E-Mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit" >Send Mail</button>
        </form>
    </main>
</body>
</html>