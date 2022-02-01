<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop Sportschoolartikelen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/index.css">

  </head>

<?php 

echo '<div class="nav">
<div class="logo-image">
<img src="assets/images/handdoeken.jpeg" class="img-fluid">

</div>

  <a class="active" href="/index.php">Home</a>
  <a class="active" href="/registerpage.php">Register</a>
  <a class="active" href="/loginpage.php">Login</a>
  <a class="active" href="/webshop.php">Webshop</a>
  <a class="active" href="/tips-to-start-working-out.php">Healthier lifestyle</a>
  <a class="active" href="/BMI.php">BMI</a>

  <a href="/contact.php">Contact</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><class="search"></i></button>

      <img src="/assets/images/cart.jpeg" class="cart">
    </form>
  </div>
</div>'
?>