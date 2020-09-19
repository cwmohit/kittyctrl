<?php
   $paidby=$_GET['paidby'];    
   $expense=$_GET['expense'];
   $type=$_GET['type'];
   $title=$_GET['title'];
   $date=$_GET['date'];
   $i=3;
   while(isset($_GET["expense$i"])){
   $i++;
   }
//    echo $i;
   $totalperson=$i-1;
   $perpersoncost=$expense/$totalperson;

 
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
    body {
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
                        <a class="nav-link" href="#"><i class="fa fa-address-card mr-2" aria-hidden="true"></i>About
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="#"><i class="fa fa-sign-in mr-2" aria-hidden="true"></i>Login</a>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="#"><i class="fa fa-user-plus mr-2" aria-hidden="true"></i>SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <div class="form-group">
            You are?
            <select class="bg-light" id="query" name="query">
                <option><?php echo $paidby;    ?></option>

            </select>
            <button type="submit" data-toggle="modal" data-target="#expenseModal" class="btn btn-outline-info ml-4"
                id="addBtn">Add Expence</button>
        </div>



    </div>


    <!-- Add expensive modal -->
    <div class="modal fade" id="expenseModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Coming Soon (Kittyctrl 1.0.0)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <div class="container my-4 bg-light ">
        <table class="table ">
            <tbody>
                <tr>

                <tr>
                    <td class="f-left">The event cost the group</td>
                    <td class="f-right"><?php echo $expense;    ?></td>
                </tr>
                <tr>
                <?php
                        if($_GET["expense1"]!=""){
                            ?>
                            <td class="f-left">It cost you</td>
                            <td class="f-right"><?php echo $_GET["expense1"];    ?></td>
                            <?php
                        }else{

                 ?>
                    <td class="f-left">It cost you</td>
                    <td class="f-right"><?php echo $expense/$totalperson;    ?></td>
                    <?php 
                        }
                    ?>
                </tr>
                <tr>
                    <td class="f-left">You've Paid</td>
                    <td class="f-right"><?php echo $expense;    ?></td>
                </tr>
                <tr>
                <?php
                if($_GET["expense1"]!=""){
                    ?>
                     <td class="f-left">You are Owed</td>
                    <td class="f-right"><?php echo $expense-$_GET["expense1"];    ?></td>
                    <?php
                }else{
                 ?>
                    <td class="f-left">You are Owed</td>
                    <td class="f-right"><?php echo $expense-$perpersoncost;    ?></td>
                    <?php
                }
                ?>
                </tr>




                </tr>
            </tbody>
        </table>
        <div class="table-responsive-sm">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Paid By</th>
                        <th scope="col">Expense</th>
                        <th scope="col">Cost</th>
                        <th scope="col">Owed</th>
                    </tr>
                </thead>
                <hr>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $paidby;  ?></th>
                       
                        <td><?php echo $expense;  ?></td>
                        <td><?php if($_GET["expense1"]!=""){ echo $_GET["expense1"]; }else{
                            echo $expense/$totalperson;
                        } ?>  </td>
                        <td><?php if($_GET["expense1"]!=""){ echo $expense-$_GET["expense1"]; }else{
                            echo $expense-$perpersoncost;
                        } ?> </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
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
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>