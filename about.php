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
    background-color: white;
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
  .navbar-light .navbar-brand {
    color: rgba(0,0,0,.9);
    font-weight: 800;
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
.card {
  color: black;
}
.card .mt-3{
  opacity: 60%;
}
.About.card {
  margin-bottom: -500px;
  margin-left: 350px;
  width: 50%;
  margin-top: 100px; /* Adjusted margin for spacing */
  padding: 20px; /* Added padding for content spacing */
  border-radius: 10px; /* Rounded corners for a nicer look */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Added a subtle shadow for depth */
}

.About.card .title {
  text-align: center;
  font-size: 24px; /* Increased font size for the title */
  margin-bottom: 20px; /* Added margin bottom for spacing */
  color: #212529; /* Changed title color to a darker shade */
}

.About.card .text {
  text-align: justify;
  font-size: 16px; /* Increased font size for the text */
  line-height: 1.6; /* Adjusted line height for better readability */
  color: #333; /* Changed text color to a darker shade for better contrast */
}

  </style>
</head>
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
<div class="About card mt-5 bg-warning">
  <div class="body">
    <h3 class="title">About Us</h3>
    <p class="text"><b>Welcome to Hardware Hub! We're your go-to spot for top-notch hardware. More than just a marketplace, we're a trusted community dedicated to quality and innovation. Whether you're a pro or a hobbyist, join us on this awesome journey. Thanks for choosing Hardware Hub. Let's build something amazing together!</b></p> 
  </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
