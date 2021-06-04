<!--  Navbar Content  -->
<div class="collapse navbar-collapse justify-content-around" id="navbarToggler">
    <ul class="list-unstyled pt-5">

        <!--  Nav Items  -->
        <a href="profile" class="text-decoration-none text-light">
            <li class="nav-item">My Profile</li>
        </a>
        <a href="portal" class="text-decoration-none text-light">
            <li class="nav-item">Application</li>
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
            <h1 class="text-uppercase">My Profile</h1>
            <hr class="bg-white">
            <h5>ASSOCIATE OF APPLIED SCIENCE Forestry, Park Management, Water Quality, Wildland Fire, GIS and
                APP
                for
                Natural Resources</h5>
        </div>
    </header>

    <!--  Form  -->
    <div class="container-fluid" id="studentInfo">
        <h3 class="text-center">Student Information</h3>
        <hr>
        <dl class="row">
            <dt class="col-4">First Name</dt>
            <dd class="col-8"><?= esc(ucfirst($first)) ?></dd>
            <dt class="col-4">Last Name</dt>
            <dd class="col-8"><?= esc(ucfirst($last)) ?></dd>
            <dt class="col-4">Student ID</dt>
            <dd class="col-8"><?= esc(ucfirst($sid)) ?></dd>
            <dt class="col-4">Email</dt>
            <dd class="col-8">
                <a href=""><?= esc(ucfirst($email)) ?></a>
            </dd>
        </dl>
        <hr>
        <dl class="row">
            <dt class="col-4">Other Interests:</dt>
            <dd class="col-8"><?= esc(ucfirst($program)) ?></dd>
        </dl>

        <br>
        <div class="ml-auto mr-auto text-center">
            <form action="portal">
                <input class="rounded shadow text-decoration-none" id="resumeApp" type="submit"
                       value="Resume Application"/>
            </form>
        </div>
        <br>
    </div>

