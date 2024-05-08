<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Hardware Hub</title>
 <style>   
    body {
    margin: 0;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: black;
    color: #ffc107;
    padding-top: 70px;
    font-family: 'Roboto', sans-serif;
    color: white; /* Change font color to white */
  }
  /* Style the navbar */
  .navbar {
    margin-bottom: 0px;
    padding: 1px;
    font-size: 20px;
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    overflow-x: auto; /* Enable horizontal scrolling */
    white-space: nowrap; /* Prevent wrapping of navbar items */
    justify-content: center;
    background-color: black;
    color: white;
  }
  .navbar-light .navbar-nav .nav-link:hover {
    color: black; /* Change the color to yellow on hover */
}
.navbar-light .navbar-brand:hover {
    color: yellow;
    
}
  .navbar-brand{
    margin-left: 50px;
  }
  .navbar-brand .
  .navbar .nav-link {
  color: white;
  }
  .fixed-navbar {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; /* Ensure the navbar is above other content */
    overflow: visible; /* Allow overflow when scrolling */
  }
  .container{
      margin-top: 160px;
      justify-self: center;
      color: yellow;
      text-align: center;
  }
  .container{
      font-size: 20px;
  }
  .mt-5{
      margin-right: 30px;
      color:yellow;
      font-size: 50px;
  }
  .nav-item {
      margin-right: 30px;
  }
  .navbar-light .navbar-nav .nav-link {
    color: white;
  }
  .navbar-nav{
  justify-content: space-between;
  font-size: 20px;
  font-weight: 800;
}
/* Styling the main heading */
.container .slider-scrollbar {
  height: 24px;
  width: 100%;
  display: flex;
  align-items: center;
}
.slider-scrollbar .scrollbar-track{
height: 2px;
width: 100%;
position: relative;
background: gray;
border-radius: 4px;
}

.slider-scrollbar .scrollbar-thumb{
  position: absolute;
  height: 100%;
  width: 50%;
  background: black;
  border-radius: inherit;
  cursor: pointer;
  }
  

.sellers .row, #tools .row {
  display: flex;
  flex-wrap: nowrap; /* Prevent wrapping items to new lines */
  overflow-x: auto; /* Enable horizontal scrolling */
  -webkit-overflow-scrolling: touch; /* Enable smooth scrolling on iOS devices */
  padding-bottom: 15px; /* Add some bottom padding for spacing */
}

#tools .col-md-6 {
  flex: 0 0 auto;
  padding-right: 15px;
}

.sellers .col-md-6, #tools .col-md-6 {
  flex: 0 0 auto; /* Ensure each column retains its original width */
  padding-right: 15px; /* Add right padding to create spacing between cards */
}



.sellers .row {
  display: flex;
  flex-wrap: nowrap; /* Prevent wrapping items to new lines */
  overflow-x: auto; /* Enable horizontal scrolling */
  -webkit-overflow-scrolling: touch; /* Enable smooth scrolling on iOS devices */
  padding-bottom: 15px; /* Add some bottom padding for spacing */
}

.sellers .col-md-6 {
  flex: 0 0 0; /* Ensure each column retains its original width */
  padding-right: 3px; /* Add right padding to create spacing between cards */
}

/* Optional: Adjust card width and height for better display */
.sellers .card {
  width: 250px; /* Set a fixed width for each card */
  height: auto; /* Allow height to adjust based on content */
}
  /* Style the container */
  .container {
    max-width: 1500px; /* Set max-width for the container */
    overflow-x: hidden;
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    margin-top: -5px;
  }
  
  .container::-webkit-scrollbar {
    display: none;
}

  /* Style the sections */
  .sellers h2 {
    margin-bottom: 20px; /* Add margin below section headings */
    text-align: center; /* Center-align section headings */
  }
  

  /* Style the cards */
  .card {
    border: 1px solid #e0e0e0; /* Add border to cards */
    border-radius: 5px; /* Add border-radius to cards */
    background: transparent;
    perspective: 100px;
  }
  
  .card-title {
    font-weight: bold; /* Make card titles bold */
  }
  
  .card-text {
    margin-bottom: 10px; /* Add margin below card text */
  }
  
  /* Style the buttons */
  .btn-primary {
    border-radius: 20px;
    padding: 10px 30px; /* Adjust padding for a more consistent look */
    font-size: 20px;
    margin-top: 0px; /* Add margin above the primary button */
    display: block; /* Make the button a block element */
    margin-left: auto; /* Center-align the button */
    margin-right: auto; /* Center-align the button */
  }
  
  /* Style the orders display */
  #orders {
    margin-top: 20px; /* Add margin above orders display */
    border: 1px solid #e0e0e0; /* Add border to orders display */
    padding: 10px; /* Add padding to orders display */
    border-radius: 5px; /* Add border-radius to orders display */
  }
h2{
  margin-right: 1500px;
  background-color: #ffc107;
}
  
.seller {
      background-color: #123119;
      border-radius: 20px;
  }
  .highlight {
    background-color:#ffc107; /* Change to your desired highlight color */
    color:black; /* Change to your desired text color */
    padding: 10px 15px; /* Adjust padding as needed */
    display: inline-block; /* Ensure the background only covers the text */
    border-radius: 5px; /* Optional: Add rounded corners */
}


span{
    color: black;
    text-align: center;
  }
 img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  display: block; /* Ensure the image is a block element to apply margin auto */
  margin-left: auto;
  margin-right: auto;
  width: 50%; /* You may adjust this width as necessary */
}
.navbar-toggler {
  z-index: 1100; /* Increase z-index to ensure it's on top */
  position: relative; /* Ensure proper positioning */
}
.navbar-light .navbar-brand {
    color: rgba(0,0,0,.9);
    font-weight: 800;
}

img:hover {
  width: 100%;
  transform: translate(10px);
}
.btn-primary{
  margin-top: 0px;
  background-color: rgb(67, 207, 79);
  border-radius: 20px;
  padding-left: 50px;
  padding-right: 50px;
  font-size: 20px;
}
.horizontal-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
}

.horizontal-menu li {
  margin: 0;
}

.horizontal-menu li a {
  text-decoration: none;
  color: #333;
  padding: 10px 20px;
  display: block;
  position: relative;
  transition: color 0.3s;
}

.horizontal-menu li a::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 3px;
 transition: width 0.3s ease-in-out;
}

.horizontal-menu li a:hover::after {
  width: 100%;
}

.horizontal-menu li a:hover {
  color: #007bff; /* Change this to your desired highlight color */
}
.buy-section {
  display: flex;
  align-items: center;
}

.quantity-input {
  flex: 1; /* Take up remaining space */
  margin-right: 10px; /* Add some space between input and button */
}

.btn-primary{
    display: flex;
}
.sellers {
  position: relative;
}
.sellers::before {

  left: 0;
  content: "";
  position: absolute;
  top: 0;
  width: 90px; /* Width of the shadow */
  height: 100%;
  z-index: 99;
}

.sellers::after {
  right: 0;
  content: "";
  position: absolute;
  top: 0;
  width: 150px; /* Width of the shadow */
  height: 100%;
  z-index: 99;
}
.card-img-top {
    max-width: 70%;
    height: auto;
    top: 0;
    left: 0;
    transition: transform 0.3s ease;
}

/* Adjust card flex */
.card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-body {
    width: auto;
    height: auto;
}
h5{
    text-align: center;
}
.card-text{
    text-align: center;
}
.text-center{
  width: 15%;
}

</style>
</head>
<body>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-navbar">
  <a class="navbar-brand" href="home.php">
    
    Hardware Hub
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="php/logout.php">
          <button class="btn nav-btn">
            <img src="Pics/box-arrow-left.svg" alt="Logout" style="width: 25px; height: 25px; margin-right: 5px;">
          </button>
        </a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-4">
    <section id="sellers">
        <div class="sellers container">
            <h2>Materials</h2>
            <div class="row overflow-x-auto"> <!-- Add overflow-x-auto class to enable horizontal scrollbar -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/hollow Blocks.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Hollow Blocks</h5>
                            <p class="card-text">Price: $2.3</p>
                            <a href="buy/edit_quantity.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/nails.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Nails</h5>
                            <p class="card-text">Price: $2.3</p>
                            <a href="buy/edit_quantity2.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/semento.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Cement</h5>
                            <p class="card-text">Price: $5.23</p>
                            <a href="buy/edit_quantity3.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/yero.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Roof</h5>
                            <p class="card-text">Price: $10.24</p>
                            <a href="buy/edit_quantity4.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/volts and nuts.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Bolts & Nuts</h5>
                            <p class="card-text">Price: $12.24</p>
                            <a href="buy/edit_quantity5.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/door knob.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Door Knob</h5>
                            <p class="card-text">Price:  $5.24</p>
                            <a href="buy/edit_quantity6.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
        </div>
        <div class="sellers container">
            <h2>Tools</h2>
            <div class="row overflow-x-auto"> <!-- Add overflow-x-auto class to enable horizontal scrollbar -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/meter.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Meter</h5>
                            <p class="card-text">Price: $10.23</p>
                            <a href="buy/edit_quantity7.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/philip screw.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Philip Screw</h5>
                            <p class="card-text">Price: $20.24</p>
                            <a href="buy/edit_quantity8.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/wooden saw.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Wooden Saw</h5>
                            <p class="card-text">Price: $14.24</p>
                            <a href="buy/edit_quantity9.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/pliers.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Pliers</h5>
                            <p class="card-text">Price: $12.32</p>
                            <a href="buy/edit_quantity10.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/wrench.png" class="imagep" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">Wrench</h5>
                            <p class="card-text">Price: $10.24</p>
                            <a href="buy/edit_quantity11.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="Pics/L-Sqaure.png" class="image" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">L-Square Ruler</h5>
                            <p class="card-text">Price: $11.24</p>
                            <a href="buy/edit_quantity12.php"> <button class="btn btn-primary" onclick="buyProduct(this)">Buy</button></a>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </section>
</div>
</div>
<div class="text-center mt-4">
        <a href="php/get_latest_order.php" class="btn btn-primary btn-lg">View Order</a>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  


</body>
</html>