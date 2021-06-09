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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

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
            <h1 class="font-weight-bold text-center">Applications</h1>
            <hr>
            <br>
            <div class="container-fluid form-row">
                <div id="acceptedApplications" class="form-group col-lg-3 col-md-6 col-sm-6 order-2 order-lg-1 mx-auto">
                    <div id="accepted" class="card bg-white shadow">
                        <div class="card-body">
                            <h4 class="text-center">Accepted</h4>
                            <hr>
                            <h2 class="text-center"><strong>
                                    <?php echo isset($acceptedApplicationCount) ? $acceptedApplicationCount : 0?>
                                </strong></h2>
                        </div>
                    </div>
                </div>

                <div id="waitlistedApplications" class="form-group col-lg-3 col-md-6 col-sm-6 order-2 order-lg-1 mx-auto">
                    <div id="waitlisted" class="card bg-white shadow">
                        <div class="card-body">
                            <h4 class="text-center">Waitlisted</h4>
                            <hr>
                            <h2 class="text-center"><strong>
                                    <?php echo isset($waitListedApplicationCount) ? $waitListedApplicationCount : 0?>
                                </strong></h2>
                        </div>
                    </div>
                </div>

                <div id="rejectedApplications" class="form-group col-lg-3 col-md-6 col-sm-6 order-2 order-lg-1 mx-auto">
                    <div class="card bg-white shadow">
                        <div id="rejected" class="card-body">
                            <h4 class="text-center">Rejected</h4>
                            <hr>
                            <h2 class="text-center"><strong>
                                    <?php echo isset($rejectedApplicationCount) ? $rejectedApplicationCount : 0?>
                                </strong></h2>
                        </div>
                    </div>
                </div>

                <div id="allApplications" class="form-group col-lg-3 col-md-6 col-sm-6 order-2 order-lg-1 mx-auto">
                    <div id="all" class="card bg-white shadow">
                        <div class="card-body">
                            <h4 class="text-center">All</h4>
                            <hr>
                            <h2 class="text-center"><strong>
                                    <?php echo isset($allApplicationCount) ? $allApplicationCount : 0?>
                                </strong></h2>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="text-center">*Click On One of the Filters Above to Display in the Table</h6>
            <br><br>

            <!--Applications Table-->
            <div class="table text-center mx-auto">
                <table id="table" class="display">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Submission Time/Date</td>
                        <td>SID</td>
                        <td>Email</td>
                        <td>Interests</td>
                        <td>Waitlist</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody id="acceptedApplicationsTable" class="d-none">
                    <?php foreach ($acceptedApplications->getResult() as $application) { ?>
                        <tr>
                            <td><?php echo $application->first; ?> <?php echo $application->last; ?></td>
                            <td></td>
                            <td><?php echo $application->sid; ?></td>
                            <td><?php echo $application->email; ?></td>
                            <td><?php echo $application->program; ?></td>
                            <td><input type="checkbox"></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                    <tbody id="waitlistedApplicationsTable" class="d-none">
                    <?php foreach ($waitListedApplications->getResult() as $application) { ?>
                        <tr>
                            <td><?php echo $application->first; ?> <?php echo $application->last; ?></td>
                            <td></td>
                            <td><?php echo $application->sid; ?></td>
                            <td><?php echo $application->email; ?></td>
                            <td><?php echo $application->program; ?></td>
                            <td><input type="checkbox"></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                    <tbody id="rejectedApplicationsTable" class="d-none">
                    <?php foreach ($rejectedApplications->getResult() as $application) { ?>
                        <tr>
                            <td><?php echo $application->first; ?> <?php echo $application->last; ?></td>
                            <td></td>
                            <td><?php echo $application->sid; ?></td>
                            <td><?php echo $application->email; ?></td>
                            <td><?php echo $application->program; ?></td>
                            <td><input type="checkbox"></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                    <tbody id="allApplicationsTable">
                    <?php foreach ($allApplications->getResult() as $application) { ?>
                        <tr>
                            <td><?php echo $application->first; ?> <?php echo $application->last; ?></td>
                            <td></td>
                            <td><?php echo $application->sid; ?></td>
                            <td><?php echo $application->email; ?></td>
                            <td><?php echo $application->program; ?></td>
                            <td><input type="checkbox"></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>