



<footer id="footer-main">
<div class="container" style="background-color: #222">
  <div class="row">
    <div class="col-sm-2">
          <h6 class="mt-2" style="color: grey;">Contact Us</h6>
          <address>
            iTSU Department
            <br> P.O. Box 256, Takoradi
            <br>
          </address>
          <address>
            <abbr title="Phone">Phone:</abbr>
            (020) 857-6440
            <br>
            <abbr title="Email">Email:</abbr>
            <a href="mailto:#">itsu@ttu.edu.gh</a>
          </address>
        </div>

        <div class="col-sm-2">
      <h6 class="mt-2" style="color: grey;">Academics</h6>
      <ul class="list-unstyled ">
        <li> <a class="js-scroll-trigger text-white" href="index.php#academic_calendar">Academic Calendar</a></li>
        <li> <a class="js-scroll-trigger text-white" href="index.php#accordion">Lectures</a></li>
        <li> <a class="js-scroll-trigger text-white" href="#">Teaching time table</a></li>
        <li> <a class="js-scroll-trigger text-white" href="#">Past Question</a></li>
      </ul>
    </div>



    <div class="col-sm-2">
      <h6 class="mt-2" style="color: grey;">News &amp; Event</h6>
      <ul class="list-unstyled">
        <li> <a class="js-scroll-trigger text-white" href="index.php#latestNews">Latest News</a></li>
        <li> <a class="js-scroll-trigger text-white" href="index.php#upcomingEvent">Upcoming Event(s)</a></li>
        <li> <a href="photosGallery.php" class="text-white">Photos Gallery</a></li>
      </ul>
    </div>

    <div class="col-sm-3">
      <h6 class="mt-2" style="color: grey;">Quick links</h6>
      <ul class="list-unstyled">
        <li> <a href="https://ttuportal.com" class="text-white" target="_blank">Student portal</a></li>
        <li> <a href="https://records.ttuportal.com" class="text-white" target="_blank">Semester registration stpes</a></li>
        <li> <a href="https://qualityassurance.ttu.edu.gh" class="text-white" target="_blank">Lectures Assessement</a></li>
        <li> <a href="https://liaison.com " target="_blank" class="text-white">Industrial Liason</a></li>
      </ul>
    </div>

    <div class="col-sm-3">
      <h6 class="mt-2" style="color: grey;">What we do</h6>
      <ul class="list-unstyled">
        <li>Web Application Development</li>
        <li>Desktop Application Development</li>
        <li>Mobile Application Development</li>
        <li>Networking</li>
      </ul>
    </div>

  </div>
</div>
</footer>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script type="text/javascript">
    $('body').on('mouseenter mouseleave','.dropdown',function(e){
        var _d=$(e.target).closest('.dropdown');_d.addClass('show');
        setTimeout(function(){
            _d[_d.is(':hover')?'addClass':'removeClass']('show');
        },900);
    });
</script>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>

</body>

</html>
