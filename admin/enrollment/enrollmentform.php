<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CTU Enrollment</title>
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

</head>

<body style="background-color:rgb(233, 233, 233)">
    <!-- Navigation Header -->
    <nav class="navbar  fixed-top bg-dark">
    <img class="navar-brand p-1" src="../../src/icon/logo.png" alt="LOGO" style="width: 50px;height:50px;">
        <form class="form-inline">
            <div class="nav-item" style="margin-top:-5px; margin-right: 25px;">
                <i class="fa fa-envelope text-white w3-xlarge"></i>
                <span class="badge badge-success" style="position: absolute;margin-left:-10px;">5</span>
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
                    <button type="button " class="btn btn-primary  px-4 py-2 w3-round-xxlarge mb-2"><i class="fa fa-sign-out"></i> Log Out</button>
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
    <!-- **************************************************************************** -->
    <div class="container-fluid bg-gradient-blue shadow-lg w3-animate-zoom" style="margin-top:60px;">
        <form action="dashprocess.php" method="POST">
            <div>
                <div>
                    <br>
                    <h2>ENROLLMENT FORM</h3>
                        <hr style="background-color:black;height:1px;margin-top: 30px">
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
                                <div class="col-md mb-3">
                                    <span>First Name</span>
                                    <input name="guardian " type="text" class="form-control shadow" placeholder="First Name" value="" required>
                                </div>
                                <div class="col-md mb-3 ">
                                    <span>Last Name</span>
                                    <input name="guardian " type="text" class="form-control shadow" placeholder="Last Name" value="" required>
                                </div>
                                <div class="col-md mb-3 ">
                                    <span>Middle Name</span>
                                    <input name="guardian " type="text" class="form-control shadow" placeholder="Middle Name" value="" required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-md-3 mb-3 ">
                                    <span>Age</span>
                                    <input name="guardian" type="text" class="form-control shadow" placeholder="Age" value="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <span>Gender</span>
                                    <select name="gender" class="custom-select mr-sm-2 shadow">
                                    <option selected>........</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
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
                                    <input name="guardian " type="text " class="form-control shadow" placeholder="Address" value="" required>
                                </div>
                                <div class="col-md-5 mb-3 ">
                                    <span>Nationality</span>
                                    <input name="guardian " type="text " class="form-control shadow" placeholder="Nationality" value="" required>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-md mb-3">
                                    <span>Birth Place</span>
                                    <input name="guardian " type="text " class="form-control shadow" placeholder="Birth place" value="" required>
                                </div>
                                <div class="col-md mb-3">
                                    <span>Guardian</span>
                                    <input name="guardian " type="text " class="form-control shadow" placeholder="Guardian" value="" required>
                                </div>
                            </div>
                            <div class="form-row">
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
                                        <div class="input-group-prepend ">
                                            <div class="input-group-text "><i class="fa fa-phone"></i></div>
                                        </div>
                                        <input name="number" type="text " class="form-control shadow" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="background-color:black;height:1px; margin-top: 10px;">
                    <hr style="background-color:black;height:1px;margin-top: -10px ">
                    <div class="text-center " style="width:150px;margin-left: 15px ">
                        <p class="bg-white " style="margin-top:-30px ">ACADENIC INFO</p>
                    </div>
                </div>
                <div class="container-fluid ">
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
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button type="submit" name="save" class="btn btn-success btn-lg mx-3 shadow"><span class="fa fa-check "></span> ENROLL</button>
                <button type="button" class="btn btn-danger btn-lg mx-3 shadow"><a href="../dashboard.php"><span class="fa fa-close "></span> CANCEL</a></button>
            </div>
            <br>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $("#gradelevel").change(function() {
                var grd = $("#gradelevel").val()
                if (grd == 7) {
                    $("#section").removeAttr("disabled");
                    $("#section option").remove();
                    $('#section').append("<option selected>........</option>");
                    $('#section').append("<option value = 'SAPPHIRE' >SAPPHIRE</option>");
                    $('#section').append("<option value = 'DIAMOND' >DIAMOND</option>");
                    $('#section').append("<option value = 'GOLD' >GOLD</option>");
                    $('#section').append("<option value = 'EMERALD' >EMERALD</option>");
                    $("#course option").remove();
                    $('#course').append("<option selected>........</option>");
                    $('#course').append("<option value = 'ICT CSS' >ICT CSS</option>");
                    $('#course').append("<option value = 'ICT CHS' >ICT CHS</option>");
                    $('#course').append("<option value = 'COOKERY' >COOKERY</option>");
                    $('#course').append("<option value = 'AGRICULTURE' >AGRICULTURE</option>");
                    $('#course').append("<option value = 'DRESSMAKING' >DRESSMAKING</option>");
                } else if (grd == 8) {
                    $("#section").removeAttr("disabled");
                    $("#section option").remove();
                    $('#section').append("<option selected>........</option>");
                    $('#section').append("<option value = 'ALEXANDRITE' >ALEXANDRITE</option>");
                    $('#section').append("<option value = 'AMBER' >AMBER</option>");
                    $('#section').append("<option value = 'AMETHYST' >AMETHYST</option>");
                    $('#section').append("<option value = 'ANDRADITE' >ANDRADITE</option>");
                    $("#course option").remove();
                    $('#course').append("<option selected>........</option>");
                    $('#course').append("<option value = '1' >ICT CSS</option>");
                    $('#course').append("<option value = '1' >ELECTRICITY</option>");
                    $('#course').append("<option value = '1' >COOKERY</option>");
                    $('#course').append("<option value = '1' >AGRICULTURE</option>");
                    $('#course').append("<option value = '1' >DRESSMAKING</option>");
                } else if (grd == 9) {
                    $("#section").removeAttr("disabled");
                    $("#section option").remove();
                    $('#section').append("<option selected>........</option>");
                    $('#section').append("<option value = 'AQUAMARINE' >AQUAMARINE</option>");
                    $('#section').append("<option value = 'BERYL' >BERYL</option>");
                    $('#section').append("<option value = 'AZURITE' >AZURITE</option>");
                    $('#section').append("<option value = 'BORNITE' >BORNITE</option>");
                    $("#course option").remove();
                    $('#course').append("<option selected>........</option>");
                    $('#course').append("<option value = 'ICT CHS' >ICT CHS</option>");
                    $('#course').append("<option value = 'ELECTRICITY' >ELECTRICITY</option>");
                    $('#course').append("<option value = 'COOKERY' >COOKERY</option>");
                    $('#course').append("<option value = 'AGRICULTURE' >AGRICULTURE</option>");
                    $('#course').append("<option value = 'HAIR DRESSING' >HAIR DRESSING</option>");
                } else if (grd == 10) {
                    $("#section").removeAttr("disabled");
                    $("#section option").remove();
                    $('#section').append("<option selected>........</option>");
                    $('#section').append("<option value = 'SILVER' >SILVER</option>");
                    $('#section').append("<option value = 'BRONZE' >BRONZE</option>");
                    $('#section').append("<option value = 'JADE' >JADE</option>");
                    $('#section').append("<option value = 'ZIRCON' >ZIRCON</option>");
                    $("#course option").remove();
                    $('#course').append("<option selected>........</option>");
                    $('#course').append("<option value = 'ICT CSS' >ICT CSS</option>");
                    $('#course').append("<option value = 'ICT CHS' >ICT CHS</option>");
                    $('#course').append("<option value = 'ELECTRICITY' >ELECTRICITY</option>");
                    $('#course').append("<option value = 'COOKERY' >COOKERY</option>");
                    $('#course').append("<option value = 'AGRICULTURE' >AGRICULTURE</option>");
                    $('#course').append("<option value = 'HAIR DRESSING' >HAIR DRESSING</option>");
                } else {
                    $("#section").attr('disabled', true)
                    $("#section option").remove();
                    $('#section').append("<option selected>........</option>");
                    $("#course option").remove();
                    $('#course').append("<option selected>........</option>");
                    $('#course').append("<option value = 'GAS' >GAS</option>");
                    $('#course').append("<option value = 'HE' >HE</option>");
                    $('#course').append("<option value = 'HUMMS' >HUMMS</option>");
                    $('#course').append("<option value = 'ICT(PROGRAMMING)' >ICT(PROGRAMMING)</option>");
                    $('#course').append("<option value = 'ICT(CSS)' >ICT(CSS)</option>");
                    $('#course').append("<option value = 'STEM' >STEM</option>");
                }
            });
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
    </script>

</body>

</html>