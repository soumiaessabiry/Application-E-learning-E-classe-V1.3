
       <?php
    //connextion db 
        include ("connexion.php");
        include ("lesfonctions.php");
        
        if (isset($_POST['submit'])) {

            $email=validation($_POST['email']);
            $password=md5($_POST['password']);//hach

            $query="SELECT * FROM `comptes` WHERE email='$email' AND  password='$password'";
            $user = mysqli_query($conn,$query) ;
            if (mysqli_num_rows($user)  != 0 ) {

                session_start();
                 $_SESSION['email']=$email;
                header("location: indexdach.php");

            }
            else{
                echo"invalid email or password";
            }

        }
       ?>
<!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
            <script src="styleboot/js/bootstrap.min.js"></script>
            <title>Sign in</title>
        </head>
    <body>
        <div class="container mt-5 ">
            <form class=" bg-white p-2 " method="POST" action="comptes.php">
                        <h1 class=" p-4"><span  class="border-start border-info border-5 ps-2 fw-bolder ms-3">E-classe</span> </h1>
                    <div  class="text-center font-weight-normal">  
                         <h2 class=""> SIGN IN</h2>
                        <p  class="text-muted ms-3 mx-3 ">Entrer your credentials to access your account</p>
                    </div>
                    <div class="m-4 fw-bold">
                            <label  class="text-muted mb-2 fw-bold">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg  " placeholder="Entrer your email" required >
                            <label  class="text-muted mb-2 mt-2">Password</label>
                            <input type="password" name="password" class="form-control  form-control-lg  " placeholder="Entrer your password "  required >
                        <div class="d-grid gap-2 mt-4">
                            <input type="submit"  class="btn btn-info btn-lg" name="submit" value="SIGN IN">
                        </div>
                    </div>
                    <div class=" mt-4 mb-5 forgot">
                        <P class="d-flex justify-content-center " >Forgot your password? <span class="fw-bold"><a href="#">Reset Password</a></span></P>
                    </div>
            </form>
         </div>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>











































  