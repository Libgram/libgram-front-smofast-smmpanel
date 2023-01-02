<?php
   require "_header.php";
   ?>
<main class="d-flex flex-column bg-grey-100">
   <section class="section">
      <div class="container">
         <nav class="mb-4 mb-sm-5 py-4 border-bottom d-flex align-items-center text-center">
            <a href="/my-orders.php" class="nav-link flex-fill flex-md-grow-0 fw-medium me-0 me-sm-5"><i class="fa-regular fa-rectangle-history me-2"></i>Orders</a>
            <a href="/tickets.php" class="nav-link flex-fill flex-md-grow-0 fw-medium me-0 me-sm-5 active"><i class="fa-regular fa-messages-question me-2"></i>Tickets</a>
            <a href="/faq.php" class="nav-link flex-fill flex-md-grow-0 fw-medium"><i class="fa-regular fa-graduation-cap me-2"></i>FAQ</a>
         </nav>
         <div class="d-block d-sm-flex align-items-center mb-6">
            <h1 class="h3 mb-3 mb-sm-0 me-0 me-sm-auto">Tickets</h1>
            <a href="/tickets-create.php" class="btn btn-primary d-block d-md-inline">Create ticket</a>
         </div>
         <div class="card shadow-m p-0 overflow-hidden">
            <div class="card-header border-0 d-block d-md-flex align-items-center">
               <nav class="me-auto">
                  <a href="/tickets.php" class="me-3 me-sm-4 line-height-1 link-active">Recent</a>
                  <a href="/tickets.php" class="flex-align-center fw-medium me-3 me-sm-4 line-height-1"><i class="fa-solid fa-circle color-u-orange fs-10 me-2"></i>Open</a>
                  <a href="/tickets.php" class="flex-align-center fw-medium line-height-1"><i class="fa-solid fa-circle color-green fs-10 me-2"></i>Closed</a>
               </nav>
               <div class="d-flex align-items-center mt-4 mt-md-0 ms-0 ms-md-auto">
                  <form action=""class="flex-fill">
                     <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search">
                        <button class="input-group-text border-0"><i class="fa-regular fa-magnifying-glass"></i></button>
                     </div>
                  </form>
                  <button class="btn btn-collapse p-0 ms-4" data-bs-toggle="collapse" data-bs-target="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters">
                  <i class="fa-regular fa-filter-list fs-24"></i>
                  </button>
               </div>
            </div>
            <div class="p-2 p-md-4 border-top collapse" id="collapseFilters">
               <form action="" class="d-block d-sm-flex">
                  <div class="input-group mb-2 mb-sm-0 me-0 me-sm-2">
                     <span class="input-group-text"><i class="fa-regular fa-photo-film-music"></i></span>
                     <select class="form-select form-control">
                        <option selected="">All Social Media</option>
                        <option value="">Instagram</option>
                        <option value="">TikTok</option>
                        <option value="">Youtube</option>
                        <option value="">Twitch</option>
                     </select>
                  </div>
                  <div class="input-group mb-2 mb-sm-0 me-0 me-sm-2">
                     <span class="input-group-text"><i class="fa-regular fa-check-to-slot"></i></span>
                     <select class="form-select form-control">
                        <option selected="">Status</option>
                        <option value="">Performed</option>
                        <option value="">Processing</option>
                        <option value="">Error</option>
                     </select>
                  </div>
                  <button class="btn btn-primary">Apply</button>
               </form>
            </div>
            <div class="tick__list">
               <!--item-->
               <a href="/ticket-chat.php" class="tick__item">
                  <div class="icon-32 bg-soft-yellow rounded me-3"><i class="fa-regular fa-message-lines"></i></div>
                  <div class="tick__name me-auto">I want to order in bulk</div>
                  <div class="tick__date me-5 fs-12">20.10.22 in 22:41 PM</div>
                  <div class="tick__status bg-soft-yellow">Open</div>
                  <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
               </a>
               <!--item-->
               <a href="/ticket-chat.php" class="tick__item">
                  <div class="icon-32 bg-soft-green rounded me-3"><i class="fa-regular fa-message-check"></i></div>
                  <div class="tick__name me-auto">Visa card payment not working</div>
                  <div class="tick__date me-5 fs-12">20.10.22 in 22:41 PM</div>
                  <div class="tick__status bg-soft-green">Closed</div>
                  <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
               </a>
               <!--item-->
               <a href="/ticket-chat.php" class="tick__item">
                  <div class="icon-32 bg-soft-green rounded me-3"><i class="fa-regular fa-message-check"></i></div>
                  <div class="tick__name me-auto">I can't figure out how to subscribe to autolikes</div>
                  <div class="tick__date me-5 fs-12">20.10.22 in 22:41 PM</div>
                  <div class="tick__status bg-soft-green">Closed</div>
                  <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
               </a>
               <!--item-->
               <a href="/ticket-chat.php" class="tick__item">
                  <div class="icon-32 bg-soft-green rounded me-3"><i class="fa-regular fa-message-check"></i></div>
                  <div class="tick__name me-auto">I want to order in bulk</div>
                  <div class="tick__date me-5 fs-12">20.10.22 in 22:41 PM</div>
                  <div class="tick__status bg-soft-green">Closed</div>
                  <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
               </a>
               <!--item-->
               <a href="/ticket-chat.php" class="tick__item">
                  <div class="icon-32 bg-soft-green rounded me-3"><i class="fa-regular fa-message-check"></i></div>
                  <div class="tick__name me-auto">Visa card payment not working</div>
                  <div class="tick__date me-5 fs-12">20.10.22 in 22:41 PM</div>
                  <div class="tick__status bg-soft-green">Closed</div>
                  <button class="btn btn-collapse p-0 ms-5"><i class="fa-solid fa-ellipsis-vertical"></i></button>
               </a>
            </div>
         </div>
      </div>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>