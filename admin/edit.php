<?php
    require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link rel="stylesheet" href="../vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../css/style.css">
<!--Calendar Plugin-->
<link rel="stylesheet" href="../vendor/caleandar-master/css/theme2.css">
<script src="../vendor/caleandar-master/js/caleandar.js"></script>
</head>
<body>
    <div class="row">

    <div class="col-sm-2 nv w-25  col-md-1 box ">
    <h4>Student App</h4>


    <div class="roundcon">
    <a href="dashboard.php" class="dashboard">   <div class="round">
    <i class="fas fa-align-left    "></i>
    </div>
    <p>Dashboard</p></a>
    </div>

    </div>
    <div class=" col-sm-12 col-md-7 col-lg-5 pt-4 px-lg-5 px-md-4">
        <div class="ham ">
            <i class="fas fa-align-justify burger"></i>
        </div>
    <h3>Edit dashboard</h3>
    <p class="pt-3" style="color: #C8D0DE;font-size: small;">Edit Student</p>

    <?php
        if (isset($_GET['id'])) {
            $stud_id = $_GET['id'];
            $result = getStudent($stud_id);
            if (!empty($result)) {
                foreach ($result as $data) {
                    extract($data);
                }
            }
        }

    ?>
    <form action="" method="post">
        <form>
          <fieldset class="form-group">
              <label>First name</label>
            <input type="text" name="fname" class="form-control" placeholder="First name" value="<?= $First_name; ?>">
          </fieldset>

          <fieldset class="form-group">
              <label>Last name</label>
            <input type="text" name="lname" class="form-control" placeholder="Last name" value="<?= $Last_name; ?>">
          </fieldset>

          <fieldset class="form-group">
              <label>Email Address</label>
            <input type="text" name="email" class="form-control" placeholder="Email Address" value="<?= $Email_address; ?>">
          </fieldset>

          <fieldset class="form-group">
              <label>Username</label>
            <input type="text" class="form-control" placeholder="Username" value="<?= $Username; ?>">
          </fieldset>

          <fieldset class="form-group">
              <label>Password</label>
            <input type="text" name="password" class="form-control" placeholder="Password" value="<?= $Password; ?>">
          </fieldset>

          <fieldset class="form-group">
              <label>Date Of Birth</label>
            <input type="date" name="dob" class="form-control" placeholder="Date of Birth" value="<?= $DOB; ?>">
          </fieldset>

          <fieldset class="form-group">
            <input type="submit" class="btn btn-primary form-control" name="submit" value="Edit">
          </fieldset>
        </form>
    </form>


    </div>

</div>


<script src="../js/main.js"></script>

<script>



</script>
</body>
</html>
