<?php
    if (isset($_GET['errl'])) {
        $errl = $_GET['errl'];
        echo "<script>
            alert('$errl')
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">

    <title>Login</title>
   <style>

       button{
           width: 45% !important;
           margin-top: 5rem;
           border: none !important;
           outline: none ;
           padding: 0.5rem;
        
       }
       input{
        width: 80%;
        border: none;
        outline: none;
        background-color: transparent;
       }
       .input{

           position: relative;
           overflow: hidden;
            height: 90px;
            width: 50%;
           border-bottom: 1px solid #057cfb5b;
       }
      i{
          padding-right: 0.5rem;
          color: #057cfb;
      } 
      .pic::before{
          content: ''; 
          background:linear-gradient(#833AB4,#C13584);
          opacity: .4;
          width: 100%;
          height: 100%;
          position: absolute;
      }
      .hidden{
          display: none !important;
      }

     
   </style>
</head>
<body>
  
    <section class="container-fluid p-0  " style="height: 100vh; overflow: hidden;">
      <form method="POST" action="Forgot.php" name="form">
        <div class="row">
        <div class="col-md-6 d-flex flex-column email justify-content-center align-items-center" >
                        <h4>Forgot your password?</h4>
                        <h6>We got your back</h6>
                         <div class="number d-flex flex-column justify-content-center align-items-center w-100">
           

            <div class="input"  id="pass">
                        <i class="fas fa-user    "></i>
               
                <input id="in1" type="text" placeholder="Enter Your Email" name="email" class="  my-5">
            </div>
            <div class="input"  id="pas">
                        <i class="fas fa-lock    "></i>
                
                 <input id="in2" type="password"  placeholder="Enter New Password" name="pass" class="  my-5">
            </div>
           
          
            
        </div>
            <div class="email  d-flex flex-column justify-content-center align-items-center w-100">
           

            <div class="input" id="pass2">
                <i class="fas fa-lock    "></i>
<input type="password"  id="in3" placeholder="Confirm New Password" name="con" class="  my-5">
                
            </div>
           <button type="submit" name="submit" class="button btn-primary btnnumber" style=""  id="but">Continue</button>
          
        </div>

      

        </div>
        

        <div class="col-md-6 pic p-0" style="height: 100vh; background: url(../images/priscilla-du-preez-XkKCui44iM0-unsplash.jpg) center/cover; object-fit: cover;">
            
        </div>
    </div>
  </form>
    </section>

<script>
 
 // var in1=document.getElementById('in1');
 // var in2=document.getElementById('in2');
 // var in3=document.getElementById('in3');

 // if(in1!= null && in2!=null){
 //  document.getElementById("but").style.cursor="pointer";
 // }

    // function display(){
    //     document.getElementById("pass2").style.display="none";
    //     document.getElementById("passw").style.display="none";
    //     document.getElementById("pass").style.display="block";
    //     document.getElementById("next2").style.display="block";
    //     document.getElementById("pas").style.display="block";
    // }

</script>
</body>
</html>
