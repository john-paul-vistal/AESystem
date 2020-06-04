<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CTU Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../src/css/w3css.css">
    <link rel="stylesheet" href="../src/css/main.css">
    <link rel="icon" href="../src/icon/logo.png">

</head>

<body style="background-color:rgb(233, 233, 233)">
    <!-- Navigation Header -->
    
    <nav class="navbar  fixed-top bg-dark">
    <img class="navar-brand p-1" src="../src/icon/logo.png" alt="LOGO" style="width: 50px;height:50px;">
        <form class="form-inline">
            <div class="nav-item" style="margin-top:-5px; margin-right: 25px;">
                <i class="fa fa-envelope text-white w3-xlarge"></i>
                <span class="badge badge-success" style="position:absolute;margin-left:-10px;">5</span>
            </div>

            <div class="nav-item" style="margin-top:-5px; margin-right: 25px;">
                <i class="fa fa-bell text-white w3-xlarge"></i>
                <span class="badge badge-success" style="position: absolute;margin-left: -10px;">10</span>
            </div>

            <div class="mr-3">
                <p id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="text-dark w3-border px-3 dropdown-toggle bg-white w3-round-large" style="margin-right:-10px;margin-top: 2px; margin-bottom: 2px"><img src="../src/icon/profileiconctu.png" class="w3-circle my-1" style="height:35px;width:35px" alt="Profile"> jvistal</p>
                <div class="dropdown-menu dropdown-menu-right text-center w3-round-large shadow w3-animate-opacity mr-1" style="width: 350px;margin-top: -20px">
                    <div class=" px-4 py-3 ">
                        <p class="w3-center mt-3 mb-3"><img src="../src/icon/profileiconctu.png" class="w3-circle my-1" style="height:80px;width:80px" alt="Profile"></p>
                        <h5 class="w3-center email"> <strong>John Paul Vistal</strong></h5>
                        <p class="mb-4 email">Administrator</p>
                        <button type="button " class="btn btn-primary btn-block px-5 py-2 w3-round-xxlarge">Manage Your Account</button>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="container text-center ">
                        <button type="button " class="btn btn-outline-primary btn-block px-3 py-2 w3-round-xxlarge m-2"><i class="fa fa-user-plus"></i> Use Another Acount</button>
                    </div>
                    <div class="dropdown-divider"></div>
                    <button type="button " class="btn btn-primary  px-4 py-2 w3-round-xxlarge mb-2"> <a href="../index.php"><i class="fa fa-sign-out"></i> Log Out</a></button>
                    <div class="dropdown-divider"></div>
                    <ul class="text-left ml-3">
                        <li class="footer">Ask for Help?</li>
                        <li class="footer mx-3">|</li>
                        <li class="footer">Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </form>
    </nav>
    <!-- Side Navigation -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left shadow-sm" style="z-index:3;width:180px;position: relative;top: 65px;" id="mySidebar"><br>
            <div class="text-center mb-1">
                <a style = "position:absolute;right:2px;padding:5px 10px 5px;margin-top:-18px" href="#" onclick="w3_close()" class="w3-hide-large w3-hover-blue" title="close menu">
                    <i class="fa fa-remove w3-large"></i>
                </a>
                <img src="../src/icon/logomis.png" style="width:130px;margin-top:-3px" class="ml-1">
                <h6><b>CTU</b><br><span style="font-size:13px">Management Information System</span></h6>
        </div>
        <div class="w3-bar-block">
            <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>DASHBOARD</a>
            <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-group fa-fw w3-margin-right"></i>WORKERS</a>
            <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gear fa-fw w3-margin-right"></i>SETTINGS</a>
        </div>
    </nav>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <div class="w3-main" style="margin-left:175px;">
        <!-- Header Start's Here -->
        <header id="portfolio" class="ml-3">
            <span class="element w3-hover-blue w3-hide-large w3-xlarge w3-text-white bg-dark shadow-lg px-3 pl-4 py-1-sm" style="position: absolute;margin-top:-8px;z-index: 1;margin-left: -20px ;border-radius:0px 90px 90px 0px" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        </header>

        <!-- Body Start's Here -->
        <div class="container" style="margin-top:80px;">
            <div class="container w3-white shadow" style="height:810px;background:url(../src/icon/logomis.png);background-repeat:no-repeat;background-position:center;background-size:700px">
                <div class="container-fluid">
                    <br>
                    <h3 class="my-2"><i class="fa fa-bars"></i> MAIN MENU</h3>
                    <br>
                </div>
                <div class="row">
                    <div class="col-sm w3-animate-zoom mb-2">
                        <div class="card bg-info text-center">
                            <button class="btn btn-info m-2 shadow-lg">
                                    <a href="enrollment/enrollmentform.php">
                                    <div class="card-body">
                                    <i style = "font-size: 120px;"class = "fas fa-file-alt text-dark"></i>
                                    </div>
                                        <h5 class="card-footer">ENROLLMENT FORM</h5>
                                    </a>   
                            </button>

                        </div>
                    </div>
                    <div class="col-sm w3-animate-zoom mb-2">
                        <div class="card bg-warning text-center">
                            <button class="btn btn-warning m-2 shadow-lg">
                                            <div class="card-body">
                                                <i style = "font-size: 120px;"class = "fa fa-line-chart text-dark"></i>
                                            </div>
                                            <h5 class="card-footer">ENROLLMENT RECORDS</h5>
                                    </button>

                        </div>
                    </div>
                    <div class="col-sm w3-animate-zoom">
                        <div class="card bg-primary text-center">
                            <button class="btn btn-primary m-2 shadow-lg">
                                            <div class="card-body">
                                                    <i style = "font-size: 120px;"class = "fas fa-hand-holding-usd text-dark"></i>
                                            </div>
                                            <h5 class="card-footer">PAYMENT</h5>
                                    </button>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm w3-animate-zoom mb-2">
                        <div class="card bg-secondary text-center">
                            <button class="btn btn-secondary m-2 shadow-lg">
                                    <div class="card-body">
                                    <i style = "font-size: 120px;"class = "fa fa-question text-dark"></i>
                                    </div>
                                            <h5 class="card-footer">COMING SOON</h5>       
                            </button>

                        </div>
                    </div>
                    <div class="col-sm w3-animate-zoom mb-2">
                        <div class="card bg-secondary text-center">
                            <button class="btn btn-secondary m-2 shadow-lg">
                                            <div class="card-body">
                                                <i style = "font-size: 120px;"class = "fa fa-question text-dark"></i>
                                            </div>
                                            <h5 class="card-footer">COMING SOON</h5>
                             </button>
                        </div>
                    </div>
                    <div class="col-sm w3-animate-zoom mb-2">
                        <div class="card bg-secondary text-center">
                            <button class="btn btn-secondary m-2 shadow-lg">
                                            <div class="card-body">
                                                <i style = "font-size: 120px;"class = "fa fa-question text-dark"></i>
                                            </div>
                                            <h5 class="card-footer">COMING SOON</h5>
                             </button>
                        </div>
                    </div>  
                </div>
            </div>
        </div>



        <script>
            // Script to open and close sidebar
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }



            $(document).ready(function() {
                $("[data-toggle=tooltip]").tooltip();
            });
        </script>

</body>

</html>