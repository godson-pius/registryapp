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
<section class="container-fluid   " style="background-color: #F8FBFF;">
<div class="row">
<div class="col-sm-2 nv w-25  col-md-1    box ">
<h4>Student App</h4>


<div class="roundcon">
<a href="" class="dashboard">   <div class="round">
<i class="fas fa-align-left    "></i>
</div>
<p>Dashboard</p></a>
</div>

<div class="roundcon1">
<a href="#contact" class="contact">  <div class="round1" >
<i class="far fa-user"></i>
</div>
<p>Students</p></a>
</div>

<div class="roundcon1">
<a href="#profile" class="profile"> <div class="round1" >
<i class="far fa-user    "></i>
</div>
<p>Profile</p></a>
</div>

<div class="roundcon1">
<a href="#settings" class="settings">   <div class="round1" >
<i class="fas fa-bell    "></i>

</div>
<p>Records</p></a>
</div>

<div class="roundcon1">
<div class="round1" style="background-image: url(../images/2003329.jpg);
background-size: cover; background-position: center; object-fit: contain;">
</div>
<p class="font-weight-bold">Admin</p>
</div>

<div class="roundcon1 py-2">
<a href="">  <i class="fas fa-power-off  text-danger  pr-2"></i><p style="display: inline;">Logout</p></a>
</div>

</div>
<div class="col-sm-10 main container  row d-md-flex d-md-flex-row" >
<div class=" col-sm-12 col-md-7 col-lg-5 pt-4 px-lg-5 px-md-4">
    <div class="ham " >
        <i class="fas fa-align-justify    burger"></i>
    </div>
<h3>Admin<br>dashboard</h3>
<p class="pt-3" style="color: #C8D0DE;font-size: small;">Today's timeline</p>

<?php
    $result = viewRecords();
    if (!empty($result)) {
        foreach ($result as $record) {
            extract($record);
            $students = getStudent($Student_Id);
            if (!empty($students)) {
                foreach ($students as $stud) { ?>
                    <div class="d-flex flex-column">
                        <div class="border border-primary timeline px-3" style="">
                            <i class="far fa-clock"></i>
                            <p class="m-0 px-3"> <?= ucfirst($stud['First_name']) . " " . ucfirst($stud['Last_name']); ?></p>
                            <p class="m-0 px-3"> <?= $Date; ?></p>
                            <p class="m-0 px-3"> <?= $Day; ?></p>
                            <p class="m-0 px-3"><?= $Signed_in; ?></p>
                        </div>
                    </div>
<?php } } } } ?>


</div>

<div id="dashboard" class=" col-sm-10 col-md-5 w-100  pt-4 pl-sm-5 col-lg-6 px-md-0 px-lg-5">
<div class="reminder  col-lg-9 pt-4">
<h5 class="ml-5 ml-md-3">Hello, Admin</h5>
<p class="ml-5 mt-4 ml-md-3" style="font-size: 0.7rem;">Don't forget to Sign in <br>and Sign Out today</p>
<p class="ml-5 ml-md-3 my-md-2 mt-4 " style="font-size: 0.7rem;">Have a nice day.</p>


<button class="btn btn-primary  reminderbtn btn-sm" ><p class="m-0"><i class="far fa-clock   mr-2 "></i>Set reminder</p>
</button>

<div class="imgcon m-0 p-0">
<div class=" w-50 image" >
<img class=" p-0" src="../images/32dac910ae7965a247667c1a3796b096-removebg-preview.png" alt="">
</div>
</div>

</div>



<div class="signin   mt-4 pt-2">
<p class="ml-5  mt-4" style="font-size: 0.7rem;  color: #C8D0DE;">Take attendance</p>
<div class="signcon">
<a href="">
<div class="sign col-md-12 signcon1">
<div class="circle">
<i class="fas fa-marker    "></i>
</div>
<p class="mt-2"> Sign in</p>
</div>
</a>
<a href="">
<div class="sign signcon2">
<div class="circle">
<i class="fas fa-marker    "></i>

</div>
<p class="mt-2"> Sign out</p>

</div>
</a>
</div>
<div class="attendace  mt-4 pt-2">
<p class="ml-5 mt-4" style="font-size: 0.7rem;  color: #C8D0DE;">Attendance rating</p>
<div class="signco">

<div class="attendancecon col-6">
<div class="round1" >
<i class="fas fa-id-card    "></i>
</div>
<p style="position: absolute; left: 32%; font-size: 0.5rem;" class="pb-0 text-dark" >Classes Attended</p>
<div class="progress mt-3 ml-4 h-25 w-50 d-flex align-items-center" style="border-radius: 2rem !important;">

<div class="progress-bar h-50" role="progressbar" style="width: 85%;border-radius: 2rem;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p class="mt-4 text-primary ml-3" style="font-size:1rem ">85%</p>
</div>
<div class="attendancecon">
<div class="round1" >
<i class="fas fa-id-card    "></i>
</div>
<p style="position: absolute; left: 88%; font-size: 0.5rem;" class="pb-0 text-dark" >Classes Skipped</p>
<div class="progress mt-3 ml-4 h-25 w-50 d-flex align-items-center" style="border-radius: 2rem !important;">

<div class="progress-bar h-50" role="progressbar" style="width: 15%;border-radius: 2rem;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p class="mt-4 text-primary ml-3" style="font-size:1rem ">15%</p>
</div>
</div>

</div>



</div>
</div>
<div id="contact" class=" col-12" style="padding: 2rem 8% !important; display: none;">
<h5>Students</h5>
<div id="caleandar" >
    <?php
        $result = viewStudents();
        if (!empty($result)) {
            foreach ($result as $record) {
                extract($record); ?>
                    <div class="d-flex flex-column">
                        <div class="border border-primary timeline px-3" style="">
                            <i class="far fa-user"></i>
                            <p class="m-0 px-3"> <?= $Student_Id; ?></p>
                            <p class="m-0 px-3"> <?= ucfirst($stud['First_name']) . " " . ucfirst($stud['Last_name']); ?></p>
                            <p class="m-0 px-3"> <?= $Email_address; ?></p>
                            <p class="m-0 px-3"> <?= $Username; ?></p>
                            <p class="m-0 px-3"> <b>(dob)</b> <?= $DOB; ?></p>
                            <p class="m-0 px-3">(date registered) <?= $Date_registered; ?></p>
                            <a href="edit.php?id=<?= $Student_id; ?>" class="m-0 btn btn-primary btn-sm px-3">Edit</a>
                        </div>
                    </div>
    <?php } } ?>
</div>
</div>
<div id="profile" class=" col-6 pt-4" style=" display: none;">
<h5>Profile</h5>
<div class="profilecon">
<div class=" d-flex justify-content-center">
<div class="rounded circle " style="background: url(../images/2003329.jpg) ; background-size: cover; background-position: center; object-fit: cover;position: relative;">
<div class="add p-1 text-white" style="position: absolute;top: 70%; left: 90%; background-color:rgba(0, 132, 219, 0.466);width: 2rem;height: 2rem;display: flex;justify-content: center;align-items: center;border-radius: 50%;border: 1px solid white;">
<i class="fas fa-plus    "></i>
<input type="file" hidden class="hidden">
</div>
</div>
</div>

<div class="inputcon">
<form action="">
<label for=""  class="py-2">Firstname:</label>
<input type="text"  value="Mitchelle" class="form-control">
<label for="" class="py-2">Lastname:</label>
<input type="text"  value="Kelvin" class="form-control">
<label for=""  class="py-2">Email:</label>
<input type="email"  value="Mitchelle@gmail.com" class="form-control">
<button type="submit" class="btn btn-primary my-3">Edit Profile</button>

</form>
</div>

</div>


</div>
<div id="settings" class=" col-6   " style="padding: 0  !important; display: none;overflow: hidden; height: 650px;">
<h5 class="pt-5">Records</h5>

<div>
<p class="mt-5">Showing records</p>
<select name="" id=""  class="form-control w-50 d-inline">
<option value="">Weekly</option>
<option value="">Monthly</option>
<option value="">Yearly</option>

</select>
<button class="btn btn-outline-primary ml-5 viewrecords">View records</button>
<div class="table-responsive  mt-5 da" style="transition: 0.09s ease-in !important; display: inline !;" >
<table class="table  table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
<thead class="">
<tr>
<th>Day</th>
<th>Date</th>
<th>Signed in</th>
<th>Signed out</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>Monday</td>
<td>02 March 2021</td>
<td>08:00am</td>
<td>04:00pm</td>
<th>Present</th>

</tr>

<tr>
<td>Tuesday</td>
<td>03 March 2021</td>
<td>09:30am</td>
<td>4:20pm</td>
<th>Present</th>

</tr>

<tr>
<td>Wednesday</td>
<td>04 March 2021</td>
<td>08:00am</td>
<td>04:00pm</td>
<th>Present</th>

</tr>

<tr>
<td>Thursday</td>
<td>05 March 2021</td>
<td>-</td>
<td>-</td>
<th>Absent</th>

</tr>

<tr>
<td>Friday</td>
<td>06 March 2021</td>
<td>-</td>
<td>-</td>
<th>Absent</th>

</tr>
</tbody>
</table>
<button class="btn btn-primary my-2">Print weekly records</button>

</div>

<div class="table-responsive mt-5 mont" style=" transition: 0.09s ease-in !important;">
<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
<thead class="">
<th>Month</th>
<th>Attendance Rating</th>
<th>Status</th>

</thead>
<tbody>
<tr>
    <td>January</td>
    <td>25%</td>
    <td>Absent</td>
</tr>
    <tr><td>Febuary</td>

        <td>25%</td>
    <td>Absent</td>
</tr>
    <tr><td>March</td>

    <td>25%</td>
    <td>Absent</td>
</tr>
    <tr><td>April</td>

        <td>25%</td>
    <td>Absent</td>
</tr>
    <tr><td>May</td>

    <td>25%</td>
    <td>Absent</td>
</tr>



</tbody>
</table>
<button class="btn btn-primary my-2">Print Monthly records</button>

</div>


<div class="table-responsive mt-5 yea" style=" transition: 0.09s ease-in !important;">
<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
<thead class="">
<th>Year</th>
<th>Attendance Rating</th>
<th>Status</th>

</thead>
<tbody>
<tr>
    <td>2021</td>
    <td>25%</td>
    <td>Absent</td>
</tr>
    <tr><td>2022</td>

        <td>25%</td>
    <td>Absent</td>
</tr>
    <tr><td>2023</td>

    <td>25%</td>
    <td>Absent</td>
</tr>
    <tr><td>2024</td>

        <td>25%</td>
    <td>Absent</td>
</tr>
    <tr><td>2025</td>

    <td>25%</td>
    <td>Absent</td>
</tr>



</tbody>
</table>
<button class="btn btn-primary my-2">Print Yearly records</button>

</div>

</div>


</div>
</div>

</div>


</div>

</section>

<script src="../js/main.js"></script>

<script>



</script>
</body>
</html>
<!--
@media (min-width: 578px)
{
   .main{
       display: block;


   }
   .signin{
       width: 130%;
       height: 25rem;
   }
}
@media (min-width: 768px)
{
    .timeline{
        font-size: 1rem !important;
    }
    .nv{
        padding: 0 3rem;
    }

} -->
