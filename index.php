<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
    
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #1b1c1e;
    text-align: center;
}

h1 {
    font-family: 'Playfair Display',
        serif;
    font-size: 59px;
    color: white;
    font-weight: 600;
    padding-bottom: 20px;
}

p {
    color: #d2d2d2;
}

p,
input,
textarea,
label {
    font-family: 'Poppins',
        sans-serif;
}

.container {
    max-width: 1320px;
    margin: 0 auto;
    padding: 5%;
}

form {
    max-width: 500px;
    margin: 0 auto;
    text-align: left;
    padding: 20px 0;
}

input,
textarea,
label {
    display: block;
    margin: 0 auto;
    width: 100%;
    color: #828282;
}

input,
textarea {
    background-color: transparent;
    border: 0;
    border-bottom: 2px solid #828282;
}

input[type=submit] {
    background-color: #545557;
    padding: 15px 0;
    color: white;
    font-size: 18px;
    border-bottom: none;
    margin-top: 30px;
    cursor: pointer;
    transition: all .3s ease;
}

input[type=submit]:hover {
    background: #FFF;
    color: #1b1c1e;
}

input,
textarea {
    color: white;
    font-size: 18px;
    padding: 10px;
}

input:focus,
textarea:focus {
    outline: 1px solid #828282;
}

a {
    color: #828282;
    font-style: italic;
}

a:hover {
    color: #fff;
}
    </style>
<body>
    <div class="container">
        <h1>Contact Me</h1>
        <p>Feel free to contact us and we will get back to you ass sson as we can.</p>
        <form action="mail.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>
