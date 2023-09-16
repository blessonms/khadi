<html>

<head>
    <script type="text/javascript" src="swal/jquery.min.js"></script>
    <script type="text/javascript" src="swal/bootstrap.min.js"></script>
    <script type="text/javascript" src="swal/sweetalert2@11.js"></script>
</head>

<body>

    <?php
    session_start();
    require("./connect.php");
    $em = $_POST['email'];
    $pass = $_POST['password'];
    $flname = $_POST['companyname'];
    $lname = $_POST['registrationno'];
    $mail = $_POST['gstno'];
    $hn = $_POST['address'];
    $pl = $_POST['district'];
    $pc=$_POST['postalcode'];
    

    $sql = "insert into  login(email,password,usertype)values('$em','$pass','2')";
    $sql1 = "insert into  seller1(email,password,companyname,registrationno,gstno,place,district,postalcode) values('$em','$pass','$flname','$lname','$mail','$hn','$pl','$pc')";
    # echo $sql1;
    # $sql2 = "insert into registration_values('$flname','$mil','$ph','$hn','$pl','pc')";
    if (insert_data($sql) && insert_data($sql1)) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Seller Added Successfully',
                didClose: () => {
                    window.location.replace('../seller.html');
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
                    window.location.replace('../seller.html');
                }
            });
        </script>



    <?php
    }

    ?>
</body>

</html>