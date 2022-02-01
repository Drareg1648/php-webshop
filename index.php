<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop Sportschoolartikelen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/index.css">

  </head>

  <!----this is for own notes--> 
<body>

  <?php include 'header.php';?>
  

<div style="padding-left:16px">
  <h2></h2>
  <p></p>
  <p></p>
</div>


  <div class="container">

<header><h1>Spoger.com</h1></header>
<h2>For your gym at home</h2>
<p></p>
<p>Welcome to Spoger.com, your very own wesbite where you can order your own sporting equipment.</p>
<p>In our busy life's we don't have the time to go to the gym every day, so why we don't take the gym to our own home.
    a quick easy exercise before breakfast or doing a 60 minute training, with our equipment, everything is possible
</p>
<br>
<!-- <div id="app">
  <h1>{{ product }}</h1>
  </div> -->
<br>
<br>

<b><p>Spoger is a webshop for you daily gym needs.</p></b>
<br>
<br>

</div>
<div class="container">
<div class="slideshow-container">
        
    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img src="/assets/images/yogamat.jpeg" style="width:100%" height="100%">
      <div class="text">Joga mat</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="/assets/images/dumbells.jpeg" style="width:100%" height="100%">
      <div class="text">Dumbells</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="/assets/images/springtouw2.jpeg" style="width:100%" height="100%">
      <div class="text">Springtouw</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="/assets/images/kettlebell.jpeg" style="width:100%" height="100%">
      <div class="text">Gewichten</div>
    </div>
  <div>
      <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(+1)">&#10095;</a>
  </div>
  <br>
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>
</div>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>

<br>
<br>

<div class="container-fluid">
<!-- <p>Click <a href="#">here</a> for the webshop</p> -->
<br>
<br>
<h2>Here you can see a preview of our webshop</h2>
<h3>Products Spoger</h3>
<div class="row">
  <div class="column">
    <img src="/assets/images/dumbells.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%">
    <p> Dumbbells in various sizes, click <a href="/dumbells.php">   <button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>
  
  </div>
  <div class="column">
    <img src="/assets/images/kettlebell.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%"> 
    <p> kettlebells in various sizes and colours, click <a href="/kettlebell.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>

  </div>
  <div class="column">
    <img src="/assets/images/springtouw.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%">
    <p> Our very own special black skip rope, click <a href="/springtouw.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>

  </div>
</div>
<br>
<div class="row">
  <div class="column">
    <img src="/assets/images/yogamat.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%">
    <p> yogamat, click <a href="yogamat.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>


  </div>
  <div class="column">
    <img src="/assets/images/handdoeken.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%"> 
    <p>mantortory in many gyms and very usefull during a workout, a fancy towel, click <a href="/handdoeken.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>

  </div>
  <div class="column">
    <img src="/assets/images/oordopjes.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%">
    <p> Sometimes you want to listen to some music during a workout, that is why you need earphones, click <a href="/oordopjes.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>

  </div>
</div>
<br>
<div class="row">
  <div class="column">
    <img src="/assets/images/deo-for-women.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%">
    <p> after a workout, you need to smell good, so we also have some deodorant for women in stock, <a href="/deo-for-women.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>
  
  </div>
  <div class="column">
    <img src="/assets/images/deo-for-men.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%"> 
    <p>after a workout, you need to smell good, so we also have some deodorant for men in stock, <a href="/deo-for-men.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>

  </div>
  <div class="column">
    <img src="/assets/images/headset.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%">
    <p> If you don't like earphones and like to wear an headphone, we also have that in stock, click <a href="/headset.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>

  </div>
</div>
<br>
<div class="row">
  <div class="column">
    <img src="/assets/images/waterfles.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%">
    <p> During a workout, you need to hydrate. and that is why you need a very strong bottle. Click <a href="/waterfles.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>
  
  </div>
  <div class="column">
    <img src="/assets/images/tennis.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%"> 
    <p>How about starting with a new sport? Have you tried tennis? First you need a tennis racket. Click <a href="/tennis.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>

  </div>
  <div class="column">
    <img src="/assets/images/tennisball.jpeg" style="width:100%" height="100%" alt="" style="width:100%" height="200%">
    <p>And if you want to start to tennis, you also need a tennis ball. Click <a href="/tennisball.php"><button type="button" class="btn btn-outline-primary">here</button></a> to order.</p>

  </div>
</div>
<br>
<p>Our main form of communication is online, our respons time (during work days and hours) is less then 60 minutes. Any questions about orders or the products can be asked in the email.
</p>


<h3>Follow us on Facebook, Twitter, Tiktok and Instagram</h3>
<section>
    <nav>
        
            <link href="www.facebook.com"><button type="button" class="btn btn-outline-primary">Facebook</button></a>
            <link href="www.twitter.com#"><button type="button" class="btn btn-outline-primary">Twitter</button></a>
            <link href="www.tiktok.com"><button type="button" class="btn btn-outline-primary">Tiktok</button></a>
            <link href="www.instagram.com"><button type="button" class="btn btn-outline-primary">Instagram</button></a>    
    </nav>
</section>
  <!----<p>&euro;</p>--> 
<h3>if you are just starting working out, please <h3>Click <a href="/tips-to-start-working-out.php">here</a></h3> to learn more about starting out.</h3>
    
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="/assets/js/index.js"></script>

</body>
<footer>



</footer>
</html>