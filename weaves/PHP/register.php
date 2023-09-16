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

    $flname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mail = $_POST['email'];
    $hn = $_POST['password'];
    $pl = $_POST['mobilenumber'];
    

    $sql = "insert into  login(email,password,usertype)values('$mail','$hn','1')";
    $sql1 = "insert into  registration(firstname,lastname,email,password,mobilenumber) values('$flname','$lname','$mail','$hn','$pl')";
    echo $sql1;
    # $sql2 = "insert into registration_values('$flname','$mil','$ph','$hn','$pl')";
    if (insert_data($sql) && insert_data($sql1)) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Buyer Added Successfully',
                didClose: () => {
                    window.location.replace('../register.html');
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
                    window.location.replace('../register.html');
                }
            });
        </script>



    <?php
    }

    ?>
</body>

</html>