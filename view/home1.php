<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css')?>">
  <style>
    header{
  
  
  font-family: 'Poppins', sans-serif;  
  background: rgb(134,131,187);
background: linear-gradient(90deg, rgba(134,131,187,1) 0%, rgba(182,207,235,1) 35%, rgba(71,211,240,1) 100%);
}
.footer{
    background: rgb(128,125,201);
background: linear-gradient(90deg, rgba(128,125,201,1) 0%, rgba(23,63,110,1) 35%, rgba(47,128,145,1) 100%);
  color: #8a8a8a;
  font-size: 14px;
  }
  .col2{
  margin-top:7%;
}
.col1{
  margin-top:20%;
}
.btn1{
  display: inline-block;
  padding: 8px 30px;
  margin: 30px 30px;
  border-radius: 30px;
  text-decoration: none;
  transition:0.5s ease;
  border:none;
  background: rgb(78, 95, 157,1);
  color: white;
}
.btn1:hover{
  background: rgb(180, 206, 234,1);
  color: rgba(23,63,110,1);
}
  </style>
</head>
<body>
<header>
        <div class="header">
        
            <div class="navbar">
                <div class="logo"><img src="<?php echo base_url('assets/user/dist/img/truck.png')?>" alt="Logo" width="75px"></div>
                <nav>
                    <div class="menu">
                        
                        <a href="#"> Home</a>
                        <a href="<?php echo base_url('index.php/logreg')?>"> Login</a>
                        <a href="#"> Help</a>
                        
                       
                    
                </div>
                
            </nav>
            

        </div>
        
        <div class="color">
        <div class="row">
            <div class="edit">
            <div class="col1">
                <h1>Book you tickets<br>now!</h1>
                <p>Largest bus ticket booking site.<br>Get your tickets at the lowest rates.
                </p>
                <!-- <a href="<?php echo base_url('index.php/user')?>" class="btn1">Book ticket &#10141;</a> -->
                <button class="btn1" id="redirectButton">Book ticket &#10141;</button>
            </div>
        </div>
            <div class="col2"> <img src="<?php echo base_url('assets/user/dist/img/bus.png')?>"></div>
        </div>

        </div>
    </div>
</header>

<!------footer------>

<footer>
<div class="footer">
        <div class="row">
            <div class="footcol1">
                <h3 class="gh">Download our app</h3>
                <p>Download App for Android and ios divices</p>
                <div class="applogo">
            </div>
            </div>
            <div class="footcol2">
                <p>Our purpose is to sustainably make the pleasure and<br> 
                    benefits of travel accessible to the many.</p>
            </div>
            <div class="footcol3">
                <h3>Useful links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog posts</li>
                    <li>cancel policy</li>
                    <li>Join affiliate</li>
                </ul>
            </div>
            <div class="footcol4">
                <h3>follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
</div>
</footer>
<script>
        // Get the button element by its ID
        var redirectButton = document.getElementById('redirectButton');
        
        // Add a click event listener to the button
        redirectButton.addEventListener('click', function() {
            // Redirect to the desired URL
            window.location.href = "<?php echo base_url('index.php/logreg')?>";
        });
    </script>
  <script src="<?php echo base_url('assets/frontend/js/bootstrap.js')?>"></script>
  
</body>
</html>