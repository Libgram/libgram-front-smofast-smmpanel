<?php
   require "_header.php";
   ?>
<main class="d-flex flex-column bg-grey-100">
   <section class="section">
      <div class="container">
         <nav class="mb-4 mb-sm-5 py-4 border-bottom d-flex align-items-center text-center">
            <a href="/my-orders.php" class="nav-link flex-fill flex-md-grow-0 fw-medium me-0 me-sm-5"><i class="fa-regular fa-rectangle-history me-2"></i>Orders</a>
            <a href="/tickets.php" class="nav-link flex-fill flex-md-grow-0 fw-medium me-0 me-sm-5"><i class="fa-regular fa-messages-question me-2"></i>Tickets</a>
            <a href="/faq.php" class="nav-link flex-fill flex-md-grow-0 fw-medium active"><i class="fa-regular fa-graduation-cap me-2"></i>FAQ</a>
         </nav>
         <div class="d-block d-sm-flex align-items-center mb-5">
            <h1 class="h3 mb-3 mb-sm-0 me-0 me-sm-auto">Knowledge base</h1>
         </div>
         <div class="card shadow-m p-0 overflow-hidden mb-6">
            <div class="card-header border-0 d-block d-md-flex align-items-center">
               <nav class="me-auto">
                  <a href="#!" class="me-3 me-sm-4 color-grey-600">532 articles</a>
                  <a href="#!" class="flex-align-center fw-medium me-3 me-sm-4">New</a>
                  <a href="#!" class="flex-align-center fw-medium">Popular</a>
               </nav>
               <div class="d-flex align-items-center mt-4 mt-md-0 ms-0 ms-md-auto">
                  <form action=""class="flex-fill">
                     <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search in the base">
                        <button class="input-group-text border-0"><i class="fa-regular fa-magnifying-glass"></i></button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="tick__list">
               <!--item-->
               <a href="/faq-article.php" class="tick__item">
                  <div class="me-auto">
                     <div class="fs-18 text-primary fw-medium mb-2">I did not receive my order, what do I do now?</div>
                     <p class="mb-xl-0 fs-14 text-second" style="max-width: 500px;">Id cursus metus aliquam eleifend mi in nulla posuere. Ipsum faucibus vitae aliquet nec ullamcorper sit. Amet purus gravida quis blandit turpis cursus in hac.</p>
                  </div>
                  <div class="text-second fs-12">20.10.22 in 22:41 PM</div>
               </a>
               <!--item-->
               <a href="/faq-article.php" class="tick__item">
                  <div class="me-auto">
                     <div class="fs-18 text-primary fw-medium mb-2">How often does replenishment occur? </div>
                     <p class="mb-xl-0 fs-14 text-second" style="max-width: 500px;">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                  <div class="text-second fs-12">20.10.22 in 22:41 PM</div>
               </a>
               <!--item-->
               <a href="/faq-article.php" class="tick__item">
                  <div class="me-auto">
                     <div class="fs-18 text-primary fw-medium mb-2">Why are my followers dropping?</div>
                     <p class="mb-xl-0 fs-14 text-second" style="max-width: 500px;">Adipiscing at in tellus integer. Pellentesque massa placerat duis ultricies lacus. Nisi porta lorem mollis aliquam ut porttitor leo. </p>
                  </div>
                  <div class="text-second fs-12">20.10.22 in 22:41 PM</div>
               </a>
               <!--item-->
               <a href="/faq-article.php" class="tick__item">
                  <div class="me-auto">
                     <div class="fs-18 text-primary fw-medium mb-2">I no longer want the followers I purchased, can they be removed?</div>
                     <p class="mb-xl-0 fs-14 text-second" style="max-width: 500px;">Nullam non nisi est sit amet. Arcu vitae elementum curabitur vitae nunc. Ut tellus elementum sagittis vitae et leo duis. </p>
                  </div>
                  <div class="text-second fs-12">20.10.22 in 22:41 PM</div>
               </a>
               <!--item-->
               <a href="/faq-article.php" class="tick__item">
                  <div class="me-auto">
                     <div class="fs-18 text-primary fw-medium mb-2">How many likes can I buy?</div>
                     <p class="mb-xl-0 fs-14 text-second" style="max-width: 500px;">Id ornare arcu odio ut sem nulla. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur.</p>
                  </div>
                  <div class="text-second fs-12">20.10.22 in 22:41 PM</div>
               </a>
            </div>
         </div>
         <div class="support-panel d-flex flex-wrap align-items-center m-0">
            <div class="support-panel__body">
               <h5 class="text-white mb-2">Didn't find answers to your questions?</h5>
               <p class="fs-18 text-white opacity-75 m-0">Contact our support team</p>
            </div>
            <a href="#!" class="btn btn-lg bg-white ms-0 ms-lg-auto mt-4 mt-lg-0">Contact us</a>
         </div>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>