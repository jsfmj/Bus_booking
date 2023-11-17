<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  .container {
    max-width: 600px;
    margin: 0 auto;
   
}

label {
    margin-bottom: 5px;
    display: block;
    font-weight: bold;
    color: white;
}

select,
input[type="date"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.col1{
  display:flex;
  justify-content:center;
  align-items:center;
  border: 2px solid rgba(255,255,255,.5);
  border-radius: 20px;
  height:45vh;
  width:15vw;
  background: rgba(23,63,110,1);
  margin-top:30%;
}
.col2{
  margin-top:7%;
}

.btn {
    width: 100%;
    padding: 10px;
    background: rgb(180, 206, 234,1);
    color: rgba(23,63,110,1);
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition:0.5s ease;
}

.btn:hover {
    background: rgb(78, 95, 157,1);
  color: white;
}

/* Optional: Add some spacing between form elements */
.container > * {
    margin-bottom: 10px;
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
                        <a href="<?php echo base_url('index.php/logreg')?>"> Logout</a>
                        <a href="#"> Help</a>
                        
                       
                    
                </div>
                
            </nav>
            

        </div>
        
        <div class="color">
        <div class="row">
            <div class="edit">
            <div class="col1">
            <form  action="<?php echo base_url('index.php/Home/serch')?>" name="bus_search_form" method="post">	
							<div class="container" style='font-weight:bold;'>
								<label>From:</label>
									<select  class='form-control' id="source" name="source">
										<option value="|">Enter City</option>
										<option value="Kochi">Kochi </option>
										<option value="Trivandrum">Trivandrum</option>
										<option value="Kottayam">Kottayam</option>
										<option value="Idukki">Idukki</option>
									</select>
								<label>To:</label>
									<select class='form-control' id="dstn" name="dstn"placeholder="Select option">
										<option value="|">Enter City</option>
										<option value="Kochi">Kochi </option>
										<option value="Trivandrum">Trivandrum</option>
										<option value="Kottayam">Kottayam</option>
										<option value="Idukki">Idukki</option>
									</select>			
								<label>Date of Journey:</label>
									<input  class='form-control' type ="date" name="journey_date"  value="journey_date"/>
								<h4><p style="margin-left:px;margin-top:20px;">
								<!-- <input style="width:100%" class="btn btn-success" type="button" name="submit" id="btn" value="Search_Bus"></input> -->
                <button style="width:100%" type="submit" class="btn btn-success" name="submit" value="Search_Bus">Search Bus</button>
								</h4>
							</div>
						</form>
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
                    benefits of sports accessible to the many.</p>
            </div>
            <div class="footcol3">
                <h3>Useful links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog posts</li>
                    <li>Return policy</li>
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
</body>
</html>