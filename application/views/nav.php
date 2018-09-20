<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="<?=site_url()?>" class="probootstrap-logo visible-lg">Baba Ojonugwa Movement<span>.</span></a>
        <a href="<?=site_url()?>" class="probootstrap-logo visible-xs visible-md">B O M <span>.</span></a>
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="<?=$active==='home'?'active':''?>"><a href="<?=site_url()?>">Home</a></li>
            <li class="<?=$active==='about'?'active':''?>"><a href="<?=site_url()?>welcome/about">About</a></li>
            <li class="<?=$active==='volunteer'?'active':''?>"><a href="<?=site_url()?>welcome/volunteer">Volunteer</a></li>
            <li class="<?=$active==='contact'?'active':''?>"><a href="<?=site_url()?>welcome/contact">Contact</a></li>
            <li class="<?=$active==='donate'?'active':''?>"><a href="portfolio.html">Donate</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>