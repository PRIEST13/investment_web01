<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdashbord</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .crypto-card {
            width: 350px;
            background-image:url(./img/btc4.jpg);
            background-repeat:no-repeat;
            background-size: cover;
            filter: blur(0.3px);
            border-radius: 15px;
            padding: 20px;
            color: white;
            position: relative;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            font-family: 'Arial', sans-serif;
            margin: 10px;
        }

        .eth-card {
            background-image:url(./img/usdt.webp);
            background-repeat:no-repeat;
            background-size: cover;
            filter: blur(0.3px);
        }

        .crypto-card .card-chip {
            width: 50px;
            height: 40px;
            background-image:url(./img/cardchip.png);
            background-repeat:no-repeat;
            background-size:100% 100%;
            border-radius: 5px;
        }

        .crypto-card .card-number {
            letter-spacing: 2px;
            margin: 20px 0;
        }

        .crypto-card .card-holder,
        .crypto-card .card-expiry {
            font-size: 0.9rem;
            margin-top: 15px;
        }

        .crypto-card .card-holder strong {
            display: block;
        }

        .crypto-card .card-logo {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>
<body>


    
   
    <!-- sidebar navbar -->


    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
               
                <div class="sidebar-logo">
                    <a href="index.html"><img src="img/logo2.png" alt=""></a>
                    <div class="user">
                        <p class="bold">User Dahsboard</p>
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
                            <a href="#" class="sidebar-link">Deposite</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Withdrawal</a>
                        </li>
                        <li class="sidebar-item"></li>
                            <a href="#" class="sidebar-link">Transaction History</a>
                        </li>
                    </ul>
                </li>
                <!-- drop ends -->
                </li>
                <li class="sidebar-item">
                    <a href="investment.html" class="sidebar-link">
                        <i class='bx bxs-bar-chart-alt-2'></i>
                       <span class="nav-item">Investment</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="trade.html" class="sidebar-link">
                        <i class='bx bx-candles'></i>
                       <span class="nav-item">Trade</span>
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
                    <a href="Logout.php" class="sidebar-link text-white">
                        Logout

                    </a>
                </li>

            </ul>
                            <!-- sidebar footer -->

            <div>
                <img src="img/will.jpg" alt="" id="log">
                <ul>
                    <li class="sidebar-item"></li>
                    <a href="#" class="sidebar-link">
                       <span class="nav-item">Profile</span>
                    </a>
                </li>

                </ul>

            </div>
            <div class="sidebar-footer d-flex">
                <a href="#" class="sidebar-link">
                    <i class='bx bx-log-out icon'></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <!-- END OF SIDEBAR -->


        


        <div class="main bg-dark">
            <div class="container-fluid">

                <h2>
                   
                </h2>        
                
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-xl-12 col-lg tradingview-widget-container__widget"></div>
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





  <!-- start of atm card -->
              
  <div class="container mt-5">
    <div class="row">
        <!-- BTC Card -->
        <div class="col-md-6 d-flex justify-content-center">
            <div class="crypto-card">
                <div class="card-chip"></div>
                <div class="card-number">
                    <span>1234 5678 9876 5421</span>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card-holder">
                            <strong>Vitalik Buterin</strong>
                            <span><strong>Card Balance</strong>BTC 0.003263</span>
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <div class="card-expiry">
                            <span>12/19</span>
                            <br>
                            <span>Expiry Date</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- ETH Card -->
        <div class="col-md-6 d-flex justify-content-center">
            <div class="crypto-card eth-card">
                <div class="card-chip"></div>
                <div class="card-number">
                    <span>5678 1234 9876 6543</span>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card-holder">
                            <strong>Vitalik Buterin</strong>
                            <span><strong>Card Balance</strong>USDT 0.003263</span>
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <div class="card-expiry">
                            <span>11/23</span>
                            <br>
                            <span>Expiry Date</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- end of atm card -->



<!-- table transaction history -->


<div class=" card mt-5">
    <h4 class="text-center">Transaction History</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Investested</th>
                <th>Maturity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>USD 30.00</td>
                <td>USD 31.50</td>
            </tr>
            <tr>
                <td>USD 100.00</td>
                <td>USD 115.00</td>
            </tr>
        </tbody>
       </table>
   </div>

















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