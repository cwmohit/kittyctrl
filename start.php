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
                        <a class="nav-link" href="#"><i class="fa fa-address-card mr-2"
                                aria-hidden="true"></i>About
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="#"><i class="fa fa-sign-in mr-2"
                                aria-hidden="true"></i>Login</a>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="#"><i class="fa fa-user-plus mr-2"
                                aria-hidden="true"></i>SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-lg-4 col-md-4 my-5">
               <h4>Good Example for creating a kitty</h4>
               <p>The party is over and you want to split the cost with your friends.</p>
            </div>
            <div class="col-lg-4 col-md-4 border my-2" >
                <div class="bg-info">
                    <hr>
                    <h3 class="text-center">Create New Kitty</h3>
                    <hr>
                </div>
                <form action="kittydetails.php" method="get">
                    <div class="form-group">
                        <label for="titleInput">Event Name</label>
                        <input type="text" class="form-control" id="titleInput" aria-describedby="titleHelp"
                            placeholder="Enter Event (Ex. Trip to goa)" name="EventName" required>

                    </div>
                    <div class="form-group">
                        <label for="query">Home Currency</label>
                        <select class="form-control" id="query" name="HomeCurrency">
                            <option>INR-INDIAN Rupees</option>
                            <option>USD-US Dollar</option>
                            <option>AUD-AUSTRALIAN Dollar</option>
                            <option>LKR-Shri lankan Rupees</option>
                            <option>NZD-New Zealand Dollar</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">You</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jack" name="Name" required>
                    </div>
                    <div class="form-group">
                       
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" name="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Person 2</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jill" name="Person2" required>
                    </div>
                    <div id="New" class="form-group">
                     
                    </div>
                    <button type="submit"  class="btn btn-outline-info mb-2 " id="addBtn"> + Add New Person</button>

                    <button type="submit" class="btn btn-outline-info btn-block">Next</button>

                </form>
            </div>
            <div class="col-lg-4 col-md-4">

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
    <script src="script.js"></script>
</body>

</html>