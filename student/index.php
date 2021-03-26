<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>APTECH</title>
    <link rel="stylesheet" href="../css/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style1.css">
    <script src="../css/Bootstrap/js/jquery-3.5.1.js"></script>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img  src="../img/aptechlogo.jpg" style="height: 3rem;" class=" bordaraduis card-img-top mt-2 mb-3 text-center">


        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link display-5" href="#"> <span class="text-primary text-uppercase font-weight-bolder">H</span>ome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" >Contact Us</a>
                </li>
            </ul>

        </div>
    </nav>


</div>

<div class="container mt-5">

    <div class="row">

     <div class="col-lg-8 col-md-8">

    <h1 class="display-3 mb-5 font-weight-bolder"><span class="text-primary">Stu</span>dent Registry App</h1>

    <h3 class="display-5 mt-2">Welcome Champion </h3>

    <h6 class="mt-5">
        To aptech, where you learn life saving skills to chase poverty
        away<br> from you linage and help your village people.
    </h6>

    <a href="#" data-target="#exampleModalScrollable" data-toggle="modal" class="btn btn-primary btn-lg active mt-5" role="button" aria-pressed="true">Sign In</a>
     </div>

        <div class="col-lg-4 col-md-4 mt-5">

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>

            <span id="studentId suggestions" class="text-uppercase text-info" style="display:none" > student id suggestions</span>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">
                        <img  src="../img/aptechlogo.jpg" style="width: 5rem; height: 2rem;" class=" bordaraduis card-img-top mt-2 mb-3 text-center">
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="process.php" method="POST" name="login_form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Student ID</label>
                            <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Please do not share your Student Id with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" required>
                            <span class="text-warning"><a href="#">Forgot Password?</a></span>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="check" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">Proceed to Profile</label>
                        </div>
                       <input type="submit" name="submit" class="btn btn-primary" value="Sign In">
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary">Login</button> -->
                </div>
            </div>
        </div>
    </div>


</div>

</body>
<script src="../css/Bootstrap/js/jquery-3.5.1.min.js"></script>
<script src="../css/Bootstrap/js/bootstrap.min.js"></script>

<?php
    if (isset($_GET['err'])) {
        $err = $_GET['err'];
        echo "<script>
            alert('$err')
        </script>";
    }
?>
</html>
