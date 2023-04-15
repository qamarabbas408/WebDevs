  <!-- Login Section-->
  <section class="login">
        <div class="container position-relative">
            <div class="login-content  position-absolute top-50 start-50 translate-middle">
                <div class="row">
                    <div class="col-md-6 border p-0 m-0">
                        <div class="image-container position-relative">
                            <img src="assets/nature-1.JPG" class="img-fluid" alt="">
                            <div
                                class="message position-absolute top-50 start-50 translate-middle text-light text-center border-1 border rounded">
                                <h3>Welcome to Paradise!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 border">
                        <h2 class="display-5 text-center mb-5">Sign UP</h2>
                        <form action="controllers/signup-handler.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="text" required class="form-control" name="user_email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                               
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" required class="form-control" name="user_password" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <input type="submit" name="signup"class="btn btn-warning hvr-radial-out" value="Sign Up">
                            <div class="lead fs-6">Don't have an Account? <a class="text-decoration-none" href="signup.html">Signup</a></div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>