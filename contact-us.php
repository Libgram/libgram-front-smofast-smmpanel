<?php
   require "_header.php";
   ?>
<main class="d-flex flex-column bg-grey-100">
   <section class="section">
      <div class="card shadow-m mx-auto" style="max-width: 480px; width: 100%;">
         <h1 class="h4 mb-1">Get in Touch</h1>
         <p class="text-second mb-4">If you have any questions about our Instagram growth services, please send us a message below.</p>
         <form action="">
            <div class="mb-3">
               <input type="text" class="form-control" value="" placeholder="First Name">
            </div>
            <div class="mb-3">
               <input type="text" class="form-control" value="" placeholder="Your E-mail">
            </div>
            <div class="mb-3">
               <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Reason (Optional)</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
               </select>
            </div>
            <div class="mb-3">
               <input type="text" class="form-control" value="" placeholder="Order Number (Optional)">
            </div>
            <textarea name="" class="form-control" cols="30" rows="4" placeholder="Message"></textarea>
            <button class="btn btn-lg btn-primary mt-5 w-100">Contact Us</button>
         </form>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>