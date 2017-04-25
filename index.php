<?php

$error = "";

if ($_POST) {
    
    $emailTo = "prevolnik.tilen@gmail.com";
            
    $subject = $_POST["name"];
            
    $content = $_POST["content"];
            
    $headers = "From: ".$_POST["email"];
    
  
    if (mail($emailTo, $subject, $content, $headers)) {
        
        $confirmation ="<h2>Lorem Ipsum is simply dummy text.</h2><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quam ex, pretium vitae iaculis sed, lacinia vitae ex. Nunc feugiat urna at odio efficitur ultrices. Ut id maximus tellus. Donec pellentesque vestibulum semper. Suspendisse potenti.</p><p>Vivamus et sapien rutrum metus facilisis porttitor ac semper ipsum. Integer libero ligula, sollicitudin eget urna eget, pharetra dictum lectus. Nulla nec euismod dui.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean sit amet malesuada ipsum, lacinia sodales orci.</p><p>Hvala za razumevanje,<br>tehnična ekipa Janeza Novaka";
        
        ?>
        <style type="text/css">
            .main-content{
                display:none;
            }
        </style>
        <?php
        
    } else {
        
        header("Location: index.php?message=error");
        exit;
        
    }  
} 

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>From Test</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        
        <link rel="icon" type="image/png" href="/img/form-icon.png">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    
    <body>
        <div class="container-fluid" id="form-box">
            <div class="row">
                <div class="offset-sm-1 col-sm-10 forma-test">
                    <p>Predlagajte temo ali postavite vprašanje.</p>
                    
                    <img id="close-btn" src="/img/closex.png">
                    
                    <hr>
                    <div class="row forma-test-content">

                        <div class="col-sm-6 content-text main-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quam ex, pretium vitae iaculis sed, lacinia vitae ex. Nunc feugiat urna at odio efficitur ultrices. Ut id maximus tellus. Donec pellentesque vestibulum semper. Suspendisse potenti.</p>
                            <p>Vivamus et sapien rutrum metus facilisis porttitor ac semper ipsum. Integer libero ligula, sollicitudin eget urna eget, pharetra dictum lectus. Nulla nec euismod dui.</p>
                        </div>
                        
                        <div class="col-sm-6 main-content">
                            <form method="post">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control bg-grey" id="name" aria-describedby="emailHelp" placeholder="Vaše ime...">
                                </div>

                                <div class="form-group">
                                    <input name="email" type="email" class="form-control bg-grey" id="email" aria-describedby="emailHelp" placeholder="Vaš email...">
                                    
                                </div>

                                <div class="form-group">
                                    <textarea name="content" class="form-control bg-grey" id="content" rows="10" placeholder="Vaše sporočilo..."></textarea>
                                </div>
                                
                                <button id="submit-btn" type="submit" class="btn btn-primary">Pošlji sporočilo</button>
                            </form>
                            
                            <div id="error"><? if (!empty($_GET['message'])) { echo '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent - please try again later</div>'; } ?></div>
                        </div>
                        
                        <div class="col-sm-6 content-text confirmation"><? if ($_POST) { echo $confirmation; } ?></div>
                        
                    </div>
                </div>
            </div>
        </div>
        

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        
        <script type="text/javascript" src="/js/script.js"></script>
    </body>
</html>