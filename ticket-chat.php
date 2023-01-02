<?php
   require "_header.php";
   ?>
<main class="d-flex flex-column bg-grey-100">
   <section class="section">
      <div class="container">
         <nav class="mb-4 mb-sm-5 py-4 border-bottom d-flex align-items-center text-center">
                  <a href="/tickets-list.php" class="nav-link flex-fill flex-md-grow-0 fw-medium me-auto"><i class="fa-regular fa-angle-left me-2"></i>Tickets</a>
                  <a href="/my-orders.php" class="nav-link flex-fill flex-md-grow-0 fw-medium me-0 me-md-5"><i class="fa-regular fa-rectangle-history me-2"></i>Orders</a>
                  <a href="/faq.php" class="nav-link flex-fill flex-md-grow-0 fw-medium"><i class="fa-regular fa-graduation-cap me-2"></i>FAQ</a>
               </nav>
         <div class="d-block d-lg-flex align-items-center mb-6">
            <h1 class="h5 mb-4 mb-lg-0 me-0 me-lg-auto">Visa card payment not working</h1>
            <a href="/tickets-create.php" class="btn btn-primary d-block d-md-inline">Open ticket again</a>
         </div>
         <div class="card shadow-m p-0 overflow-hidden">
            <div class="card-header border-1 d-block d-sm-flex align-items-center">
               <div class="me-auto fw-medium">
                  <span class="d-block">Ticket created:</span> 
                  <span class="color-grey-600 fs-12">20.10.22 in 22:41 PM</span>
               </div>
               <div class="tick__status bg-soft-green mt-2 mt-sm-0">Closed</div>
            </div>
            <div class="tick-chat">
               <!--Item-->
               <div class="tick-chat__item">
                  <div class="tick-chat__avatar">M</div>
                  <div class="tick-chat__body ms-3">
                     <div class="tick-chat__username">Madlen Curtis</div>
                     <div class="tick-chat__message">
                        <p>Can I enable payment in UAH? Or at least display in grian.</p>
                     </div>
                     <time class="tick-chat__date">20.10.22 in 22:41 PM</time>
                  </div>
               </div>
               <!--Item-->
               <div class="tick-chat__item --moderate">
                  <div class="tick-chat__avatar --moderate">M</div>
                  <div class="tick-chat__body ms-3">
                     <div class="tick-chat__username --moderate">Jerad Oksim</div>
                     <div class="tick-chat__message">
                        <p><strong>Hello!</strong></p> 
                        <p>You can pay in hryvnias, the payment system will carry out the conversion on its own.</p>
                     </div>
                     <time class="tick-chat__date">20.10.22 in 23:14 PM</time>
                  </div>
               </div>
               <!--Item-->
               <div class="tick-chat__item">
                  <div class="tick-chat__avatar">M</div>
                  <div class="tick-chat__body ms-3">
                     <div class="tick-chat__username">Madlen Curtis</div>
                     <div class="tick-chat__message">
                        <p>Thanks!</p>
                     </div>
                     <time class="tick-chat__date">20.10.22 in 23:16 PM</time>
                  </div>
               </div>
               <div class="p-4 p-lg-5">
                  <form action="">
                  <textarea name="" id="" cols="30" rows="5" class="form-control p-3" placeholder="Message"></textarea>
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
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>