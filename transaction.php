<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Transaction</title>

    <link rel="stylesheet" href="bank_style.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


    <style>
        .table_grp{
            width:90%;
            overflow-x: auto;
        }
        .main_trans{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px 10px 10px 10px;
            padding: 10px 5px 5px 5px;
        }
        .trsct_btn{
            background:white;
            border:1px solid black;
            font-size: large;
            padding: 5px 10px;
            display: inline-block;
            cursor: pointer;
            align-items: center;
            font-weight:500;
        }
        .passbook_btn{
            background:#202020;
            color: white;
            border:1px solid black;
            font-size: large;
            padding: 5px 10px;
            display: inline-block;
            cursor: pointer;
            align-items: center;
            font-weight:500;
        }
        .trsct_btn:hover{
            background:#202020;
            color:white;
            transition: all .3s ease-in-out;
        }
        .passbook_btn:hover{
            background:white;
            color:#202020;
            transition: all .3s ease-in-out;
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

    <?php 
        include 'db_con.php';
         
        $sel="select * from users";
        $result=mysqli_query($con, $sel);

    ?>
    
    <!-- preloader -->
    <div id="loading"></div>

    <header>
        <?php
            include'for_nav.php';
        ?>

        <br><br>

        <div class="main_trans">
            <div align="center">
                <div   style="color: white; background:rgb(15, 115, 112); border: 1px solid green; width:100%;">
                    <h3 style=" color: honeydew; margin: 12px 10px;"> Available User in Our Bank</h3>
                </div>
            </div>
        
            <div class="table_grp">
                <table border="1" class="table table-hover">
                    <thead class="table-white" >
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email ID</th>
                            <th>Balance</th>
                            <th>Action</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($rs=mysqli_fetch_assoc($result)){

                        ?>

                            <tr>
                                <td><?php echo $rs['id']?></td>
                                <td><?php echo $rs['name']?></td>
                                <td><?php echo $rs['email']?></td>
                                <td><?php echo $rs['balance']?></td>
                                <td><a href="transact_p.php?id=<?php echo $rs['id'] ?>"><button class="trsct_btn" type="button">Transact</button></a></td>
                                <td><a href="passbook.php?id=<?php echo $rs['id'] ?>"><button class="passbook_btn" type="button">PassBook</button></a></td>
                            </tr>                                

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="crt_user">
                <a href="createuser.php"><button type="button" class="btn btn-outline-secondary btn-lg">Create a New user</button></a>
                <a href="index.php#container_main"><button type="button" class="btn btn-info btn-lg">Home</button></a>
            </div>
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
