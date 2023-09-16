<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>

<body>

<?php
require("connect.php");
if(isset($_POST["submit"])){

    $mail=$_POST['email'];
    $cname=$_POST['companyname'];
    $rno=$_POST['registrationno'];
    $gn=$_POST['gstno'];
    $p=$_POST['place'];
    $dis=$_POST['district'];
    $pos=$_POST['postalcode'];
    
   
    
    $sql="UPDATE seller1 SET `email`='$mail',`companyname`='$cname',`registrationno`='$rno',gstno='$gn',place='$p',district='$dis',postalcode='$pos' WHERE `email`='$mail';";
    #echo $sql;
if(update_data($sql)) { 
        ?>
        <script>
            Swal.fire({
                icon:'success',
                text: 'Updated Successfully',
                didClose: () => {
                    window.location.replace('../seller/profile.php');
                }
            });
        </script>
    <?php
    } else { ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'unsuccessfully',
                didClose: () => {
                    window.location.replace('../user/profile.php');
                }
            });
        </script>



    <?php
    }
    }
   ?>
</body>
</html>