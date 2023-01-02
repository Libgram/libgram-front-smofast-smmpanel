<?php
   require "_header.php";
   ?>
<main class="d-flex flex-column bg-grey-100">
   <section class="section overflow-visible">
      <div class="container">
         <form action="/order-enter-details.php">
            <div class="row">
               <div class="col-lg-6 col-xl-6">
                  <h1 class="h4 mb-1">Select posts</h1>
                  <p class="text-second mb-32px">
                  <span id="count-post"></span> posts selected / 500 likes per post
                  </p>
                  <div class="row mb-56px">
                     <div class="col-4 col-md-3 col-lg-4">
                        <div class="card-post">
                           <input class="form-check-input card-post__input" type="checkbox" name="CardPostRadios" id="amount-1">
                           <label class="card-post__label" for="amount-1"></label>
                           <img src="/assets/img/posts/image-01.jpg" class="card-post__image" width="196" height="196">
                           <div class="card-post__count">+125 likes</div>
                        </div>
                     </div>
                     <div class="col-4 col-md-3 col-lg-4">
                        <div class="card-post">
                           <input class="form-check-input card-post__input" type="checkbox" name="CardPostRadios" id="amount-2">
                           <label class="card-post__label" for="amount-2"></label>
                           <img src="/assets/img/posts/image-02.jpg" class="card-post__image" width="196" height="196">
                           <div class="card-post__count">+125 likes</div>
                        </div>
                     </div>
                     <div class="col-4 col-md-3 col-lg-4">
                        <div class="card-post">
                           <input class="form-check-input card-post__input" type="checkbox" name="CardPostRadios" id="amount-3">
                           <label class="card-post__label" for="amount-3"></label>
                           <img src="/assets/img/posts/image-03.jpg" class="card-post__image" width="196" height="196">
                           <div class="card-post__count">+125 likes</div>
                        </div>
                     </div>
                     <div class="col-4 col-md-3 col-lg-4">
                        <div class="card-post">
                           <input class="form-check-input card-post__input" type="checkbox" name="CardPostRadios" id="amount-4">
                           <label class="card-post__label" for="amount-4"></label>
                           <img src="/assets/img/posts/image-04.jpg" class="card-post__image" width="196" height="196">
                           <div class="card-post__count">+125 likes</div>
                        </div>
                     </div>
                     <div class="col-4 col-md-3 col-lg-4">
                        <div class="card-post">
                           <input class="form-check-input card-post__input" type="checkbox" name="CardPostRadios" id="amount-5">
                           <label class="card-post__label" for="amount-5"></label>
                           <img src="/assets/img/posts/image-05.jpg" class="card-post__image" width="196" height="196">
                           <div class="card-post__count">+125 likes</div>
                        </div>
                     </div>
                     <div class="col-4 col-md-3 col-lg-4">
                        <div class="card-post">
                           <input class="form-check-input card-post__input" type="checkbox" name="CardPostRadios" id="amount-6">
                           <label class="card-post__label" for="amount-6"></label>
                           <img src="/assets/img/posts/image-06.jpg" class="card-post__image" width="196" height="196">
                           <div class="card-post__count">+125 likes</div>
                        </div>
                     </div>
                     <div class="col-4 col-md-3 col-lg-4">
                        <div class="card-post">
                           <input class="form-check-input card-post__input" type="checkbox" name="CardPostRadios" id="amount-7">
                           <label class="card-post__label" for="amount-7"></label>
                           <img src="/assets/img/posts/image-07.jpg" class="card-post__image" width="196" height="196">
                           <div class="card-post__count">+125 likes</div>
                        </div>
                     </div>
                     <div class="col-4 col-md-3 col-lg-4">
                        <div class="card-post">
                           <input class="form-check-input card-post__input" type="checkbox" name="CardPostRadios" id="amount-8">
                           <label class="card-post__label" for="amount-8"></label>
                           <img src="/assets/img/posts/image-08.jpg" class="card-post__image" width="196" height="196">
                           <div class="card-post__count">+125 likes</div>
                        </div>
                     </div>
                     <div class="col-4 col-md-3 col-lg-4">
                        <div class="card-post">
                           <input class="form-check-input card-post__input" type="checkbox" name="CardPostRadios" id="amount-9">
                           <label class="card-post__label" for="amount-9"></label>
                           <img src="/assets/img/posts/image-09.jpg" class="card-post__image" width="196" height="196">
                           <div class="card-post__count">+125 likes</div>
                        </div>
                     </div>
                  </div>
                  <div class="text-center">
                     <button class="btn btn-grey border w-100" style="max-width: 324px;">Load more posts</button>
                  </div>
               </div>
               <div class="col-lg-6 col-xl-5 ms-0 ms-xl-auto mt-4 mb-lg-0">
                  <div class="card shadow-m position-sticky" style="top: 100px">
                     <div class="d-none d-sm-flex flex-wrap align-items-center bg-grey-200 rounding p-4 mb-5">
                        <img src="/assets/img/posts/image-07.jpg" class="rounded-circle" width="80" height="80">
                        <div class="mt-3 mt-sm-0 ms-0 ms-sm-4">
                           <span class="fs-20 fw-medium">@madlen_curtis</span>
                           <p class="mb-0 text-second">
                              <span class="me-2">234 Posts</span> 
                              <span>1862 Folowers</span>
                           </p>
                        </div>
                     </div>
                     <div class="d-flex border-bottom pb-4">
                        <div class="m-0">
                           <p class="d-flex mb-0">
                              <span class="fw-medium">500 likes</span>
                              <a href="#!" class="text-second ms-3"><i class="fa-solid fa-pen-to-square"></i></a>
                           </p>
                           <span class="text-second small">125 likes / <span id="count-post-2"></span> posts</span>
                        </div>
                        <span class="ms-auto">$7.99</span>
                     </div>
                    <div class="mt-5">
                        <button class="btn btn-lg btn-primary w-100">Continue to checkout</button>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>