<?php
   require "_header.php";
?>
<main class="d-flex flex-column bg-grey-100">
   <section class="section">
      <div class="card shadow-m mx-auto" style="max-width: 480px; width: 100%;">
         <h1 class="h4 mb-1">Reset Password</h1>
         <p class="mb-4">Please enter your Email</p>
         <form action="">
            <div class="input-group">
                  <span class="input-group-text"><i class="fa-sharp fa-solid fa-at"></i></span>
                  <input type="text" class="form-control" value="" placeholder="Email">
               </div>
            <button class="btn btn-lg btn-primary mt-4 w-100">Reset Password</button>
         </form>
         <div class="mt-4 text-center">
            <a href="/login.php" class="ms-2"><i class="fa-solid fa-chevron-left me-2"></i>Back to Log In</a>
         </div>
      </div>
   </section>   
</main>
<?php
   require "_footer.php";
?>