<?php

if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

/*-------------------------------------------------+
| Get random line from file
+-------------------------------------------------*/
function getRandomLine($filename) { 
    $lines = file($filename) ; 
    return $lines[array_rand($lines)] ; 
} 

?>

<head>
    <style>
    /* Sticky Footer Classes */

    html,
    body {
      height: 100%;
    }
    
    #page-content {
      flex: 1 0 auto;
      margin: 10%;
    }
    
    #sticky-footer {
      flex-shrink: 0;
    }
    
    /* Other Classes for Page Styling */
    
    body {
      background: #007bff;
      background: linear-gradient(to right, #0062E6, #40d6aa);
    }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="d-flex flex-column">
    <div id="page-content">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <img src="ideaboostwb.png">
                    <br><br>
                    <p class="lead text-white-50"><?php echo getRandomLine("subtext.txt"); ?>
                    </p>
                    <hr>
                    <h1 class="font-weight-light mt-4 text-white">
                        <?php echo "Create ".getRandomLine("first.txt")." that ".getRandomLine("second.txt"); ?>
                    </h1>
                    <hr>
                    <button class="btn btn-light" value="Refresh Page" onClick="window.location.reload();"><?php echo getRandomLine("buttontext.txt"); ?></button>
                </div>
            </div>
        </div>
    </div>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; oliwerbig <?php echo date(Y) ?> - Started with a dream in 2019</small>
        </div>
    </footer>
</body>