      <!-- Container -->
      <div class="container">

        <!-- Header -->
        <header class="text-center mgb-30">
          <p>Dont have an account yet? Sign up <a href="register.html" class="uline-hov">here</a></p>
        </header>
        <!-- /Header -->
      
        <!-- Login Form -->
        <div class="unicard unicard-framed account-form">
        
          <div>
            <h5 class="text-center fw-bold">Email Login</h5>
            <form action="<?php echo base_url('index.php/user/auth'); ?>" method="POST">
              <input class="text-box form-control" name="email" type="email" placeholder="Your Email"> 
              <input class="text-box form-control" name="password" type="password" placeholder="Your Password">
              <button class="btn btn-green btn-block">Sign In</button>
            </form>
          </div>
          
          <div>
            <h5 class="text-center fw-bold">Social Login</h5>
            <a class="btn btn-split bg-facebook" href="<?php echo $this->facebook->login_url(); ?>">
              <span class="bg-black-10pc"><i class="fa-facebook"></i></span>
              <span>Sign In With Facebook</span>
            </a>
            <a class="btn btn-split bg-twitter" href="#">
              <span class="bg-black-10pc"><i class="fa-twitter"></i></span>
              <span>Sign In With Twitter</span>
            </a>
            <a class="btn btn-split bg-google-plus" href="#">
              <span class="bg-black-10pc"><i class="fa-google-plus"></i></span>
              <span>Sign In With Google</span>
            </a>
          </div>
        
        </div>
        <!-- /Login Form -->

      </div>
      <!-- /Container -->
    
    </section>
    <!-- /Content -->