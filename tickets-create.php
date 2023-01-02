<?php
   require "_header.php";
   ?>
<main class="d-flex flex-column bg-grey-100">
   <section class="section pt-5">
      <div class="container">
         <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <nav class="mb-4 mb-sm-5 py-4 border-bottom d-flex align-items-center text-center">
                  <a href="/tickets.php" class="nav-link flex-fill flex-md-grow-0 fw-medium me-auto"><i class="fa-regular fa-angle-left me-2"></i>Tickets</a>
                  <a href="/my-orders.php" class="nav-link flex-fill flex-md-grow-0 fw-medium me-0 me-md-5"><i class="fa-regular fa-rectangle-history me-2"></i>Orders</a>
                  <a href="/faq.php" class="nav-link flex-fill flex-md-grow-0 fw-medium"><i class="fa-regular fa-graduation-cap me-2"></i>FAQ</a>
               </nav>
               <h1 class="h3 mb-4 mb-sm-5">Create support request</h1>
               <div class="card shadow-m">
                  <form action="/tickets-list.php">
                     <div class="mb-3">
                        <label for="question" class="mb-2">Relates to</label>
                        <input type="text" class="form-control" placeholder="Your question in short" id="question">
                     </div>
                     <div class="mb-3">
                        <label for="question" class="mb-2">Relates to</label>
                        <select class="form-select form-control">
                           <option selected="">— Empty selection —</option>
                           <option value="">Item</option>
                           <option value="">Item</option>
                           <option value="">Item</option>
                           <option value="">Item</option>
                        </select>
                     </div>
                     <div class="mb-3">
                        <label for="question" class="mb-2">Priority</label>
                        <select class="form-select form-control">
                           <option selected="">Non-urgent (24 hours)</option>
                           <option value="">Item</option>
                           <option value="">Item</option>
                           <option value="">Item</option>
                           <option value="">Item</option>
                        </select>
                     </div>
                     <div class="mb-3">
                        <textarea name="" id="" class="form-control" cols="30" rows="4" placeholder="Message"></textarea>
                     </div>
                     <div class="d-block d-sm-flex align-items-center mt-4">
                     <div class="me-auto">
                        <label for="formFile" class="btn btn-grey w-100"><i class="fa-regular fa-paperclip me-2"></i>Attach files</label>
                        <input class="form-control d-none" type="file" id="formFile">
                     </div>
                     <div class="mt-3 mt-sm-0">
                        <button class="btn btn-primary w-100">Send Message</button>
                     </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   
          <!-- Start of FAQ section
   ============================================= -->
<section class="section section-faq bg-white">
   <div class="container">
      <div class="d-block d-lg-flex flex-wrap align-items-center mb-56px">
         <h2 class="h2 mb-3 me-auto">
            Frequently <span class="d-block">Asked Questions  👋</span>
         </h2>
         <a href="#!" class="btn btn-lg btn-grey mt-4 mt-lg-0">Knowledge base</a>
      </div>
      <div class="row accordion" id="accordionFaq">
         <div class="col-lg-6">
            <div class="accordion-item border-0 border-top">
               <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
               I did not receive my order, what do I do now?
               </button>
               <div id="collapse01" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                  <div class="accordion-body">
                     <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
               </div>
            </div>
            <div class="accordion-item border-0 border-top">
               <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
               Why are my followers dropping?
               </button>
               <div id="collapse02" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                  <div class="accordion-body">
                     <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
               </div>
            </div>
            <div class="accordion-item border-0 border-top">
               <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
               I no longer want the followers I purchased, can they be removed?
               </button>
               <div id="collapse03" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                  <div class="accordion-body">
                     <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
               </div>
            </div>
            <div class="accordion-item border-0 border-top">
               <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
               How do I stop follower replenishment?
               </button>
               <div id="collapse04" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                  <div class="accordion-body">
                     <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="accordion-item border-0 border-top">
               <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
               How often does replenishment occur? 
               </button>
               <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                  <div class="accordion-body">
                     <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
               </div>
            </div>
            <div class="accordion-item border-0 border-top">
               <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
               I did not receive my order, what do I do now?
               </button>
               <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                  <div class="accordion-body">
                     <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
               </div>
            </div>
            <div class="accordion-item border-0 border-top">
               <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
               How many followers can I buy?
               </button>
               <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                  <div class="accordion-body">
                     <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
               </div>
            </div>
            <div class="accordion-item border-0 border-top">
               <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
               How many likes can I buy?
               </button>
               <div id="collapse08" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                  <div class="accordion-body">
                     <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End of FAQ section
   ============================================= -->
</main>
<?php
   require "_footer.php";
   ?>