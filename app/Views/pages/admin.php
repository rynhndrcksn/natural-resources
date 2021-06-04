<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../public/assets/styles/styles.css">

    <title>NATRS Dashboard</title>
    <!--Favicon-->
    <link rel="icon" href="../public/assets/images/green-river-logo.png">
</head>
<body>

<!--  Page Content  -->
<div class="container-fluid h-100">

    <!--  Row  -->
    <div class="row h-100 justify-content-center">

        <!--  Navbar Col  -->
        <nav id="nav-col"
             class="navbar navbar-expand-md navbar-dark navbar-expand-lg col-md-3 col-lg-2 col-xl-2 text-center">

            <!--  Navbar Logo  -->
            <a id="grLogo" class="navbar-brand pt-2" href="#">
                <img src="../public/assets/images/green-river-logo.png" alt="Green River College Logo">
            </a>

            <!--  Navbar Hamburger Menu  -->
            <button id="hamburger" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggler"
                    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--  Navbar Content  -->
            <div class="collapse navbar-collapse justify-content-around" id="navbarToggler">
                <ul class="list-unstyled pt-5">

                    <!--  Nav Items  -->
                    <a href="#" class="text-decoration-none text-light">
                        <li class="nav-item">Applications</li>
                    </a>
                    <a href="#" class="text-decoration-none text-light">
                        <li class="nav-item">Notifications</li>
                    </a>

                    <!--  Logout  -->
                    <a href="login" class="text-decoration-none text-light">
                        <li class="nav-item logout-button">Logout</li>
                    </a>
                </ul>
            </div>
        </nav>

        <!--  Form Col  -->
        <div id="form-col" class="col-sm-12 col-md-9 col-lg-10 col-xl-10 p-0">
            <header class="mb-4">
                <div id="header" class="p-4 rounded-top text-center mx-auto text-white">
                    <h1 class="text-uppercase">Dashboard</h1>
                    <hr class="bg-white">
                    <h5>ASSOCIATE OF APPLIED SCIENCE Forestry, Park Management, Water Quality, Wildland Fire, GIS and
                        APP
                        for
                        Natural Resources</h5>
                </div>
            </header>

            <!--  Content  -->
            <div class="container-fluid form-row">
                <div class="form-group col-lg-3 col-md-6 col-sm-6 order-2 order-lg-1 mx-auto">
                    <div class="card bg-white shadow">
                        <div class="card-body">
                            <h4 class="text-center">Accepted</h4>
                            <hr>
                            <h2 class="text-center"><strong>10</strong></h2>
                        </div>
                    </div>
                </div>

                <div class="form-group col-lg-3 col-md-6 col-sm-6 order-2 order-lg-1 mx-auto">
                    <div class="card bg-white shadow">
                        <div class="card-body">
                            <h4 class="text-center">Waitlisted</h4>
                            <hr>
                            <h2 class="text-center"><strong>2</strong></h2>
                        </div>
                    </div>
                </div>

                <div class="form-group col-lg-3 col-md-6 col-sm-6 order-2 order-lg-1 mx-auto">
                    <div class="card bg-white shadow">
                        <div class="card-body">
                            <h4 class="text-center">Rejected</h4>
                            <hr>
                            <h2 class="text-center"><strong>0</strong></h2>
                        </div>
                    </div>
                </div>

                <div class="form-group col-lg-3 col-md-6 col-sm-6 order-2 order-lg-1 mx-auto">
                    <div class="card bg-white shadow">
                        <div class="card-body">
                            <h4 class="text-center">All</h4>
                            <hr>
                            <h2 class="text-center"><strong>12</strong></h2>

                        </div>
                    </div>
                </div>
            </div>

            <!--Applications Table-->
            <h1 class="font-weight-bold text-center">Applications</h1>
            <br>
            <div class="table text-center">
                <table id="table" class="display">
                    <thead>
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Submission Time/Date</td>
                        <td>SID</td>
                        <td>Email</td>
                        <td>Interests</td>
                        <td>Waitlist</td>
                        <td>Action</td>
                    </tr>
                    </thead>

                    <tbody>
                    <!--<repeat group="{{ @results }}" value="{{ @result }}">-->
<!--                    --><?php //foreach ($applicants->result() as $applicant): ?>
<!--                        <tr>-->
<!--                            <th>--><?php //echo $applicant->first; ?><!--</th>-->
<!--                            <td>--><?php //echo $applicant->last; ?><!--</td>-->
<!--                            <td></td>-->
<!--                            <td>--><?php //echo $applicant->sid; ?><!--</td>-->
<!--                            <td>--><?php //echo $applicant->email; ?><!--</td>-->
<!--                            <td>--><?php //echo $applicant->interests; ?><!--</td>-->
<!--                            <td><input type="checkbox"></td>-->
<!--                            <td></td>-->
<!--                        </tr>-->
<!--                    --><?php //endforeach; ?>

                    </tbody>
                </table>
            </div>

            <!-- FOR JQUERY TABLE -->
            <!--
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous"></script>
            <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script>
                $('#guestbook-table').DataTable({
                    'scrollX': true,
                    "order": [[2, "asc"]]
                });
            </script>-->