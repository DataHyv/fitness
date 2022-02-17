  <section class="masthead vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img
                  src="https://images.unsplash.com/photo-1599552683573-9dc48255fe85?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form method="POST">

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <!-- <img class="nav-brand" src="assets/img/datahyv.png" /> -->
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="formEmail">Email address</label>
                      <input type="email" id="formEmail" class="form-control form-control-lg" autocomplete="off" required />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="formPassword">Password</label>
                      <input type="password" id="formPassword" class="form-control form-control-lg" autocomplete="off" required />
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>

                    <div class="login_wrapper">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12"> <a href="#" class="btn btn-primary facebook"> <span>Login with Strava</span> <i class="fa-brands fa-strava"></i> </a> </div> 
                        <!-- <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="#" class="btn btn-primary google-plus"> Login with Google <i class="fa fa-google-plus"></i> </a> </div> -->
                    </div>
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class=" pb-lg-2" style="color: #393f81;">Don't have an account? <a href="<?php echo base_url() ?>/signup" style="color: #393f81;">Register here</a></p>
                    <!--<a href="#!" class="small text-muted">Terms of use.</a><a href="#!" class="small text-muted">Privacy policy</a> -->
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>