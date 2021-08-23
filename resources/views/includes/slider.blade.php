<link rel="stylesheet" href="css/slider.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
 <div class="swiper-container">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="slide-inner">
                      <img src="https://pp.userapi.com/c836139/v836139003/63ce1/QThPx7qPzvU.jpg">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(https://pp.userapi.com/c412624/v412624691/4136/_da_uAA6ha8.jpg)"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="slide-inner">
                       <img src="https://pp.userapi.com/c637331/v637331691/48f5f/spHnV42iYVw.jpg">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="slide-inner">
                      <img src="https://pp.userapi.com/c837139/v837139407/67f52/fFqjq4U2mEk.jpg">
                    </div>
                  </div>

                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
              </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
           <script>
                var interleaveOffset = 0.5;

                var swiperOptions = {
                  loop: true,
                  speed: 1000,
                  grabCursor: true,
                  autoplay: true,
                  watchSlidesProgress: true,
                  mousewheelControl: true,
                  keyboardControl: true,
                  navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                  },
                  on: {
                    progress: function() {
                      var swiper = this;
                      for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                          "translate3d(" + innerTranslate + "px, 0, 0)";
                      }
                    },
                    touchStart: function() {
                      var swiper = this;
                      for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                      }
                    },
                    setTransition: function(speed) {
                      var swiper = this;
                      for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-inner").style.transition =
                          speed + "ms";
                      }
                    }
                  }
                };

                var swiper = new Swiper(".swiper-container", swiperOptions);

           </script>
