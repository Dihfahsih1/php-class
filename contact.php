<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact</title>
    
      <link rel="stylesheet" href="main.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
  </head>
  <body>
    <div class="container">
      <!-- This row is for navigation -->
      <div class="row">
        <?php include_once('nav.html');?>
    </div>
    <div class="row">
        <h3>Contact Us</h3>

        <p>Pleas contact us using the form below</p>
        <p>We shall respond to you with a call</p>
        <b style="color:green; text-decoration:line-through">We are glad to hear from you</b>
        <b style="color:red; background-color:blueviolet">We are located in Kampala</b>
        
    </div>

    <div class="row">
      <div class="col-lg-6">
        <a href="index.html">
          <img src="images/image1.png" class="img-fluid" />
      </a>
      </div>
      <div class="col-lg-6">
        <h5>Contact Form</h5>
        <form action="" method="post">
          <div class="form-group">
            <label for="email">Email: </label>
            <input id="email" type="email" name="email" placeholder="Enter your mail" class="form-control">
          </div>
          <div class="form-group">
            <label for="firstname">First Name: </label>
            <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" class="form-control">
          </div>

          <div class="form-group">
            <label for="message">Message: </label>
            <textarea class="form-control" name="message">

            </textarea>
          </div>
          <div class="form-group" style="text-align:right">
            <button type="submit" class="btn btn-outline-warning btn-lg">
              Submit
            </button>
          </div>
        </form>
      </div>
        
    </div>

    <div class="row" style="border:3px blue solid">
        <h3>This is the footer</h3>
    </div>
    </div>
    <script type="Text/Javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>