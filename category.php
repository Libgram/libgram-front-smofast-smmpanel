<?php
   require "_header.php";
   ?>
<main class="d-flex flex-column">
   <section class="section hero pb-0">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-7 col-xxl-5 me-auto">
               <h2 class="mb-4">
                  Instagram Likes 
                  <div class="d-inline d-md-block">with <span class="color-orange">Instant Delivery</span></div>
               </h2>
               <p class="text-second fs-18 mb-56px">
                  <span class="d-inline d-sm-block">At Libergram, you can buy Instagram promotion</span>
                  <span class="d-inline d-sm-block">quickly, safely, and easily with just a few clicks.</span>
                  See our deals below!
               </p>
            </div>
            <div class="col-lg-5 d-none d-md-flex">
               <div class="hero-image mx-auto"></div>
            </div>
         </div>
         <nav class="nav nav-pills nav-pills-category d-flex justify-content-center bg-grey-200">
            <a class="flex-sm-fill text-sm-center nav-link active" href="#!" id="nav-High-tab" data-bs-toggle="tab" data-bs-target="#nav-High" role="tab" aria-controls="nav-High" aria-selected="true">High Quality Likes</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#!" id="nav-Premium-tab" data-bs-toggle="tab" data-bs-target="#nav-Premium" role="tab" aria-controls="nav-Premium" aria-selected="true">Premium Likes</a>
            <a href="#!" id="DropQuestion" class="position-absolute mt-2 ms-3" data-bs-toggle="dropdown" aria-expanded="false" style="right: -48px">
               <div class="icon-colour icon-32 bg-soft-red">
                  <i class="fa-solid fa-circle-question"></i>
               </div>
            </a>
            <div class="dropdown-menu p-3" aria-labelledby="DropQuestion" style="max-width: 250px;">
               <div class="mb-3">
                  <span class="d-block fw-medium mb-2">High Quality Likes</span>
                  <p class="text-second fs-14 mb-0">These are Likes with profile pictures but no further uploads on their account. Auto-refill is enabled within the warranty.</p>
               </div>
               <div>
                  <span class="d-block fw-medium mb-2">Premium Likes</span>
                  <p class="text-second fs-14 mb-0">Libgram is now the only website to offer active likes. That's right — 100% real Instagram likes, from 100% real Instagram users! Likes from real people really interested in your content. NO Drops!</p>
               </div>
            </div>
         </nav>
      </div>
      </div>
   </section>
   <!-- Start of Category Slider section
      ============================================= -->
   <section class="section bg-grey-200 section-blur section-blur--sizing pt-5">
      <div class="container">
         <form action="/order-get-started.php" class="tab-content" id="nav-tabContent">
            <?php
               require "_high-tabs-slider-form.php";
               ?>
            <?php
               require "_premium-tabs-slider-form.php";
               ?>
         </form>
      </div>
   </section>
   <!-- End of Category Slider section
      ============================================= -->
   <section class="section">
      <div class="container">
         <h2 class="text-center mb-56px">
            Just a Few Steps <span class="d-block">to Popularity!</span>
         </h2>
         <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
               <div class="card bg-purple-100 p-5">
                  <div class="card__icon bg-purple-500 mb-32px">
                     <img src="/assets/img/icon-3d/finger-icon.svg" class="card__icon-img" alt="Pick a package" width="80" height="80">
                  </div>
                  <div class="card__title fs-20 mb-2">Pick a package</div>
                  <p class="mb-0">
                     Choose the Instagram likes, Likes, <br> or views package that you're interested in. Feel free to get in touch if you have <br> an inquiry about a bulk order.
                  </p>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
               <div class="card bg-sky-100 p-5">
                  <div class="card__icon bg-sky-500 mb-32px">
                     <img src="/assets/img/icon-3d/text-icon.svg" class="card__icon-img" alt="Fill the info" width="80" height="80">
                  </div>
                  <div class="card__title fs-20 mb-2">Fill the info</div>
                  <p class="mb-0">
                     We will never ask you for sensitive details such as your password. All you have to do is provide us with your username and leave the rest to us!
                  </p>
               </div>
            </div>
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
               <div class="card bg-powder-100 p-5">
                  <div class="card__icon bg-powder-500 mb-32px">
                     <img src="/assets/img/icon-3d/heart-icon.svg" class="card__icon-img" alt="See the growth" width="80" height="80">
                  </div>
                  <div class="card__title fs-20 mb-2">See the growth</div>
                  <p class="mb-0">
                     All orders start within a few minutes, <br> so you'll see growth in your account very quickly. We've made the process super easy.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php
      require "_05-section-faq.php";
      ?>
   <?php
      require "_06-section-customers.php";
      ?>
</main>
<?php
   require "_footer.php";
   ?>