<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>PHP</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="./">Home</a></li>
            <li role="presentation"><a href="?p=unit-converter">Unit corverter</a></li>
            <li role="presentation"><a href="?p=exercises">Exersices</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">PHP</h3>
      </div>

      <?php 
      if (isset($_GET['p'])) {
        $page = $_GET['p'];
        $page = $page . '.php';
        include($page);
      } else {
   
      ?>

      <!-- BEGIN text center -->
      <div class="text-center marketing">
        <h3>Chose you destiny!</h3>
        <a href="?p=unit-converter" class="btn btn-primary">Unit Converte</a>
        <a href="?p=exercises" class="btn btn-success">Exercises</a>
      </div>
      <!-- BEGIN text center -->      
      <?php } ?>
      
      <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>