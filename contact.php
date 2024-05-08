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
  .navbar-light .navbar-brand {
    color: rgba(0,0,0,.9);
    font-weight: 800;
}
  .navbar-nav{
  justify-content: space-between;
  font-size: 20px;
  font-weight: 800;
}
.container{
  margin-top: -5px;
}
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-navbar">
  <a class="navbar-brand" href= "home.php">
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
<section>

  <section id="contact" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <form action="https://formspree.io/f/xzbowpjq" method="POST" class="form">
            <div class="form-group">
              <h1>Contact Us</h1>
              <span>As you might expect of a company that began as a high-end interiors contractor, we pay strict attention.</span>
              <h3>HARDWARE HUB</h3>
              <p>Office Number<br>09199242509</p>
            </div>
            <div class="form-group">
              <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
              <textarea name="message" id="message" class="form-control" rows="7" placeholder="Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
          </form>
        </div> 
        <div class="col-lg-6">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3088.865624612847!2d121.42384471575635!3d14.10567481963001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c917d3776473%3A0x2b5905f0915c1bb8!2sJollibee%20Tanauan%20Expressway!5e0!3m2!1sen!2sph!4v1654512023731!5m2!1sen!2sph" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>
