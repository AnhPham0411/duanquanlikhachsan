<footer class="site-footer">
    <div class="container">


      <div class="row">
        <div class="col-md-4">
          <h3 class="footer-heading mb-4 text-white">About</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
          <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-6">
              <h3 class="footer-heading mb-4 text-white">Ministries</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Children</a></li>
                  <li><a href="#">Women</a></li>
                  <li><a href="#">Bible Study</a></li>
                  <li><a href="#">Church</a></li>
                  <li><a href="#">Missionaries</a></li>
                </ul>
            </div>
          </div>
        </div>


        <div class="col-md-2">
          <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
            <div class="col-md-12">
              <p>
                <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

              </p>
            </div>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>
</div>

<script src="{{ asset('hotel/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('hotel/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('hotel/js/jquery-ui.js') }}"></script>
<script src="{{ asset('hotel/js/popper.min.js') }}"></script>
<script src="{{ asset('hotel/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('hotel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('hotel/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('hotel/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('hotel/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('hotel/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('hotel/js/aos.js') }}"></script>


<script src="{{ asset('hotel/js/mediaelement-and-player.min.js') }}"></script>

<script src="{{ asset('hotel/js/main.js') }}"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
              var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

              for (var i = 0; i < total; i++) {
                  new MediaElementPlayer(mediaElements[i], {
                      pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                      shimScriptAccess: 'always',
                      success: function () {
                          var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                          for (var j = 0; j < targetTotal; j++) {
                              target[j].style.visibility = 'visible';
                          }
                }
              });
              }
          });
  </script>
