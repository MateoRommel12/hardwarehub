<?php
// Start the session to access session variables
session_start();

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    // Retrieve the username
    $username = $_SESSION['username'];
} else {
    // If the username is not set, you can provide a default value or handle the situation accordingly
    $username = "Guest";
}
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <title>Hardware Hub</title>
  </head>
  <style>
  body {
    margin: 0;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-image: url('Pics/BGhome.jpg');
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
    background-color: #16161d;
    color: white;
    opacity: 45%;
  }
  .navbar-light .navbar-nav .nav-link:hover {
    color: yellow; /* Change the color to yellow on hover */
}
.navbar-light .navbar-brand:hover {
    color: yellow;
    
}
.navbar-light .navbar-brand {
    color: rgba(0,0,0,.9);
    font-weight: 800;
    font-weight: bold;
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
      text-transform: uppercase;
  }
  .nav-item {
      margin-right: 30px;
  }
  .navbar-light .navbar-nav .nav-link {
    color: white;
  }
  .nav-btn{
    color: white;
  }
  .nav-btn {
    color: black; /* Change the color to black */
    background-color: white; /* Change the background color to white */
    border: 1px solid black; /* Add a black border */
    border-radius: 5px; /* Add some border radius for rounded corners */
    padding: 5px 10px; /* Add padding for better appearance */
  }
  .navbar-light .navbar-brand {
    color: white;
    margin-left: 50px;
  }
  .img{
    margin-right: 400px;
  }
  *, ::after, ::before {
    box-sizing: border-box;
    color: violet;
    font-weight: bolder;
  }
  b, strong {
    font-weight: bolder;
    color: white;
}
  </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-black fixed-navbar">
  <a class="navbar-brand" href="home.php">
    Hardware Hub
  </a>
  <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
  <div class="container">
    <h1 class="mt-5">Hi, <span><?php echo $username; ?>!</span><br> Welcome To<br> Hardware Hub</h1>
</div>
  <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  

  </body>
  </html>
