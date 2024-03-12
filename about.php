<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Page</title>
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
      <?php include_once('iframe.html');?>

      <p>Welcome to my second web page</p>
    </div>
    <div class="row" style="border:3px blue solid">
      <h3>This is the footer</h3>
  </div>
  </div>
    
    <script type="Text/Javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>