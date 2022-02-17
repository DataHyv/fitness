    <!--- Header --->
    <!-- <header class="text-center text-white masthead">
        <div class="masthead-content">
            <div class="container container-header">
                <h2 class="text-uppercase text-center text-black masthead-up mb-0">The</h2>
                <h1 class="text-uppercase shadow-none pulse animated masthead-heading mb-0">Extra Mile</h1>
                <h2 class="text-uppercase masthead-down">Challenge</h2>
                <h2 class="text-center masthead-subheading mb-0" style="color: rgb(18,14,0);"><br>Let us improve our health by taking those extra steps. May it be running, jogging,
                    or walking, every step you make is a step closer to a better and helthier life.</h2>
                <a class="btn btn-header text-white fw-bold btn-xl rounded-pill mt-4 header-btn" role="button" data-bss-hover-animate="pulse" href="#content1">Learn More</a>
            </div>
        </div>
    </header> -->

    <!--- Header --->
    <header>
        <!-- overlay effect on the video -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?php echo base_url('assets/videos/running.mp4')?>"
             type="video/mp4">
        </video>

        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="text-uppercase shadow-none pulse animated masthead-heading mb-0 display-1 fw-bold">Extra Mile</h1>
                    <p class="lead mb-0">Let us improve our health by taking those extra steps. May it be running, jogging,
                        or walking, every step you make is a step closer to a better and helthier life.</p>
                </div>
            </div>
        </div>
    </header>
    <!--- /Header --->
    
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services" style="background: #f1f1f1;">
      <div class="container">

        <div class="row gy-4">
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= Section Contents ======= -->
    <section id="content1">
        <div class="container" data-aos="fade" data-aos-duration="1100" data-aos-delay="100">
            <div class="row align-items-center">

                <!--- Image --->
                <div class="col-lg-6 col-md-6 order-lg-2 order-md-2">
                    <div class="p-5">
                        <img class="rounded img-thumbnail" src="assets/img/1.jpg" alt="Individual Challenge" loading="lazy">
                    </div>
                </div>
                <!--- /Image --->

                <div class="col-lg-6 col-md-6 order-lg-1 order-md-1">
                    <div class="heading-body">
                        <h2 class="display-6 fw-normal">Individual Challenge</h2>
                        <p class="lead">Your progress and your team member's progress will be reflected in a leaderboard where you and your team can see who among
                            yourselves have helped the most in reaching your team's goals.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="content2">
        <div class="container" data-aos="fade" data-aos-duration="1100" data-aos-delay="100">
            <div class="row align-items-center">
                
                <!--- Image --->
                <div class="col-lg-6 col-md-6 order-lg-1 order-md-1">
                    <div class="p-5">
                        <img class="rounded img-thumbnail" src="assets/img/team-building.jpg" alt="Team building" loading="lazy">
                    </div>
                <!--- /Image --->
                </div>

                <div class="col-lg-6 col-md-6 order-lg-2 order-md-2">
                    <div class="heading-body">
                        <h2 class="display-6 fw-normal">Team Challenge</h2>
                        <p class="lead">Compete against other teams and find out which team would set their best among all the challenges.
                            <span id="dots">...</span>
                            <span id="more">
                                Your progress will be recorded using the Strava app (a GPS running app) all throughout the challenge.
                                A separate web-app will also be available where you can track your standing among your team and your
                                team's progress against other team in the leaderboards.
                            </span>
                        </p>
                        <button class="btn btn-dark" onclick="seeMore()" id="myBtn">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- /Section Content --->

    <hr><!-- ======= Did you know Section ======= -->
    <section class="trivia" style="background: #f1f1f1;">
        <div class="container" style="padding: 20px;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="text-uppercase" style="color: rgb(71,85,84);font-family: Acme, sans-serif;padding: 20px;">Did you know?</h3>
                </div>
            </div>
            <div class="row d-xxl-flex justify-content-xxl-center text-black">
                <div class="col-md-6">
                    <h5>Walking, jogging, and running can help you improve your health in various ways such as:<br></h5>
                    <ul>
                        <li>improve cardiovascular and pulmonary fitness,</li>
                        <li>improves sleep and prevent sleep-related disorders,</li>
                        <li>helps burn calories and get in shape,</li>
                        <li>improves memory and cognitive functions.</li>
                        <li>alleviates depression and fatigue</li>
                        <li>reduces risk for cancer and chronic disease,</li>
                        <li>and many more.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>This activity will benefit not only you but also your company. A healthy workforce will help the company by:<br></h5>
                    <ul>
                        <li>lesser health care costs,</li>
                        <li>increased productivity,</li>
                        <li>lower absenteeism,</li>
                        <li>and many more.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <hr><!--- /END Did you know Section--->

