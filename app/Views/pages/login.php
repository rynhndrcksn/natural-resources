<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" >
    <link rel="stylesheet" href="../public/assets/styles/styles.css">
</head>
<body class="forestbackground">
<!--Beginning of page specific content-->

<div class="container p-5">

    <!--  Row  -->
    <div class="row">
        <!--  Col  -->
        <div class="col-10 col-lg-6 col-md-8 col-sm-10 mx-auto p-0 mt-5 mb-5 rounded-lg" id="starterForm">
            <form class="w-75 mx-auto pt-5 pb-5 text-white" method="post" action="#">
                <!--  Header  -->
                <h2 class="text-center">Natural Resources</h2>
                <h6 class="text-center">Application Management Portal</h6>
                <h6 class="text-center pt-4 pb-2">Welcome! Please Log In</h6>

                <!--  Username  -->
                <div class="form-group">
                    <label for="user">Email</label>
                    <input type="text" class="form-control text-center" id="user" name="email" value="">
                </div>

                <!--  Password  -->
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control text-center" id="pass" name="pass">
                </div>
                <br>

                <!--  Submit Button  -->
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary btn-block">Login</button>
                </div>

                <!--  Password Recovery/Create Account  -->
                <div class="text-center pt-3">
                    <p><a class="" href="<?php echo base_url('/register') ?>">Create Account</a> | <a class="" href="<?php echo base_url('/reset') ?>">Recover Password</a></p>
                    <p></p>
                    <p>Not a Green River College student?<a class="" href="https://www.greenriver.edu/students/online-services/"><br>Get Started Here</a></p>
                </div>
            </form>
        </div>
    </div>

</div><!--END OF CONTAINER-->

<!--End of page specific content-->
<!--   SCRIPTS   -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>