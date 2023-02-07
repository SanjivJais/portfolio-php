<!DOCTYPE html>
<?php
include('components\header.php');
?>

<body>
    <div class="container">
        <form action="process\login-process.php?value=login" method="post">
            <div class="row justify-content-md-center">
                <div class="col-6">
                    <br><br>
                    <h3>LOGIN</h3>
                    <hr>

                    <!-- login form starts here -->
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="email" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="9827482322"
                            name="contact" required>
                        <label for="floatingInput">Contact number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" placeholder="Enter password"
                            name="pass" required>
                        <label for="floatingInput">Enter password</label>
                    </div>
                    <button type="submit" class="btn btn-dark">Login</button>

                    <!-- login form ends here -->
                    <br><br>
                </div>
            </div>
        </form>
        <p style="text-align: center;">Don't Have An Account? <span><a href="signup.php">Signup Here</a></span> OR,
            <span><a href="index.php">Return Home</a></span></p>

    </div>

</body>

</html>