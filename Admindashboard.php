<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <style>
        #navhover:hover{
            background-color:darkgoldenrod;
            color:white;
            border-radius:30px;
            transition:0.2s;
            
        }
        #active{
            background-color:darkgoldenrod;
            color:white;
            border-radius:30px;
            
        }
        #active:hover{
            background-color:white;
            color:black;
            border-radius:30px;
            transition:0.5s;
        }
        .login{
            background-image:url('./img/bull.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
            width:100%;
            height:600px;
        }
        #btn1{
            border-radius:20px;
            padding-block:10px;


        }
        #btn2{
            background-color:transparent;
            border-radius:30px;
            color:white;
        }
        #btn2:hover{
            background-color:white;
            color:black;
            transition:0.5s;
        }
        #btn1:hover{
            background-color:white;
            color:black;
            transition:0.5s;
        }
        #btn3:hover{
            background-color:white;
            color:black;
            transition:0.5s;

        }
        #btn4:hover{
            background-color:white;
            color:black;
            transition:0.5s;
        }
        #btn4{
            border-radius:30px;
        }
        #btn5{
            background-color:purple;
            color:white;

        }
        input{
            border-radius:25px;
            margin:5px;
        }
    </style>
</head>
<body>
<!-- website header -->

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

        <a href="index.html">
            <img src="img/logo2.png" alt="logo" width="250%" height="60px">
        </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- navbar links -->

  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="#started" id="active">Get started</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html" id="navhover">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html" id="navhover">About</a>
      </li>
      <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navhover" data-toggle="dropdown">
        Services
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="market.html">Market</a>
        <a class="dropdown-item" href="investment.html">Investments</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="Contact.html" id="navhover">Contact</a>
      </li>
      <li class="nav-item">
        <a href="Logout.php" class="sidebar-link text-white">
           <i class="fa fa-sign-out mx-1"></i>Logout
        </a>
      </li>    
    </ul>
  </div>  
</nav>


<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500 Index"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100 Cash CFD"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "isTransparent": false,
  "largeChartUrl": "index.html",
  "displayMode": "regular",
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

   
    <!-- sidebar navbar -->

    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
               
                <div class="sidebar-logo">
                    <a href="index.html"><img src="img/logo2.png" alt=""></a>
                    <div class="user">
                        <p class="bold">Admin Dahsboard</p>
                    </div>
                </div>
                <button class="toggle-btn" type="button">
                    <i class='bx bxs-chevrons-left'></i>
                </button>
            </div>
           
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                       <i class='bx bxs-dashboard'></i>
                <span class="nav-item">Dahsboard</span>
                    </a>
                </li>
                <!-- drop -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class='bx bx-money-withdraw'></i>
                        <span class="nav-item">Transaction</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Deposites</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Withdrawals</a>
                        </li>
                        <li class="sidebar-item"></li>
                            <a href="#" class="sidebar-link">Payouts</a>
                        </li>
                    </ul>
                </li>
                <!-- drop -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                        <i class='bx bxs-user'></i>
                        <span class="nav-item">User</span>
                    </a>
                    <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Client</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Team</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class='bx bxs-bar-chart-alt-2'></i>
                       <span class="nav-item">Investment</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class='bx bxs-plug'></i>
                       <span class="nav-item">Payment</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class='bx bxs-badge-check'></i>
                        <span class="nav-item">Tickets</span>
                    </a>
                </li>

                <!-- drop -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi-one" aria-expanded="false" aria-controls="multi-one">
                        <i class='bx bxs-cog'></i>
                        <span class="nav-item">Settings</span>
                    </a>
                    <ul id="multi-one" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">setting1</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">setteing2</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">setteing3</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="Logout.php" class="sidebar-link text-white" style="margin-left:-32px;">
                       <i class="fa fa-sign-out mx-1"></i>Logout
                    </a>
                </li>

                </ul>
                            <!-- sidebar footer -->

            <div>
                <img src="img/will.jpg" alt="" id="log">
                <ul>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link" style="margin-left:-54px;">
                            <span class="nav-item">Profile</span>
                           <p>Admin</p>
                        </a>
                    </li>
              
                </ul>

            </div>
            <div class="sidebar-footer d-flex">
                <a href="#" class="sidebar-link text-white">
                    <i class='bx bx-log-out icon'></i>
                    
                </a>
            </div>
        </aside>
        <!-- END OF SIDEBAR -->


        <div class="main p-3">
            

            <div class="container-fluid bg-white">      
                  <div class="">

                        <h2 class="text-center mt-3">List of Registered Users</h2>

                        <div class="">
                             <a href="signup.php" class="btn btn-warning text-white mb-2 ml-auto">Add User</a>
                        </div>
                  </div>
                  
                  <p></p>
                  <p></p>
                  <p></p>

                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-12">
                      <table class="table table-striped table-bordered ">
        
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
               <?php

                    include ("Dbcon.php");

                    // SQL query to fetch data from the db

                    $sql = "SELECT * FROM  users";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0)
                        {

                            while ($row = mysqli_fetch_assoc($result)) {
                            
                        ?>

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td>
                            <a href="Edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning text-white">Edit</a>
                            <a href="Delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>

                <?php

                     }

                    } else {
                      echo "0 results";
                    }
                    mysqli_close($conn);


                     ?>
            </tbody>

         </table>
                </div>
           </div> 

        </div>
        
    </div>


































    <script src="script.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/jquery.slim.min.js"></script>

</body>
</html>