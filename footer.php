<footer class="footer pt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="footer-links">
            <h2 class="text-white mb-3">مشاريعنا</h2>
            <ul class="list-unstyled mb-0">
              <li><a class="d-inline-block text-white mb-2" href="#">الريف</a></li>
              <li><a class="d-inline-block text-white mb-2" href="#">بورتا جدة</a></li>
              <li><a class="d-inline-block text-white mb-2" href="#">فَيّ سدرة</a></li>
              <li><a class="d-inline-block text-white mb-2" href="#">تصفّح المزيد</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-links">
            <h2 class="text-white mb-3">خريطة الموقع</h2>
            <ul class="list-unstyled mb-0">
              <li><a class="d-inline-block text-white mb-2" href="#">الصفحة الرئيسية</a></li>
              <li><a class="d-inline-block text-white mb-2" href="#">نبذة عن العقارية</a></li>
              <li><a class="d-inline-block text-white mb-2" href="#">مشاريعنا</a></li>
              <li><a class="d-inline-block text-white mb-2" href="#">تواصل معنا</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-links">
            <h2 class="text-white mb-3">روابط سريعة</h2>
            <ul class="list-unstyled mb-0">
              <li><a class="d-inline-block text-white mb-2" href="#">وظائف</a></li>
              <li><a class="d-inline-block text-white mb-2" href="#">تواصل معنا</a></li>
              <li><a class="d-inline-block text-white mb-2" href="#">التغطية الإعلامية</a></li>
              <li><a class="d-inline-block text-white mb-2" href="#">الأسئلة الشائعة</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="social-links h-100 d-flex justify-content-end align-items-end">
            <ul class="list-unstyled mb-0 d-flex gap-2">
              <li><a class="d-flex align-items-center justify-content-center text-white" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a class="d-flex align-items-center justify-content-center text-white" href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
              <li><a class="d-flex align-items-center justify-content-center text-white" href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a class="d-flex align-items-center justify-content-center text-white" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
              <li><a class="d-flex align-items-center justify-content-center text-white" href="#"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright py-4 mt-4">
        <div class="row">
          <div class="col-md-4">
            <a class="footer-logo d-inline-block" href="#"><img src="assets/images/logo.svg"></a>
          </div>          
          <div class="col-md-4">
            <label class="d-block text-center">جميع الحقوق محفوظة © العقارية 2025</label>
          </div>          
          <div class="col-md-4">
            <div class="terms text-end">
              <a href="#">سياسة الخصوصية</a>
              <i class="fa-solid fa-circle mx-3"></i>
              <a href="#">الشروط والأحكام</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/fancybox.umd.js"></script>
  <script> Fancybox.bind('[data-fancybox]', {}); </script>
  <script>
      $('.projects-slider').owlCarousel({
        loop: true,
        margin: 7,
        autoplayTimeout: 6000,
        smartSpeed: 1500,
        nav: true,
        navText: ['<i class="fa-solid fa-arrow-right"></i>', '<i class="fa-solid fa-arrow-left"></i>'],
        lazyLoad: true,
        rtl: true,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 2
            },
            600: {
                items: 3
            },
            992: {
                items: 4
            },
            1000: {
                items: 4
            }
        }
    });
  </script>
  <script>
      $('.slider-history').owlCarousel({
        loop: false,
        margin: 10,
        autoplayTimeout: 6000,
        smartSpeed: 1500,
        nav: true,
        navText: ['<i class="fa-solid fa-arrow-right"></i>', '<i class="fa-solid fa-arrow-left"></i>'],
        lazyLoad: true,
        rtl: true,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 2
            },
            600: {
                items: 3
            },
            992: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    });
  </script>
  </body>
</html>