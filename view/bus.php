<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Available Buses</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css')?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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


.row {
    display: flex;
    justify-content: space-around;
}

.edit {
    width: 70%;
    margin: 0 auto;
}

.col1 {
    text-align: center;
}

h1 {
    color: rgba(23,63,110,1);
}

ul#list {
    
    list-style-type: none;
    padding: 0;
    display:flex;
    justify-content: center;
    align-items:center;
}

li#list1 {
    display:flex;
    justify-content: space-between;
    align-items:center;
    margin-bottom: 20px;
    background-color: rgba(23,63,110,1);
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    color:white;
}

li#list1:hover {
    transform: scale(1.02);
}

li#list1::after {
    content: "";
    display: table;
    clear: both;
}

li#list1 div {
    float: left;
    padding: 15px;
    width: 70%;
    box-sizing: border-box;
}

/* li#list1 button.view-seats {
    float: right;
    background-color: #4caf50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
} */
li#list1 button.view-seats{
  display: inline-block;
  padding: 8px 30px;
  background: rgb(180, 206, 234,1);
  margin: 30px 30px;
  border-radius: 30px;
  color: rgba(23,63,110,1);
  text-decoration: none;
  transition:0.5s ease;
  border:none;
}
li#list1 button.view-seats:hover{
  background: rgb(78, 95, 157,1);
  color: white;
}

p {
    color: white;
    font-weight: bold;
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
    <h1>Available Buses</h1>

    <?php if ($buses): ?>
        <ul id="list">
            <?php foreach ($buses as $bus): ?>
                <li id="list1">
                    <div id="list2">
                    Bus name: <?php echo $bus->bus_name; ?> <br><br>
                    Time: <?php echo date('H:i', strtotime($bus->departure_time)); ?><br><br> 
                    Fare: <?php echo $bus->price; ?> 
                    </div>
                    <div id="list3"><button class="view-seats" data-bus-name="<?php echo $bus->bus_name; ?>">View Seats</button></div>
                    <div class="seat-container" id="seat-container"></div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No available buses for the selected criteria.</p>
    <?php endif; ?>
            </div>
        </div>
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
<script>
        $(document).ready(function () {
            $(".view-seats").click(function () {

                
                var bus_name = $(this).data("bus-name");
                var seatContainerId = "seat-container-" + bus_name;
                $.ajax({
                    url: '<?php echo base_url('index.php/Home/getSeats'); ?>',
                    type: 'POST',
                    data: { bus_name: bus_name},
                    success: function (response) {
                        $("#seat-container").html(response);
                    },
                    error: function () {
                        alert('Error fetching seat information.');
                    }
                });
            });

        });
    </script>
</body>
</html>
