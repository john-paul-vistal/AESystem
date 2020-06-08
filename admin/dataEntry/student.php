<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CTU Student Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../../src/css/w3css.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="icon" href="../../src/icon/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2.all.min.js"></script>

</head>

<body style="background-color:rgb(233, 233, 233)">

    <?php
    $mysqli = new mysqli('localhost','root','','enrollmentsystem') or die(mysqli_error($msqli));
    $result = $mysqli->query("SELECT * FROM student") or die($mysqli->error);
    session_start();
    ?>

        <!-- Navigation Header -->
        <nav class="navbar  fixed-top bg-dark">
            <img class="navar-brand p-1" src="../../src/icon/logo.png" alt="LOGO" style="width: 50px;height:50px;">
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
                    <p id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="text-dark w3-border px-3 dropdown-toggle bg-white w3-round-large" style="margin-right:-10px;margin-top: 2px; margin-bottom: 2px"><img src="../../src/icon/profileiconctu.png" class="w3-circle my-1" style="height:35px;width:35px" alt="Profile"> jvistal</p>
                    <div class="dropdown-menu dropdown-menu-right text-center w3-round-large shadow w3-animate-opacity mr-1" style="width: 350px;margin-top: -20px">
                        <div class=" px-4 py-3 ">
                            <p class="w3-center mt-3 mb-3"><img src="../../src/icon/profileiconctu.png" class="w3-circle my-1" style="height:80px;width:80px" alt="Profile"></p>
                            <h5 class="w3-center email"> <strong>John Paul Vistal</strong></h5>
                            <p class="mb-4 email">Administrator</p>
                            <button type="button " class="btn btn-primary btn-block px-5 py-2 w3-round-xxlarge">Manage Your Account</button>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="container text-center ">
                            <button type="button " class="btn btn-outline-primary btn-block px-3 py-2 w3-round-xxlarge m-2"><i class="fa fa-user-plus"></i> Use Another Acount</button>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button type="button " class="btn btn-primary  px-4 py-2 w3-round-xxlarge mb-2"> <a href="../../index.php"><i class="fa fa-sign-out"></i> Log Out</a></button>
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
        <nav class="w3-sidebar w3-collapse w3-white w3-animate-left shadow-sm" style="z-index:3;width:220px;position: relative;top: 65px;" id="mySidebar"><br>
            <div class="text-center mb-1">
                <a style="position:absolute;right:2px;padding:5px 10px 5px;margin-top:-18px" href="#" onclick="w3_close()" class="w3-hide-large w3-hover-blue" title="close menu">
                    <i class="fa fa-remove w3-large"></i>
                </a>
                <img src="../../src/icon/logomis.png" style="width:130px;margin-top:-3px" class="ml-1">
                <h6><b>CTU</b><br><span style="font-size:13px">Management Information System</span></h6>
            </div>
            <div class="w3-bar-block">
                <a style="text-decoration:none" href="../dashboard.php"><button class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>DASHBOARD</button></a>
                <button class="collapse w3-bar-item w3-button w3-padding" data-toggle="collapse" data-target="#transact"><i class="fa fa-tasks fa-fw w3-margin-right"></i>TRANSACTION</i><i style = "float:right" class = "fa fa-angle-down"></i></button>
                <ul class="sub-menu collapse bg-secondary text-white" id="transact" style="padding-left:15px">
                    <a href="../enrollmentModule/enrollment.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-angle-right fa-fw"></i>ENROLLMENT</a>
                    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-angle-right fa-fw"></i>SCHEDULE</a>
                </ul>
                <button class="collapse w3-bar-item w3-button w3-padding w3-text-teal" data-toggle="collapse" data-target="#dataentry"><i class="fa fa-file-alt fa-fw w3-margin-right"></i>DATA ENTRY</i><i style = "float:right" class = "fa fa-angle-down"></i></button>
                <ul class="sub-menu collapse bg-secondary text-white" id="dataentry" style="padding-left:15px;">
                    <a onclick="w3_close()" class="w3-bar-item w3-button w3-text-light-blue"><i class="fa fa-angle-double-right fa-fw"></i>STUDENT</a>
                    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-angle-right fa-fw"></i>TEACHER</a>
                    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-angle-right fa-fw"></i>SUBJECT</a>
                </ul>
                <button href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gear fa-fw w3-margin-right"></i>MAINTAINANCE</button>
                <button href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fas fa-archive fa-fw w3-margin-right"></i>RECORDS</button>
                <button href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-wrench fa-fw w3-margin-right"></i>SETTINGS</button>
            </div>
        </nav>
        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <div class="w3-main" style="margin-left:215px;">
            <!-- Header Start's Here -->
            <header id="portfolio" class="ml-3">
                <span class="element w3-hover-blue w3-hide-large w3-xlarge w3-text-white bg-dark shadow-lg px-3 pl-4 py-1-sm" style="position: absolute;margin-top:-8px;z-index: 1;margin-left: -20px ;border-radius:0px 90px 90px 0px" onclick="w3_open()"><i class="fa fa-bars"></i></span>
            </header>

            <!-- Body Start's Here -->
<div class="container" style="margin-top:80px;">
    <div class="container w3-white shadow" style="height:100%">
        <div class="container-fluid">
            <br>
            <h3 class="my-2">STUDENT RECORDS</h3>
            <br>

            <div class="mb-2 shadow-sm bg-white">
                <div class="row">

                    <div class="col-sm">
                        <button style="" type="button" class="btn btn-primary my-2 p-2 mt-4" data-title="ADD" data-toggle="modal" data-target="#add"><span class="fa fa-plus"></span> NEW STUDENT</button>
                    </div>

                    <div class="col-sm">
                        <div class="searchbar mr-3">
                            <input onkeyup="search()" id="searchInput" class="search_input" type="text" name="" placeholder="Search...">
                            <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
                        </div>
                    </div>

                </div>

                <div class="mb-2 shadow-sm bg-white">
                    <div id="no-more-tables" style="overflow-y:scroll;">
                        <table id="studentTable" class="w3-table mb-4" style="margin-top:0px;">
                            <thead class="bg-dark text-white ">
                                <tr style="font-size:13px;">
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>AGE</th>
                                    <th>GENDER</th>
                                    <th>BIRTH DATE</th>
                                    <th>CITIZENSHIP</th>
                                    <th>MOBILE NUMBER</th>  
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody style="font-size:15.5px;font-family:Courier New">
                                <?php while($row = $result->fetch_assoc()):?>
                                <tr class = "w3-hover-blue">
                                
                                    <td data-title="ID #"><?php echo $row['id']?></td>
                                    <td data-title="NAME"><?php echo $row['lname']?>,<?php echo $row['fname']?>&nbsp;<?php echo substr($row['mname'],0,1)?>.</td>
                                    <td data-title="AGE"><?php echo $row['age']?></td>
                                    <td data-title="GENDER"><?php echo $row['gender']?></td>
                                    <td data-title="BIRTH DATE"><?php echo $row['birthdate']?></td>
                                    <td data-title="CITIZENSHIP"><?php echo $row['nationality']?></td>
                                    <td  data-title="MOBILE NUMBER"><?php echo $row['number']?></td>
                                    <td style = "display:none"><?php echo $row['fname']?></td>
                                    <td style = "display:none"><?php echo $row['lname']?></td>
                                    <td style = "display:none"><?php echo $row['mname']?></td>
                                    <td style = "display:none"><?php echo $row['lrn']?></td>
                                    <td style = "display:none"><?php echo $row['image']?></td>
                                    <td style = "display:none"><?php echo $row['email']?></td>
                                    <td style = "display:none"><?php echo $row['guardian']?></td>
                                    <td style = "display:none"><?php echo $row['address']?></td>
                                    <td style = "display:none"><?php echo $row['birthplace']?></td>
                                    <td data-title="ACTIONS">
                                        <p class="view inline" data-placement="top" data-toggle="tooltip" title="View"><button class="btn-primary px-1" data-title="Edit" data-toggle="modal" data-target="#view"><span class="fa fa-eye"></span></button></p>
                                        <p type="button" class="inline delete" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn-danger px-1" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash "></i></button></p>
                                    </td>
                                </tr>
                                <?php endwhile;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ************************************************************************************************* -->
<!-- ADD STUDENT -->
    <div class="modal bd-example-modal-lg fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title custom_align" id="Heading">STUDENT DATA ENTRY FORM</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-close" aria-hidden="true"></span></button>
                </div>
                    <form action="studententry.php" method="POST">
                    <div>
                        <div>
                            <hr style="background-color:black;height:1px;margin-top: -1px">
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="text-center">
                                        <img src="../../src/icon/profileiconctu.png" class="avatar img-circle img-thumbnail" style="width:350px;height:300px" alt="avatar">
                                        <label for="imageUpload" class="btn btn-secondary btn-block">Select Image</label>
                                        <input name="imageUpload" id="imageUpload" class="file-upload" style="visibility:hidden;" type="file" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-md" style="margin-left:-5px;">
                                    <hr style=" background-color:black;height:1px;margin-top: -10px">
                                    <div class="text-center " style="width:150px;margin-left: 15px ">
                                        <p class="bg-light " style="margin-top:-30px ">STUDENT INFO</p>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md-4 mb-3">
                                            <span>LRN</span>
                                            <input name="lrn" type="text" class="form-control shadow" placeholder="LRN" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md mb-3">
                                            <span>First Name</span>
                                            <input name="fname" type="text" class="form-control shadow" placeholder="First Name" value="" required>
                                        </div>
                                        <div class="col-md mb-3 ">
                                            <span>Last Name</span>
                                            <input name="lname" type="text" class="form-control shadow" placeholder="Last Name" value="" required>
                                        </div>
                                        <div class="col-md mb-3 ">
                                            <span>Middle Name</span>
                                            <input name="mname" type="text" class="form-control shadow" placeholder="Middle Name" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md-3 mb-3 ">
                                            <span>Age</span>
                                            <input name="age" type="text" class="form-control shadow" placeholder="Age" value="" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <span>Gender</span>
                                            <select name="gender" class="custom-select mr-sm-2 shadow">
                                            <option selected>........</option>
                                            <option value="MALE">MALE</option>
                                            <option value="FEMALE">FEMALE</option>
                                            </select>
                                        </div>
                                        <div class="col-md mb-3 ">
                                            <span>Birth Date</span>
                                            <input name="bdate" type="date" class="form-control shadow" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md mb-3 ">
                                            <span>Address</span>
                                            <input name="address" type="text " class="form-control shadow" placeholder="Address" value="" required>
                                        </div>
                                        <div class="col-md-5 mb-3 ">
                                            <span>Nationality</span>
                                            <input name="nationality" type="text " class="form-control shadow" placeholder="Nationality" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-row ">
                                        <div class="col-md mb-3">
                                            <span>Birth Place</span>
                                            <input name="bplace" type="text " class="form-control shadow" placeholder="Birth place" value="" required>
                                        </div>
                                        <div class="col-md mb-3">
                                            <span>Guardian</span>
                                            <input name="guardian" type="text " class="form-control shadow" placeholder="Guardian" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col-md mb-2">
                                            <span>Email</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend ">
                                                    <div class="input-group-text ">@</div>
                                                </div>
                                                <input name="email" type="email" class="form-control shadow" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md mb-2">
                                            <span>Phone Number</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                                </div>
                                                <input name="number" type="text" class="form-control shadow" placeholder="Mobile Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style=" background-color:black;height:1px;margin-top: 0px">
                    <div class="d-flex justify-content-end mt-3">
                    
                        <button type="submit" name="save" class="btn btn-success btn-lg mx-3 shadow"><span class="fa fa-check "></span> ENROLL</button>
                        <button type="button" class="btn btn-danger btn-lg mx-3 shadow" data-dismiss = "modal"><span class="fa fa-close "></span> CANCEL</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
<!-- ************************************************************************************************* -->

<!-- ************************************************************************************************* -->
<!-- View Details -->
    <div class="modal bd-example-modal-lg fade" id="view" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title custom_align" id="Heading">STUDENT'S INFORMATION</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-close" aria-hidden="true"></span></button>
                        </div>
                    <form action="studententry.php" method="POST">
                                <div>
                                <div>
                                <hr style="background-color:black;height:1px;margin-top: -1px">
                                </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="text-center">
                                                    <img src="../../src/icon/profileiconctu.png" class="viewavatar img-circle img-thumbnail" style="width:350px;height:300px" alt="avatar">
                                                    <label for="updateImage" class="btn btn-secondary btn-block">Update Image</label>
                                                    <input name="imageUpdate" id="updateImage" class="file-upload" style="visibility:hidden;" type="file" accept="image/*">
                                                    <input type="hidden" name="oldimage" id="oldimage">
                                                </div>
                                            </div>
                                            <div class="col-md" style="margin-left:-5px;">
                                                <hr style=" background-color:black;height:1px;margin-top: -10px">
                                                <div class="text-center" style="width:150px;margin-left: 15px ">
                                                    <p class="bg-light" style="margin-top:-30px ">STUDENT INFO</p>
                                                </div>
                                                <div class="form-row ">
                                                <div class="col-md-4 mb-3">
                                                        <span>ID Number</span>
                                                        <input id = "idnumber" name = "idnumber"  type="text" class="form-control shadow" placeholder="ID NUmber" readonly>
                                                    </div>
                                                    <div class="col-md-5 mb-3">
                                                        <span>LRN</span>
                                                        <input id = "lrn" name = "lrn" type="text" class="form-control shadow" placeholder="LRN" required>
                                                    </div>
                                                </div>
                                                <div class="form-row ">
                                                    <div class="col-md mb-3">
                                                        <span>First Name</span>
                                                        <input id = "fname" name="fname" type="text" class="form-control shadow" placeholder="First Name" value="" required>
                                                    </div>
                                                    <div class="col-md mb-3 ">
                                                        <span>Last Name</span>
                                                        <input id = "lname" name="lname" type="text" class="form-control shadow" placeholder="Last Name" value="" required>
                                                    </div>
                                                    <div class="col-md mb-3 ">
                                                        <span>Middle Name</span>
                                                        <input id = "mname" name="mname" type="text" class="form-control shadow" placeholder="Middle Name" value="" required>
                                                    </div>
                                                </div>
                                                <div class="form-row ">
                                                    <div class="col-md-3 mb-3 ">
                                                        <span>Age</span>
                                                        <input id = "age" name="age" type="text" class="form-control shadow" placeholder="Age" value="" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <span>Gender</span>
                                                        <select id = "gender" name="gender" class="custom-select mr-sm-2 shadow">
                                                        <option selected>........</option>
                                                        <option value="MALE">MALE</option>
                                                        <option value="FEMALE">FEMALE</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md mb-3 ">
                                                        <span>Birth Date</span>
                                                        <input id = "birthdate" name="bdate" type="date" class="form-control shadow" value="" required>
                                                    </div>
                                                </div>
                                                <div class="form-row ">
                                                    <div class="col-md mb-3 ">
                                                        <span>Address</span>
                                                        <input id = "address" name="address" type="text " class="form-control shadow" placeholder="Address" value="" required>
                                                    </div>
                                                    <div class="col-md-5 mb-3 ">
                                                        <span>Nationality</span>
                                                        <input id = "nationality" name="nationality" type="text " class="form-control shadow" placeholder="Nationality" value="" required>
                                                    </div>
                                                </div>
                                                <div class="form-row ">
                                                    <div class="col-md mb-3">
                                                        <span>Birth Place</span>
                                                        <input id = "birthplace" name="bplace" type="text " class="form-control shadow" placeholder="Birth place" value="" required>
                                                    </div>
                                                    <div class="col-md mb-3">
                                                        <span>Guardian</span>
                                                        <input id = "guardian" name="guardian" type="text " class="form-control shadow" placeholder="Guardian" value="" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mb-4">
                                                    <div class="col-md mb-2">
                                                        <span>Email</span>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend ">
                                                                <div class="input-group-text ">@</div>
                                                            </div>
                                                            <input id = "email" name="email" type="email" class="form-control shadow" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md mb-2">
                                                        <span>Phone Number</span>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend ">
                                                                <div class="input-group-text "><i class="fa fa-phone"></i></div>
                                                            </div>
                                                            <input id = "number" name="number" type="text " class="form-control shadow" placeholder="Mobile Number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style=" background-color:black;height:1px;margin-top: 0px">
                                <div class="d-flex justify-content-end mt-3">
                                
                                    <button type="submit" name="update" class="btn btn-warning btn-lg mx-3 shadow"><span class="fa fa-check "></span> UPDATE</button>
                                    <button type="button" class="btn btn-danger btn-lg mx-3 shadow" data-dismiss = "modal"><span class="fa fa-close "></span> CANCEL</button>
                                </div>
                            <br>
                  </form>
             </div>
        </div>
    </div>
<!-- ************************************************************************************************* -->

<!-- ************************************************************************************************* -->
<!-- Delete -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog " aria-labelledby="edit " aria-hidden="true ">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h4 class="modal-title custom_align " id="Heading">Delete this entry</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-close" aria-hidden="true"></span></button>
                </div>
                <form action="studententry.php" method="POST">
                    <div class="modal-body ">
                        <input type="hidden" name="deleteId" id="deleteId">
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                    </div>
                    <div class="modal-footer ">
                        <button name="deleteaction" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
<!-- ************************************************************************************************* -->
           <!-- ************************************************ -->
           <!-- use to prompt alert -->
            <div>
                <input id="alert" type="hidden" value="<?php echo $_SESSION['message'] ?>">
                <?php $_SESSION['message'] = "";?>
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

            $(document).ready(function() {
                var readURL = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('.avatar').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $(".file-upload ").on('change', function() {
                    readURL(this);
                });
            });

            $(document).ready(function() {
                var readURL = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('.viewavatar').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $(".file-upload ").on('change', function() {
                    readURL(this);
                });
            });

             $(document).ready(function() {
                    let alert = $('#alert').val();
                    if (alert == 'save') {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'SAVED SUCCESSFULLY!',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    } else if (alert == 'delete') {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'DELETED SUCCESSFULLY!',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    } else if (alert == 'updated') {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'UPDATED SUCCESSFULLY!',
                            showConfirmButton: false,
                            timer: 1000
                        });
                       
                    }
                    
                });


            
                $(document).ready(function() {
                    $('.view').on('click', function() {
                        $tr = $(this).closest('tr');
                        let data = $tr.children("td").map(function() {
                            return $(this).text()
                        }).get();
                        
                        if (data[11] == "") {
                            $('.viewavatar').attr('src', "../../src/uploads/defaulticon.png");
                        } else {
                            $('.viewavatar').attr('src', "../../src/uploads/"+ data[11]);
                        }
                        $('#oldimage').val(data[11]);
                        $('#idnumber').val(data[0]);
                        $('#lrn').val(data[10]);
                        $('#type').val(data[12]);
                        $('#fname').val(data[7]);
                        $('#lname').val(data[8]);
                        $('#mname').val(data[9]);
                        $('#age').val(data[2]);
                        $('#gender').val(data[3]);
                        $('#birthdate').val(data[4]);
                        $('#nationality').val(data[5]);
                        $('#birthplace').val(data[16]);
                        $('#guardian').val(data[14]);
                        $('#email').val(data[13]);
                        $('#number').val(data[6]);
                        $('#address').val(data[15]);
                    });

                });


        function search() {
            var input, filter, table, tr, td0, td1, td2, i, txtValue0, txtValue1, txtValue2;
            filter = $("#searchInput:text").val().toUpperCase();
            table = document.getElementById("studentTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td0 = tr[i].getElementsByTagName("td")[0];
                td1 = tr[i].getElementsByTagName("td")[1];
                if (td0 || td1) {
                    txtValue0 = td0.textContent || td0.innerText;
                    txtValue1 = td1.textContent || td1.innerText;
                    if (txtValue0.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    }else if (txtValue1.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    }else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

                $(document).ready(function() {
                    $('.delete').on('click', function() {
                        $tr = $(this).closest('tr');
                        let data = $tr.children("td ").map(function() {
                            return $(this).text();
                        }).get();
                        $('#deleteId').val(data[0])
                    });

                });
        </script>

</body>

</html>










<!-- <div class="container-fluid ">
                    <hr style="background-color:black;height:1px; margin-top: 10px;">
                    <hr style="background-color:black;height:1px;margin-top: -10px ">
                    <div class="text-center " style="width:150px;margin-left: 15px ">
                        <p class="bg-white " style="margin-top:-30px ">ACADENIC INFO</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2 border border-secondary shadow">
                            <span> <strong>Requirements</strong></span>
                            <div class="ml-4 ">
                                <input type="checkbox" id="item1" name="nso" value="NSO/PSA">
                                <label for="item1"> NSO/PSA</label><br>
                                <input type="checkbox" id="item2" name="card" value="FORM 138">
                                <label for="item2"> FORM 138</label><br>
                                <input type="checkbox" id="item3" name="picture" value="2x2 Picture">
                                <label for="item3"> 2x2 Picture</label><br>
                                <input type="checkbox" id="item4" name="Goodmoral" value="Good Moral">
                                <label for="item4 "> Good Moral</label><br>
                                <input type="checkbox" id="item5" name="ncea" value="NCAE">
                                <label for="item4"> NCAE</label><br>
                                <input type="checkbox" id="item6" name="envelope" value="BROWN ENVELOPE">
                                <label for="item4"> Brown Envelope</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <span>Grade Level</span>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-graduation-cap"></i></div>
                                        </div>
                                        <select name="gradelevel" id="gradelevel" class="custom-select mr-sm-2 shadow" required>
                                            <option selected>........</option>
                                            <option value="7 ">Grade 7</option>
                                            <option value="8 ">Grade 8</option>
                                            <option value="9 ">Grade 9</option>
                                            <option value="10 ">Grade 10</option>
                                            <option value="11 ">Grade 11</option>
                                            <option value="12 ">Grade 12</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 ">
                                    <span>Section(For Junior High School)</span>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-group"></i></div>
                                        </div>
                                        <select disabled name="section" id="section" class="custom-select mr-sm-2 shadow" required>
                                            <option selected>........</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md mb-3 ">
                                    <span>Course/TLE</span>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-medal"></i></div>
                                        </div>
                                        <select name="course" id="course" class="custom-select mr-sm-2 shadow" required>
                                        <option selected>........</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-md mb-3">
                                    <span>Last School Attended</span>
                                    <input name="lstschool" type="text" class="form-control shadow" placeholder="School name" value="" required>
                                </div>
                                <div class="col-md mb-3">
                                    <span>Addres</span>
                                    <input name="schooladdress" type="text" class="form-control shadow" placeholder="School Address" value="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>-->