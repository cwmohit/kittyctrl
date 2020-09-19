<?php
   $event=$_GET['EventName'];    
   $currency=$_GET['HomeCurrency'];
   $name=$_GET['Name'];
   $email=$_GET['Email'];
   $friend=$_GET['Person2'];
 
   session_start();
   $_SESSION['event']=$event;
   $_SESSION['currency']=$currency;
   $_SESSION['name']=$currency;
   $_SESSION['email']=$email;
   $_SESSION['friend']=$friend;

   $i=3;
//    $friends[".$i."]=$_GET["Person$i"];
//    echo  $friends[".$i."];
   while(isset($_GET["Person$i"])){
      $friends[".$i."]=$_GET["Person$i"];
       $i++;
   }
 
?>
<?php
$to="$email";
$subject="$event";
$message="Hope you have great journey! I am very thankful to you";
$headers = 'From: cwmohit@gmail.com'."\r\n";
mail($to, $subject, $message, $headers);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>KittyCtrl</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">CT&#8377;L Kitty</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right">
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="about.html"><i class="fa fa-address-card mr-2"
                                aria-hidden="true"></i>About
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="login.html"><i class="fa fa-sign-in mr-2"
                                aria-hidden="true"></i>Login</a>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="signup.html"><i class="fa fa-user-plus mr-2"
                                aria-hidden="true"></i>SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-lg-4 col-md-4 my-5">

            </div>
            <div class="col-lg-4 col-md-4 border my-2">
                <div class="bg-info">
                    <hr>
                    <h3 class="text-center">Expense</h3>
                    <hr>
                </div>
                <form action="expense_distribution.php" method="get">
                    <div class="form-group">

                        <select class="" id="query" name="paidby">
                            <option> <?php echo $name; ?> </option>
                            <option> <?php echo $friend; ?> </option>
                            <?php 
                             $j=3;
                            
                             while($friends[".$j."]){
                                 ?>
                            <option> <?php echo $friends[".$j."]; $j++; ?> </option>
                            <?php
                             }


                            ?>

                        </select> Paid for something?
                    </div>


                    <div class="form-group">
                        <label for="titleInput">How Much?</label>

                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><?php echo $currency;   ?></div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup"
                                placeholder="(Example-100)" name="expense" required>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="gridRadios1" value="option1"
                                checked>
                            <label class="form-check-label" for="gridRadios1">
                                Split equaly between everyone
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Split differently
                            </label>
                        </div>
                    </div>
                    <div id="splitdifferently" style="display: none;">
                        <h3>Amount</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                <?php echo $name;  ?>
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><?php echo $currency;   ?></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder=""
                                    name="expense1" >
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                <?php echo $friend;  ?>
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><?php echo $currency;   ?></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder=""
                                    name="expense2" >
                            </div>
                        </div>

                        <?php 
                             $k=3;
                             while(isset($friends[".$k."])){
                         ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                <?php echo $friends[".$k."];  ?>
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><?php echo $currency;   ?></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder=""
                                    name="expense<?php echo $k;   ?>" >
                            </div>
                        </div>
                        <?php
                          $k++;
                         }
                         ?>


                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">What For?</label>
                        <input type="text" class="form-control" name="title" id="exampleFormControlInput1"
                            placeholder="Ski Pass" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">When?</label>
                        <input type="date" class="form-control" name="date" id="exampleFormControlInput1" required>
                    </div>

                    <button type="submit" class="btn btn-outline-success" id="addBtn">Add</button>

                    <a type="submit" href="index.php" class="btn btn-outline-danger">Cancel</a>

                </form>
            </div>
            <div class="col-lg-4 col-md-4 my-5 bg-light">
                <h4>Some Ideas</h4>
                <p>Jack paid for the rental car</p>
                <p>Jack got some supplies from the supermarket</p>
            </div>

        </div>


    </div>
    <footer class="bg-dark text-light">
        <div class="container p-2">
            <center>
                Copyright © Control Kitty. All Rights Reserved | Contact Us: +91 90000 00000
            </center>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>
        let splitdifferently = document.getElementById('splitdifferently');
        splitdifferently.style.display = 'none';

        gridRadios2.addEventListener('click', () => {
            document.getElementById('splitdifferently').style.display = 'block';
        })
        gridRadios1.addEventListener('click', () => {
            document.getElementById('splitdifferently').style.display = 'none';
        })

    </script>
</body>

</html>