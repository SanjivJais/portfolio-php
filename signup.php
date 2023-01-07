<!DOCTYPE html>
<?php
include('components\header.php');
?>

<body>
    <div class="container">
            <form action="process\signup-process.php" method="post">
                <div class="row justify-content-md-center">
                    <div class="col-6">
                        <br><br>
                        <h3>SIGNUP</h3>
                        <hr>

                        <!-- sigup form starts here -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Your Full Name"
                                name="name" required>
                            <label for="floatingInput">Full Name</label>
                        </div>
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
                            <input type="password" class="form-control" id="floatingInput"
                                placeholder="Create a password" name="pass1" required>
                            <label for="floatingInput">Create password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingInput"
                                placeholder="Confirm password" name="pass2" required>
                            <label for="floatingInput">Confirm password</label>
                        </div>
                        <button type="submit" class="btn btn-dark">Create Account</button>

                        <!-- sigup form ends here -->
                        <br><br>

                    </div>
                </div>
            </form>
            <p style="text-align: center;">Already Have An Account? <span><a href="login.php">Login Here</a></span> OR, <span><a href="index.php">Return Home</a></span></p>

    </div>
    </div>

</body>

</html>