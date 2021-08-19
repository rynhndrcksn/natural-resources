<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../public/assets/styles/styles.css">

    <!--Favicon-->
    <link rel="icon" href="../public/assets/images/green-river-logo.png">
</head>
<body class="forestbackground">
<!--Beginning of page specific content-->

<div class="container p-5">

    <!--  Row  -->
    <div class="row ">

        <!--  Col  -->
        <div class="col-12 col-lg-6 col-md-8 col-sm-10 mx-auto p-0 mt-5 mb-5 rounded-lg" id="starterForm">
            <form class="w-75 mx-auto p-3 pt-5 pb-5 text-white" method="post" action="#">

                <!--  Header  -->
                <h3 class="text-center pb-4">Account Registration</h3>

                <!--  First  -->
                <div class="form-group col-12 p-0">
                    <label for="fName">First Name</label>
                    <input type="text" class="form-control" id="fName" name="fName" value="<?= set_value('fName') ?>">
                    <?php if (isset($validation)) : ?>
                        <div class="text-danger">
                            <?= $validation->getError('fName') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!--  Last  -->
                <div class="form-group col-12 p-0">
                    <label for="lName">Last Name</label>
                    <input type="text" class="form-control" id="lName" name="lName" value="<?= set_value('lName') ?>">
                    <?php if (isset($validation)) : ?>
                        <div class="text-danger">
                            <?= $validation->getError('lName') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!--  Email  -->
                <div class="form-group col-12 p-0">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                    <?php if (isset($validation)) : ?>
                        <div class="text-danger">
                            <?= $validation->getError('email') ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($validateEmail)) : ?>
                        <div class="text-danger">
                            <?= $validateEmail?>
                        </div>
                    <?php endif; ?>
                </div>

                <!--  Student ID  -->
                <div class="form-group col-12  p-0">
                    <label for="sid">Student ID</label>
                    <input type="text" class="form-control" id="sid" name="sid" value="<?= set_value('sid') ?>">
                    <?php if (isset($validation)) : ?>
                        <div class="text-danger">
                            <?= $validation->getError('sid') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!--  Degree Path Options  -->
                <div class="form-group mb-3 p-0">
                    <label for="degreeOptions">Degree Path</label>
                    <select class="custom-select" name="degreeOptions" id="degreeOptions">
                        <option selected>Choose...</option>
                        <?php foreach ($degreeOptions as $degreeOption) : ?>
                            <option
                                <?= set_select('degreeOptions', $degreeOption) ?>value="<?= $degreeOption ?>"><?= $degreeOption ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (isset($validation)) : ?>
                        <div class="text-danger">
                            <?= $validation->getError('degreeOptions') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!--  Program Options  -->
                <div class="form-group mb-3 p-0 d-none" id="programOptions">
                    <label for="programOptions">Program Options (can select none or however many you want. Forestry is implied)</label>
                    <br>
                    <?php foreach ($programOptions as $programOption) : ?>
                        <label>
                            <input type="checkbox" name="programOptions[]" value="<?= $programOption ?>">
                            <?= $programOption ?>
                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>

                <!--  Password  -->
                <div class="form-group col-12 p-0">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                    <?php if (isset($validation)) : ?>
                        <div class="text-danger">
                            <?= $validation->getError('pass') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!--  Confirm Password  -->
                <div class="form-group col-12 p-0">
                    <label for="cPass">Confirm Password</label>
                    <input type="password" class="form-control" id="cPass" name="cPass">
                    <?php if (isset($validation)) : ?>
                        <div class="text-danger">
                            <?= $validation->getError('cPass') ?>
                        </div>
                    <?php endif; ?>
                </div>
                <br>

                <!--  Submit Button  -->
                <div class="text-center pt-2">
                    <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                </div>

                <!--  Back to Login  -->
                <div class="text-center pt-3">
                    <p>
                        <a class="" href="<?php echo base_url('/') ?>">Back to Login</a>
                    </p>
                </div>

                <!--  Terms and Conditions Agreement  -->
                <div class="text-center pt-3">
                    <h6 class="font-weight-light">By registering an account, you agree to our
                        <a class="" href="">Terms</a>,
                        <a class="" href="">Data Policy</a>,
                        and
                        <a class="" href="">Cookies Policy</a>
                    </h6>
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
<script src="../public/assets/scripts/registration.js"></script>
</body>
</html>