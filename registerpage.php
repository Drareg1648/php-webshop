<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php';?>
    <div>
        <div>
<form id="inlog gegevens">
    <label for="your name?"> What is your first name?   </label>
    <input id="your name?" type="text" placeholder="Please enter your name.">
<br>
<label for="your name?"> What is your last name?    </label>
    <input id="your name?" type="text" placeholder="Please enter your name.">
<br>
    <label for="your inlogname?">What should be your inlogname?</label>
    <input id="your inlogname?" type="text" placeholder="your inlogname">
<br>
<label for="your email?">What is your email?</label>
    <input id="your email?" type="text" placeholder="your email">
<br>
    <label for="Your password?">What would you like to be your password?</label>
    <input id="Your password?" type="password" placeholder="Enter password.">
    <p>If all of your information is correct, please click send.</p>
    <button type="button1">send</button>
    <br>
    <p>If you made a small mistake, please click reset.</p>
    <input type="button" onclick="myFunction()" value="Reset">
    <script>
        function myFunction() {
          document.getElementById("inlog gegevens").reset();
        }
        </script>
        </div>
        <?php include 'footer.php';?>
</body>
</html>

