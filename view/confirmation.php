<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation Page</title>
    <link rel="stylesheet" href="confirm.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <style>
      * {
    padding: 0;
    margin: 0;
  }
  
  body {
    color: #515151;
    font-family: 'Open Sans', sans-serif;
  }
  
  #bg img {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: -2;
      top: 0;
  }
  
  #overlay {
    position:absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    top: 0;
    background-color: gray;
    opacity:0.5;
  }
  
  #container {
    position: relative;
    max-width: 218px;
    margin: 200px auto;
    background: #fff;
    padding: 20px 17px;
    text-align: center;
    border-radius: 3%;
  }

  button:hover{
      background-color: rgba(36,97,167,1);
      scale:103%;
  }
  
  h1 {
    margin: 30px 0 20px 0;
    font-weight: normal;
  }
  
  p {
    font-size: 0.8em;
    margin-bottom: 25px;
  }
  
  button {
    width: 100%;
    background: rgba(23,63,110,1);
    border: transparent;
    border-radius: 30px;
    padding: 10px;
    text-transform: uppercase;
    color: white;
    letter-spacing: 1px;
    transition:0.5s ease;
  }
  
  #circle {
    position: absolute;
    width: 80px;
    height: 80px;
    background: rgba(23,63,110,1);
    border-radius: 50%;
    text-align: center;
    top: -40px;
    left: 84px;
  }
  
  i {
    color: white;
    margin: 25px;
    font-size: 30px;
  }
  
  .background{
    background: rgb(134,131,187);
background: linear-gradient(90deg, rgba(134,131,187,1) 0%, rgba(182,207,235,1) 35%, rgba(71,211,240,1) 100%);
    position: absolute;
	width: 100%;
	height: 100%;
    top: 0;
    left: 0;
    background-position: center;
    background-size: cover;
  }
    </style>
</head>
<body>
    <div class="background"></div>
    <div id="overlay"></div>  
        <div id="container" id="timer">
          <div id="circle">
            <i class="fa fa-check"></i> 
          </div> 
          <h1>Success</h1>
          <p>Your booking is successful. Check your email for a booking confirmation. We'll see you soon!</p>
          <a href="<?php echo base_url('index.php/Home/search')?>"><button>Ok</button></a>
        </div>
</body>
</html>