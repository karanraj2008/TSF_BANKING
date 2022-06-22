<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="bank_style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

        <style>
            .just_into{
                background-color: #ff5e14 ;
                height: 100vh;
                display: flex;
                padding-top: 10%;
                justify-content:center;
                /* flex-direction:column; */
            }
            .just_into div h1{
                color:white;
                text-decoration:underline;
            }
            .just_into div ol li{
                color:white;
                font-size: 2vh;
                
            }
            .just_into div h2 a i{
                font-size: 10vh;

            }

            @media only screen and (max-width: 450px){
                .div1,
                .div2,
                .div3 {
                    height: 200px;
                    width: 250px;
                    
                }
                .logo1 img, .logo2 img, .logo3 img{
                    height: 100px;
                    width:100px
                }
                .btn1 a button,
                .btn2 a button,
                .btn3 a button {
                    
                    border: none;
                    font-size: medium;
                    padding: 8px 8px;
                    display: inline-block;
                    cursor: pointer;
                    align-items: center;
                    text-decoration: none;
                }

            }
footer{
float:bottom;
overflow: hidden;
position: fixed;
bottom:0;
width:100%;
background-color: #fff;
overflow: hidden;
}
</style>
</head>


<body onload="load()">

    <!-- preloader -->
    <div id="loading"></div>

    <?php
        include'for_nav.php';
    ?>

   
    
    <div id="container_main" style="height:2vh;">
            

    <div class="container_main">
        <div class="text">
                   <h2 id="welcome">Welcome
                    <br>
                    to the Basic Virtual Bank
                    <br>
                    <small>banking with love</small></h2> 
        </div>

        <div class="img">
            <img src="bank logo.png" alt="bank">
        </div>
    </div>

    <div class="feature">
        <div class="div1">
            <div class="logo1"><img src="user logo.png" alt="user" height="250" width="250"></div>
            <div class="btn1">
                <a href="createuser.php"><button>Create New User</button></a>
            </div>
        </div>
        <div class="div2">
            <div class="logo2">
                <img src="transaction logo.png" alt="transaction" height="250" width="250">
            </div>
            <div class="btn2">
                <a href="transaction.php"><button>Make Transaction</button></a>
            </div>
        </div>
        <div class="div3">
            <div class="logo3">
                <img src="history logo.png" alt="history" height="250" width="250">
            </div>
            <div class="btn3">
                <a href="history.php"><button>Check History</button></a>
            </div>
        </div>
    </div>




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




    </div>


    <script>
        var preloader=document.getElementById('loading');

        function load(){
            setTimeout(loaded, 1000); //3 sec ka sleep    
        }
        function loaded(){
            preloader.style.display='none';
        }
    </script>
</body>

</html>
