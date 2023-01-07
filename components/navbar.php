<html>
<?php
include('header.php');
?>

<style>
nav{
    margin-bottom: 20px;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="color: white;">Sanjiv Jaiswal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li> -->
                    <li>
                        <form class="container-fluid justify-content-start">
                           <a href="login.php"><button class="btn btn-sm btn-outline-secondary" type="button">LOGIN</button></a> 
                           <a href="signup.php"><button class="btn btn-sm btn-outline-secondary" type="button">SIGNUP</button></a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>