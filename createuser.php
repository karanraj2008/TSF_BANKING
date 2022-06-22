<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
    <link rel="stylesheet" href="bank_style.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<?php
    $write=FALSE;
    include 'db_con.php';

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $balance=$_POST['balance'];
        $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result=mysqli_query($con,$sql);
        if($result){
            $write=true;
        }
     }
?>

<body onload="load()">
    <!-- preloader -->
    <div id="loading"></div>

    <header id="create_user_header">
        <?php
            include'for_nav.php';
        ?>

        <br><br>

        <div class="main_form">

            <?php 
                if ($write==TRUE) {
                    echo "<h6 align='center' style='color:green;' class='mb-3'>New User Added Successfully!!<br> <span style='color:red;'>Redirecting..</span></h6>";
                    echo "<script>
                            setTimeout(redirect, 5000);
                            
                            function redirect(){
                                window.location='transaction.php';
                            }
                        </script>";
                }

            ?>

            <div class="create_title text-center ">
                <h2>Create New User</h2>
            </div>


            <br>

            <div class="container create_form">

                <form method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingName" placeholder="name"  name="name" required>
                        <label for="floatingName">Name*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                            required>
                        <label for="floatingInput">Email address*</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingBalance" name="balance" placeholder="balance"
                            max="100000" min="0" required>
                        <label for="floatingBalance">Add Balance*</label>
                    </div> <br>
                    <div class="btn_grp">
                        <div>
                            <input type="submit" name="submit" value="Create User" class="btn btn-primary btn-lg">
                        </div>
                        <div>
                            <input type="reset" value="Reset" name="reset" class="btn btn-outline-danger btn-lg">
                        </div>
                        <div>
                            <a href="index.php#container_main"><button class="btn btn-info btn-lg" type="button">Back to Home</button></a>
                        </div>
                    </div>
                </form>
                
            </div> <br>

        </div>

        

    </header>

    


    <footer  >
   
   <div class="row text-center">
     <div class="col-md-6">
       <p><a target="_blank" class="The Sparks Foundation" href="https://www.linkedin.com/company/the-sparks-foundation/mycompany/"><img style="width:40px;" src="https://www.thesparksfoundationsingapore.org/images/logo_small.png"> THE SPARKS FOUNDATION</a> </p>

     </div>
     <div class="col-md-6 text-center">
       <ul class="social-icons">
         Connect :
           <a target="_blank" class="LinkedIn" href="https://www.linkedin.com/in/karan-raj-72a4951b6/"> KARAN RAJ <i class="fab fa-linkedin fa-1.5x"></i></a>
           <a target="_blank" class="GitHub" href="https://github.com/karanraj2008"> <i class="fab fa-github fa-1.5x"></i></a>
           <a target="_blank" class="Youtube" href="https://www.youtube.com/channel/UCtxT_QU7Ghf_2IQrPlPFwRQ/featured"> <i class="fab fa-youtube fa-1.5x"></i></a>
           </li>

       </ul>
     </div>
   </div>
 </footer>

    



    <script>
        var preloader = document.getElementById('loading');

        function load() {
            setTimeout(loaded, 1000); //3 sec ka sleep    
        }
        function loaded() {
            preloader.style.display = 'none';
        }
    </script>
</body>

</html>
