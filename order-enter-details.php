<?php
   require "_header.php";
   ?>
<main class="d-flex flex-column bg-grey-100">
   <section class="section overflow-visible">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-xl-7">
               <div class="card shadow-m">
                  <h1 class="h4 mb-1">Checkout</h1>
                  <div class="d-flex flex-wrap align-items-center mb-32px">
                     <p class="text-second mb-0">Pay with credit / debit card</p>
                     <div class="icon-colour icon-32 bg-soft-green ms-2">
                        <i class="fa-solid fa-badge-check"></i>
                     </div>
                     <div class="payment-items ms-0 ms-md-auto mt-3 mt-md-0">
                        <img src="/assets/img/payment/visa.svg?v=1" alt="visa" class="payment-icon">
                        <img src="/assets/img/payment/master-card.svg?v=1" alt="master card" class="payment-icon">
                        <img src="/assets/img/payment/amex.svg?v=1" alt="amex" class="payment-icon">
                        <img src="/assets/img/payment/ff.svg?v=1" alt="ff" class="payment-icon">
                     </div>
                  </div>
                  <form action="">
                     <div class="mb-3">
                        <div class="input-group">
                           <span class="input-group-text"><i class="fa-regular fa-signature"></i></span>
                           <input type="text" class="form-control" placeholder="Cardholder name">
                        </div>
                     </div>
                     <div class="mb-3">
                        <div class="input-group">
                           <span class="input-group-text"><i class="fa-regular fa-credit-card"></i></span>
                           <input type="text" class="form-control" placeholder="Card Number">
                        </div>
                     </div>
                     <div class="row pb-3">
                        <div class="col-sm-6 mb-3">
                           <div class="input-group">
                              <span class="input-group-text"><i class="fa-regular fa-calendar-minus"></i></span>
                              <input type="date" class="form-control" placeholder="MM">
                           </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                           <div class="input-group">
                              <span class="input-group-text"><i class="fa-regular fa-lock-keyhole"></i></span>
                              <input type="text" class="form-control" placeholder="CVV">
                           </div>
                        </div>
                     </div>
                     <h6 class="fs-20 mb-4">Billing Address</h6>
                     <div class="row">
                        <div class="col-sm-6 mb-3">
                           <div class="input-group">
                              <span class="input-group-text"><i class="fa-regular fa-earth-europe"></i></span>
                              <input class="form-control" list="datalistOptions" value="" placeholder="Country">
                              <datalist id="datalistOptions">
                                 <option value="Germany">
                                 <option value="USA">
                                 <option value="England">
                                 <option value="Hungary">
                                 <option value="Ukraine">
                                 <option value="Poland">
                              </datalist>
                           </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                        <div class="input-group">
                        <span class="input-group-text"><i class="fa-regular fa-mailbox"></i></span>
                        <input type="text" class="form-control" placeholder="Postal Code">
                        </div>
                        </div>
                     </div>
                     <buttom class="btn btn-lg btn-primary d-block mt-5">Pay $7.99 USD</buttom>
                  </form>
               </div>
               <div class="bg-grey-200 rounding p-4 mt-4">
               <p class="mb-2">By completing your order, you agree to the terms of services and privacy policy.</p>
               <p class="mb-0">All pricing is in USD. If paying with a different currency, the billed amount is subject to exchange rates and additional fees.</p>
               </div>
            </div>
            <div class="col-lg-6 col-xl-5 mt-4 mt-lg-0">
            <div class="position-sticky" style="top: 100px;">
            <div class="card shadow-m">
            <div class="d-none d-sm-flex flex-wrap align-items-center bg-grey-100 rounding-12 p-4 mb-5">
            <img src="/assets/img/posts/image-07.jpg" class="rounded-circle" width="80" height="80">
            <div class="mt-3 mt-sm-0 ms-0 ms-sm-4">
            <span class="fs-20 fw-medium">@madlen_curtis</span>
            <p class="mb-0 text-muted">
            <span class="me-2">234 Posts</span> 
            <span>1862 Folowers</span>
            </p>
            </div>
            </div>
            <div class="d-flex border-bottom pb-4 mb-4">
            <div class="m-0">
            <p class="d-flex mb-0">
            <span class="fw-medium">500 likes</span>
            <a href="#!" class="text-muted ms-3"><i class="fa-solid fa-pen-to-square"></i></a>
            </p>
            <span class="text-muted small">125 likes / 4 posts</span>
            </div>
            <span class="ms-auto">$7.99</span>
            </div>
            <div class="h6 d-flex mb-32px">
            <span class="me-auto">Total to pay</span>
            <span>$7.99 USD</span>
            </div>
            <ul class="list-unstyled bg-grey-100 rounding-12 fs-14 p-4 mb-0">
            <li class="d-flex align-items-center mb-3">
            <div class="icon-colour icon-32 bg-soft-orange me-3">
            <i class="fa-regular fa-users"></i>
            </div>
            Real likes from real people
            </li>
            <li class="d-flex align-items-center mb-3">
            <div class="icon-colour icon-32 bg-soft-purple me-3">
            <i class="fa-regular fa-images"></i>
            </div>
            Split likes on multiple posts
            </li>
            <li class="d-flex align-items-center  mb-3">
            <div class="icon-colour icon-32 bg-soft-red me-3">
            <i class="fa-regular fa-eye"></i>
            </div>
            Video views included
            </li>
            <li class="d-flex align-items-center mb-3">
            <div class="icon-colour icon-32 bg-soft-sky me-3">
            <i class="fa-regular fa-fingerprint"></i>
            </div>
            No Instagram password required
            </li>
            <li class="d-flex align-items-center mb-3">
            <div class="icon-colour icon-32 bg-soft-green me-3">
            <i class="fa-regular fa-bolt"></i>
            </div>
            Fast delivery, up to 10 mins
            </li>
            <li class="d-flex align-items-center">
            <div class="icon-colour icon-32 bg-grey-100 me-3">
            <i class="fa-regular fa-messages-question"></i>
            </div>
            24/7 support
            </li>
            </ul>
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