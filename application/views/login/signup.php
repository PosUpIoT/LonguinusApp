   
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
            <h5 class="text-center fw-bold">Email Sign Up</h5>
            <form action="<?php echo base_url('index.php/user/new_user'); ?>" method="POST">
              <input class="text-box form-control" name="email" type="email" placeholder="Your Email">
              <input class="text-box form-control" name="name" type="text" placeholder="Your Name">
              <input class="text-box form-control" name="phone" type="phone" placeholder="Your Phone">
              <input class="text-box form-control" name="password" type="password" placeholder="Your Password">
              <input class="text-box form-control" name="rpassword" type="password" placeholder="Repeat Password">
              <button class="btn btn-green btn-block">Sign Up</button>
            </form>
          </div>
          
          <div>
            <h5 class="text-center fw-bold">Social Sign Up</h5>
            <a class="btn btn-split bg-facebook" href="#">
              <span class="bg-black-10pc"><i class="fa-facebook"></i></span>
              <span>Sign Up With Facebook</span>
            </a>
            <a class="btn btn-split bg-twitter" href="#">
              <span class="bg-black-10pc"><i class="fa-twitter"></i></span>
              <span>Sign Up With Twitter</span>
            </a>
            <a class="btn btn-split bg-google-plus" href="#">
              <span class="bg-black-10pc"><i class="fa-google-plus"></i></span>
              <span>Sign Up With Google</span>
            </a>
          </div>
        
        </div>
        <!-- /Login Form -->

      </div>
      <!-- /Container -->
    
    </section>
    <!-- /Content -->