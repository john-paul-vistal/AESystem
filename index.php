<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="src/css/w3css.css">
    <link rel="stylesheet" href="src/css/login.css">
    <link rel="icon" href="src/icon/logo.png" sizes="48x48">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-image:url(src/icon/bg.jpg);background-repeat: no-repeat;background-size: cover;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    <div class="container" style="min-width:500px;margin-top: 90px;">
        <div class=" shadow-lg px-4  mx-auto my-5 w3-animate-opacity" style="width:450px;height:650px;border-radius: 1.5%;background-image: linear-gradient( rgb(0, 47, 255),rgb(0, 110, 255));">
            <div id="foo" class=" box mt-5 text-white">
                <div class="mb-5 text-center">
                    <img src="src/icon/logo.png" class="" alt="Profile" style="width:310px;">
                </div>
                <form method="POST" action="indexprocess.php">
                    <div class="inputBox">
                        <input type="text" name="username" required value="">
                        <div class="line"></div>
                        <label><i class="fa fa-user"></i>&nbsp;Username</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" required value="">
                        <div class="line"></div>
                        <label><i class="fa fa-lock "></i>&nbsp;Password</label>
                    </div>

                    <?php 
                    if(@$_GET['Invalid']==true)
                    {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $_GET['Invalid']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <?php
                        }
                    ?>
                        <input class="btn btn-block" type="submit" name="sign-in" value="Sign In">
                        <p class=" mt-4 forget text-right">Forget Password?</p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>