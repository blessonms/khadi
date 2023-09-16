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

    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];

    $pl=$_POST['mobilenumber'];
    

    
    $sql="UPDATE registration SET `firstname`='$fname',`lastname`='$lname',`email`='$email',mobilenumber= '$pl' WHERE `email`='$email';";
    #echo $sql;
if(update_data($sql)) { 
        ?>
        <script>
            Swal.fire({
                icon:'success',
                text: 'Updated Successfully',
                didClose: () => {
                    window.location.replace('../buyer/profile.php');
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