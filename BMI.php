<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="app.js"></script>

    <title>BMI</title>
</head>
<body>
    <?php include 'header.php';?>
    <br>
    
    <h1>Calculate your BMI.</h1>  
    <p>BMI means, body mass index. It is a way to calculate if you have a healthy body weight. 
        A high BMI can be dangerous for your personal health and will have a negative effect on your
    quality of life.
</p>


<label for="Your length?">What is your length?</label>
    <input id="Your length?" type="text" placeholder="Your length in centimeters">
<br>
    <label for="Your weight?">What is your weight?</label>
    <input id="Your weight?" type="text" placeholder="Your length in kilogram">
    <p> Your BMI is: </p>
<?php include 'footer.php';?>
</body>
</html>