

  <div class="probootstrap-loader"></div>

  <?php $this->load->view('nav')?>
  <!-- END: header -->
  <div class="probootstrap-main-content">
    <section class="probootstrap-slider flexslider">
      <ul class="slides">
         <!-- class="overlay" -->
        <li style="background-image: url(<?=base_url()?>assets/img/slider_1.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                 <h1 class="probootstrap-heading probootstrap-animate mb20 visible-md visible-xs" style="font-size: 42px;">Contact us</h1>
                  <h1 class="probootstrap-heading probootstrap-animate mb20 visible-lg">Contact us</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap mb30 visible-lg">Your Mandate for my Stewardship, that's the contract I am signing with the voters of Ankpa, Olamaboro, Omala Federal Constiituency</div>

                  <div class="probootstrap-animate probootstrap-sub-wrap mb30 visible-md visible-xs" style="font-size: 17px !important;">Your Mandate for my Stewardship, that's the contract I am signing with the voters of Ankpa, Olamaboro, Omala Federal Constiituency</div>
                  <p class="probootstrap-animate"><a href="#" class="btn btn-ghost btn-ghost-white">Volunteer for the Cause</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
        
      </ul>
    </section>
    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container-fluid">
        <div class="section-heading text-center">
          <h2 class="mt0 mb0">Let's meet and talk!</h2>
        </div>
      </div>
    </section>
    
    <section class="probootstrap-half">
      <div class="image-wrap">
        <div class="image" style="background-image: url(<?=base_url()?>assets/img/slider_8.jpg);">
          <div id="map"></div>
        </div>
      </div>
      <div class="text">
        <form action="#" method="post" class="probootstrap-form mb60">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message">
          </div>
        </form>

        <div class="row">
          <div class="col-md-12">
            <h4>Contact Information</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
              <li><i class="icon-mail"></i><span>info@domain.com</span></li>
              <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    
<script>
  // Initialize and add the map
  function initMap() {
    // The location of Uluru
    var uluru = {lat: -25.344, lng: 131.036};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdArUD27F9hW0HubWRQfR53pdaMnXRlPc&callback=initMap">
</script>
    

