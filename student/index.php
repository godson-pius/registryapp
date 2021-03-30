
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>APTECH</title>
    <link rel="stylesheet" href="../css/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style1.css">
    <script src="../css/Bootstrap/js/jquery-3.5.1.js"></script>
    
<?php
error_reporting(0);
require_once("config.php");
if (isset($_POST['searchbtn'])){
    $search=$_POST['search'];
$query="SELECT * FROM students WHERE Student_id='$search' || Email_address='$search' || First_name='$search' || Last_name='$search'";
$result=mysqli_query($link,$query);
$name="sorry! this user does not exist in our database";
 
while($row=mysqli_fetch_array($result)){
    if($row==TRUE){
        $name= $row['First_name']." ".$row['Last_name'];
        $pic= $row['Profile_pic'];
        $stud= $row['Student_id'];
        
        if($pic==NULL){
            echo"<style>";
            echo"#bag{background-image:url(../images/2003329.jpg)}";
            echo"</style>";
        }
        else{
            echo"<style>";
            echo"#bag{background-image:url($pic)}";
            echo"</style>"; 
            echo"<button style='margin-top:22%; cursor: pointer; position:absolute; margin-left:67%;' class='btn-primary pt-1 pb-1 pl-2 pr-2'>";
        echo"Signin";
        echo"</button>"; 
        echo"<button style='margin-top:22%; position:absolute; margin-left:73%;' class='btn-primary pt-1 pb-1 pl-2 pr-2'>";
        echo"Signout";
        echo"</button>";   
        }
         
    }
    
}
}

?>
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

    <a href="#" data-target="#exampleModalScrollable" data-toggle="modal" onclick="btn();" class="btn btn-primary btn-lg active mt-5"  role="button" aria-pressed="true">Sign In</a>
     </div>

        <div class="col-lg-4 col-md-4 mt-5">

            <form class="form-inline my-2 my-lg-0" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
                <input class="form-control mr-sm-2" type="search" required name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" id="searchb" name="searchbtn" type="submit">Search</button>
            </form>
            
<div class="row mt-2">
<div class="col-6">
            <span id="studentId suggestions" class="text-uppercase text-info" style="" ><?php echo $stud ?><br><?php echo $name ?></span>
</div>
<div class="col-6">
<div id="bag" style="border-radius:50%; width:30%; background-size:cover; height:50px"></div>
</div>
</div>
<button class="btn-primary pl-2 pr-2 pt-1 pb-1" style="display:none" id="searcht">Login</button>
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
                            <label for="exampleInputEmail1">Email/Student ID</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Please do not share your Student Id with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="pass" name="password" class="form-control" required>
                            <span class="text-warning"><a href="#">Forgot Password?</a></span>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" id="check"  name="check" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">Proceed to Profile</label>
                        </div>

                        <input type="submit" id="abled" name="submit" class="btn btn-primary" value="Sign In">
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
<script type="text/javascript">
function btn(){
var password=document.getElementById("pass");
var email=document.getElementById("email");
var check=document.getElementById("check");
if(email==null){
  document.getElementById("abled").disabled=true;
		}
		//validate if password is empty
		else if(password==null){
            document.getElementById("abled").disabled=true;
		}
        else if(check==false){
            document.getElementById("abled").disabled=true;
		}
        else{
            document.getElementById("abled").disabled=false;  
        }
}

</script>
<?php
    if (isset($_GET['err'])) {
        $err = $_GET['err'];
        echo "<script>
            alert('$err')
        </script>";
    }
?>
</html>
