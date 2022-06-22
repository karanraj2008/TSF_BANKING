<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

    <link rel="stylesheet" href="bank_style.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <style>
        .table_grp {
            width: 90%;
            overflow-x: auto;
        }

        .main_trans {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px 10px 10px 10px;
            padding: 10px 5px 5px 5px;
        }
        footer{

            overflow: hidden;
            float:bottom;
            bottom:0;
            position: fixed;
            background-color: #fff;
            width:100%;
            overflow: hidden;
        }
    </style>
</head>

<body onload="load()">

    <?php 
        include 'db_con.php';
         
        $sel="select * from history";
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
                <div style="color: white;background:rgb(15, 115, 112); border: 1px solid green; width:100%;">
                    <h3 style=" color: honeydew; margin: 12px 10px;">Transaction History </h3>
                </div>
            </div>

            <div class="table_grp">
                <table border="1" class="table table-hover">
                    <thead class="table-white">
                        <tr>
                            <th>Tr No.</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Transact Amount(INR)</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($rows=mysqli_fetch_assoc($result)){
                        ?>

                                <tr>
                                    <td><?php echo $rows['id']; ?></td>
                                    <td><?php echo $rows['sender']; ?></td>
                                    <td><?php echo $rows['receiver']; ?></td>
                                    <td><?php echo $rows['amt']; ?></td>
                                    <td><?php echo $rows['time']; ?></td>
                                </tr>

                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="crt_user">
                <a href="transaction.php"><button type="button" class="btn btn-outline-secondary btn-lg">Make a Transaction</button></a>
                <a href="index.php#container_main"><button type="button" class="btn btn-info btn-lg">Home</button></a>
            </div>
        </div>

    </header>

    <footer >
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
