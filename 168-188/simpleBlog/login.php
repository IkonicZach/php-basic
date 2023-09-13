<?php
include_once "views/top.php";
if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
}
?>
<!-- Navigation starts -->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-white english" href="index.php">Navbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white english" aria-current="page" href="#">Latests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white english" href="#">Politics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white english" href="#">Sports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white english" href="#">Health</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white english" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Membership
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-english" href="index.php">Home</a></li>
                        <li><a class="dropdown-item text-english" href="register.php">Register</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-english" href="#">Buy PREMIUM</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
    </div>
</nav>
<!-- Navigation ends -->
<!-- Login section starts -->
<div class="container">
    <div class="col-md-8 offset-md-2">
        <form action="login.php" method="post" class="border borderColor rounded  w-75 mx-auto my-5 p-5">
        <h3 class="english">Log into your account.</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
<!-- Login section ends -->
<?php include_once "views/footer.php"; ?>

<?php include_once "views/bot.php" ?>