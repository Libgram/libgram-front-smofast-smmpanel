<!-- Start of Footer section
   ============================================= -->
<?php if($_SERVER['REQUEST_URI'] == '/404.php') { ?>  
         <?php } else { ?>
      <footer class="footer">
   <div class="container text-center text-lg-start">
      <div class="row align-items-center">
         <div class="col-lg-4">
            <img src="/assets/img/footer-logo.svg" alt="Libgram" width="174" height="40">
         </div>
         <div class="col-lg-8 mt-4 mt-lg-0 ms-0 ma-lg-auto">
            <nav class="footer__nav">
               <ul class="list-unstyled d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
                  <li class="mt-3 mt-sm-0 me-4"><a href="/terms-of-service.php" class="footer__nav_link">Terms of Service</a></li>
                  <li class="mt-3 mt-sm-0 me-4"><a href="#" class="footer__nav_link">Tickets</a></li>
                  <li class="mt-3 mt-sm-0 me-4"><a href="/contact-us.php" class="footer__nav_link">Contact Us</a></li>
                  <li class="mt-3 mt-sm-0 dropdown">
                     <a href="#" class="footer__nav_link" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="/assets/img/flags/us.svg?v=2" alt="English" width="23" height="16">
                     <span class="ms-2">English</span>
                     </a>
                     <ul class="dropdown-menu my-3">
                        <li>
                           <a class="dropdown-item active" href="#">
                           <img src="/assets/img/flags/us.svg?v=2" alt="en" width="23" height="16">
                           <span class="ms-2">English</span>
                           </a>
                        </li>
                        <li>
                           <a class="dropdown-item" href="#">
                           <img src="/assets/img/flags/fr.svg?v=2" alt="French" width="23" height="16">
                           <span class="ms-2">French</span>
                           </a>
                        </li>
                        <li>
                           <a class="dropdown-item" href="#">
                           <img src="/assets/img/flags/de.svg?v=2" alt="Deutsch" width="23" height="16">
                           <span class="ms-2">Deutsch</span>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <hr class="mt-5 mb-32px">
      <div class="row align-items-center">
         <div class="col-lg-4">
            <span class="small">2022 All Rights Reserved</span>
         </div>
         <div class="col-lg-8 mt-4 mt-lg-0 ms-0 ms-lg-auto d-flex flex-wrap justify-content-center justify-content-lg-end">
            <img class="m-1" src="/assets/img/payment/footer/symantec.svg" alt="Symantec" width="98" height="34">
            <img class="m-1" src="/assets/img/payment/footer/applepay.svg" alt="Apple Pay" width="60" height="34">
            <img class="m-1" src="/assets/img/payment/footer/visa.svg" alt="Visa" width="60" height="34">
            <img class="m-1" src="/assets/img/payment/footer/master-card.svg" alt="Master Card" width="60" height="34">
            <img class="m-1" src="/assets/img/payment/footer/amex.svg" alt="Amex" width="65" height="34">
         </div>
      </div>
   </div>
</footer>
<?php } ?>

<!--div class="popup-coikies">
  <div class="row justify-content-center text-center">
  <div class="col col-lg-4 fs-20 fw-medium">
    <p>
      We use cookies to analyze site performance and deliver personalized content. 
      By clicking “Agree”, you consent <br> to our <a href="#!" class="link-active">Cookie Policy</a>. You may change your settings <br> at any time.
    </p>
    <div class="d-flex mx-5">
      <button class="btn btn-grey m-1 close">Decline</button>
      <button class="btn btn-primary m-1 submit ms-auto">Agree</button>
    </div>
  </div>
  </div>
</div-->

<!-- End of Customers section
   ============================================= -->
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.js"></script>
<script src="/assets/js/jquery-3.6.1.min.js"></script>
<script src="/assets/libs/slick/slick.min.js"></script>
<script src="/assets/js/clipboard.min.js"></script>
<script>
   $(".nav-link").click(function(){
   $('.category-slider').slick('refresh');
   });
   
   $('.choose-slider, .category-slider').slick({
       dots: false,
       infinite: false,
       speed: 200,
       slidesToShow: 4,
       slidesToScroll: 2,
       responsive: [
         {
           breakpoint: 1500,
           settings: {
             slidesToShow: 4,
             slidesToScroll: 2,
             infinite: true,
             dots: false
           }
         },
         {
           breakpoint: 1280,
           settings: {
             slidesToShow: 3,
             slidesToScroll: 3,
             infinite: true,
             dots: false
           }
         },
         {
           breakpoint: 1024,
           settings: {
             slidesToShow: 2.4,
             slidesToScroll: 2
           }
         },
         {
           breakpoint: 768,
           settings: {
             slidesToShow: 1.5,
             slidesToScroll: 1
           }
         },
         {
           breakpoint: 500,
           settings: {
           centerMode: true,
      dots: false,
      infinite: true,
      speed: 100,
      slidesToShow: 1
           }
         }
         // You can unslick at a given breakpoint now by adding:
         // settings: "unslick"
         // instead of a settings object
       ]
       });
       
      $('.customers-slider').slick({
       dots: false,
       infinite: false,
       speed: 300,
       slidesToShow: 3,
       slidesToScroll: 2,
       responsive: [
         {
           breakpoint: 1500,
           settings: {
             slidesToShow: 4,
             slidesToScroll: 2,
             infinite: true,
             dots: false
           }
         },
         {
           breakpoint: 1280,
           settings: {
             slidesToShow: 3,
             slidesToScroll: 3,
             infinite: true,
             dots: false
           }
         },
         {
           breakpoint: 1024,
           settings: {
             slidesToShow: 2.4,
             slidesToScroll: 2
           }
         },
         {
           breakpoint: 768,
           settings: {
             slidesToShow: 1.2,
             slidesToScroll: 1
           }
         },
         {
           breakpoint: 500,
           settings: {
            centerMode: true,
      dots: false,
      infinite: true,
      speed: 100,
      slidesToShow: 1
           }
         }
         // You can unslick at a given breakpoint now by adding:
         // settings: "unslick"
         // instead of a settings object
       ]
       });
       
       
$(window).on('load resize', function() {
  if ($(window).width() < 991) {
    $('#mobile-slider:not(.slick-initialized)').slick({
      centerMode: true,
      dots: false,
      infinite: true,
      speed: 100,
      slidesToShow: 1
    });
  } else {
    $("#mobile-slider.slick-initialized").slick("unslick");
  }
});
   
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
        everydropdown.addEventListener('shown.bs.dropdown', function() {
            el_overlay = document.createElement('span');
            el_overlay.className = 'screen-darken';
            document.body.appendChild(el_overlay)
        });

        everydropdown.addEventListener('hide.bs.dropdown', function() {
            document.body.removeChild(document.querySelector('.screen-darken'));
        });
    });

});
</script>   

<script>   
var count = 0;
$(function() {
    count = $('input[type=checkbox]:checked').length;
    displayCount();

    $('input[type=checkbox]').bind('click', function(e, a) {
        if (this.checked) {
            count += a ? -1 : 1;
        } else {
            count += a ? 1 : -1;
        }
        displayCount();
    });
    $('#count-post__reset').click(function(e) {
        $('#count-post, #count-post-2').text(0);
        $('input[type=checkbox]').removeAttr("checked");
        count = 0;
    });
});

function displayCount() {
    $('#count-post, #count-post-2').text(count);
}
</script>

<script>
const tooltip = new bootstrap.Tooltip('#tooltip', {
  boundary: document.body // or document.querySelector('#boundary')
});
</script>

<script>

$(document).ready(function () {

  // Tooltip

  $('[data-bs-toggle="tooltip"]').tooltip()

  // Clipboard

  const clipboard = new ClipboardJS('.btn-clipboard')

  clipboard.on('success', function(e) {

    $('.tooltip-inner').html('Copied')
    $(e.trigger).tooltip('update')

    e.clearSelection()
  })

  clipboard.on('error', function (e) {
    var fallbackMsg = /Mac/i.test(navigator.userAgent) ? 'Press \u2318 to copy' : 'Press Ctrl-C to copy'

    $('.tooltip-inner').html(fallbackMsg)
    $(e.trigger).tooltip('update')
  })
})
</script>


</body>
</html>