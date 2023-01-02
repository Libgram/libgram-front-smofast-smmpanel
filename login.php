<?php
   require "_header.php";
   ?>
<main class="d-flex flex-column bg-grey-100">
   <section class="section">
      <div class="card shadow-m mx-auto" style="max-width: 480px; width: 100%;">
         <h1 class="h4 mb-1">Welcome back 👋 </h1>
         <p class="text-second mb-4">Please enter your detailse.</p>
         <form action="/my-orders.php">
            <button class="btn btn-grey w-100">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_109_862)">
                     <path d="M5.31891 14.5035L4.4835 17.6222L1.43011 17.6868C0.517594 15.9943 0 14.0578 0 12C0 10.0101 0.483938 8.13362 1.34175 6.48132H1.34241L4.06078 6.9797L5.25159 9.68176C5.00236 10.4084 4.86652 11.1884 4.86652 12C4.86661 12.8809 5.02617 13.7249 5.31891 14.5035Z" fill="#FBBB00"/>
                     <path d="M23.7902 9.75824C23.928 10.4841 23.9999 11.2338 23.9999 12C23.9999 12.8591 23.9095 13.6971 23.7375 14.5055C23.1533 17.2563 21.6269 19.6582 19.5124 21.358L19.5118 21.3574L16.0878 21.1827L15.6032 18.1576C17.0063 17.3347 18.1028 16.047 18.6804 14.5055H12.2637V9.75824H18.774H23.7902Z" fill="#518EF8"/>
                     <path d="M19.5114 21.3574L19.5121 21.358C17.4556 23.011 14.8433 24 11.9996 24C7.42969 24 3.45652 21.4457 1.42969 17.6868L5.31848 14.5035C6.33187 17.2081 8.94089 19.1334 11.9996 19.1334C13.3143 19.1334 14.546 18.778 15.6029 18.1576L19.5114 21.3574Z" fill="#28B446"/>
                     <path d="M19.6596 2.76262L15.7721 5.94525C14.6783 5.26153 13.3853 4.86656 12 4.86656C8.87213 4.86656 6.21431 6.88017 5.25169 9.68175L1.34245 6.48131H1.3418C3.33895 2.63077 7.36223 0 12 0C14.9117 0 17.5814 1.03716 19.6596 2.76262Z" fill="#F14336"/>
                  </g>
                  <defs>
                     <clipPath id="clip0_109_862">
                        <rect width="24" height="24" fill="white"/>
                     </clipPath>
                  </defs>
               </svg>
               <span class="ms-2">Log in with google</span>
            </button>
            <div class="py-4 text-center">
               <hr>
               <span class="line-text">or</span>
            </div>
            <div class="mb-3">
               <div class="input-group">
                  <span class="input-group-text"><i class="fa-sharp fa-solid fa-at"></i></span>
                  <input type="text" class="form-control is-valid" value="Dmytro" placeholder="Username">
               </div>
            </div>
            <div class="mb-3">
               <div class="input-group">
                  <span class="input-group-text"><i class="fa-regular fa-unlock-keyhole"></i></span>
                  <input type="text" class="form-control is-invalid" placeholder="Password">
               </div>
               <div class="ms-2 mt-2 small text-danger">
                  Please provide a valid password.
               </div>
            </div>
            <div class="d-flex align-items-center">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label small" for="defaultCheck1">
                  Remember for 30 days
                  </label>
               </div>
               <a href="/reset-password.php" class="ms-auto small text-decoration"><u>Forgot password</u></a>
            </div>
            <button class="btn btn-lg btn-primary mt-5 w-100">Log in</button>
         </form>
         <div class="mt-4 text-center">
            <div class="d-flex align-items-center justify-content-center">
               <span>Don’t have in account?</span> 
               <a href="#!" class="ms-2">Sing up for free</a>
            </div>
            <svg style="position:relative; left: 34%" width="62" height="25" viewBox="0 0 62 25" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M3.8558 11.1184C21.3476 12.1404 45.9788 8.68132 58.573 1.5635C60.0968 0.702347 62.2381 0.808429 60.0968 2.01849C58.1334 3.12795 60.5499 1.86177 58.573 2.97175C51.2624 7.07643 42.6849 10.0032 34.6082 13.1839C26.7396 16.2826 6.35462 21.5292 1 24" stroke="url(#paint0_linear_116_847)" stroke-width="2" stroke-linecap="round"/>
               <defs>
                  <linearGradient id="paint0_linear_116_847" x1="62" y1="1" x2="1" y2="24" gradientUnits="userSpaceOnUse">
                     <stop offset="0.3971" stop-color="#0D0C22"/>
                     <stop offset="1" stop-color="#0D0C22" stop-opacity="0"/>
                  </linearGradient>
               </defs>
            </svg>
         </div>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>