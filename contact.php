 <!--Include Header***-->
  <?php  
    $path = $_SERVER['DOCUMENT_ROOT'] ;
    $path .= "/includes/header.php";
    include ($path);
  ?>



  <div class="surrounding-padding-col container">
    <div class="container one-thousand-centered-cont">
      <h2>GET CONNECTED</h2>
      <p class="paragraph">Get yourself ready for an awesome experience.</p>
      <div class="container team-gallery-cont">
        <div class="responsive-picture team-gallery-img">
          <picture><img alt="Placeholder Picture" src="./images/team-1.jpg">
          </picture>
        </div>
        <div class="responsive-picture team-gallery-img">
          <picture><img alt="Placeholder Picture" src="./images/team-4.jpg">
          </picture>
        </div>
        <div class="responsive-picture team-gallery-img">
          <picture><img alt="Placeholder Picture" src="./images/team-2.jpg">
          </picture>
        </div>
        <div class="responsive-picture team-gallery-img">
          <picture><img alt="Placeholder Picture" src="./images/team-3.jpg">
          </picture>
        </div>
      </div>
      <div class="container team-social-content-cont">
        <div class="container team-lets-talk-cont">
          <h2>Let's talk</h2>
          <p class="paragraph">We welcome you to contact us for more information.</p>
        </div>
        <div class="container lets-talk-social-cont">
          <a href="https://www.facebook.com/Football-Advice-130803807568007/" target="_blank" class="social-image lets-talk-social-icon">
            <img class="facebook-icon" src="./socialicons/webicon-facebook.png" alt="Social Icon">
          </a>
          <a href="https://www.instagram.com/advicefootball/" target="_blank" class="social-image lets-talk-social-icon">
            <img class="twitter-icon" src="./socialicons/webicon-twitter.png" alt="Social Icon">
          </a>
          <a href="#" target="_blank" class="social-image lets-talk-social-icon">
            <img class="youtube-icon" src="./socialicons/webicon-youtube.png" alt="Social Icon">
          </a>
        </div>
      </div>
    </div>
  </div>

  <section class="contact-us-section">
    <div class="row medium-unstack" style="display: flex;">
      <div class="columns contact-us-section-left">
        <h1 class="contact-us-header">Get In Touch</h1>

        <ul class="contact-us-list">
          <li class="address">Germany</li>
          <li class="email"><a href="mailto:">info AT footballadvice.de</a></li>
          <li class="phone">
            +41 78 830 60 68
          </li>
        </ul>
      </div>
      <div class="columns contact-us-section-right">
        <h1 class="contact-us-header">Mail Us</h1>
        <form class="contact-us-form">
          <input type="text" placeholder="Full name">
          <input type="email" placeholder="Email">
          <textarea name="message" id="" rows="12" placeholder="Type your message here"></textarea>
          <div class="contact-us-form-actions">
            <input type="submit" class="button" value="Send it" />
            <div>
              <label for="FileUpload" class="button contact-us-file-button">Attach Files</label>
              <input type="file" id="FileUpload" class="show-for-sr">
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>


  <!--<div class="surrounding-padding-col contact-large-quote container">
    <div class="container six-hundred-centered-cont contact-large-quote-cont">
      <blockquote class="contact-large-quote-text light">“When I was a kid I used to pray every night for a new bicycle. Then I realised that the Lord doesn't work that way so I stole one and asked Him to forgive me.”</blockquote>
      <span class="text-element contact-large-quote-sign turquoise">E. Philips, CEO —&nbsp;<a title="" href="url.com" class="inline-link turquoise">@ephilipsBMB</a>
      </span>
    </div>
  </div>
  <div class="surrounding-padding-col container">
    <div class="container one-thousand-centered-cont headquarters-cont">
      <div class="container headquarters-text-cont">
        <h2>Our headquarters</h2>
        <p class="paragraph">Paragraph has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
      <div class="container headquarters-gallery-cont">
        <div class="responsive-picture headquarters-gallery-img">
          <picture><img alt="Placeholder Picture" src="./images/headquarters-1.jpg">
          </picture>
        </div>
        <div class="responsive-picture headquarters-gallery-img">
          <picture><img alt="Placeholder Picture" src="./images/headquarters-3.jpg">
          </picture>
        </div>
        <div class="responsive-picture headquarters-gallery-img">
          <picture><img alt="Placeholder Picture" src="./images/headquarters-4.jpg">
          </picture>
        </div>
        <div class="responsive-picture headquarters-gallery-img">
          <picture><img alt="Placeholder Picture" src="./images/headquarters-2.jpg">
          </picture>
        </div>
      </div>
    </div>
  </div>-->
  <div class="surrounding-padding-col-low turquoise-breaker container">
    <div class="container one-thousand-centered-cont newsletter-form-content-cont"><input value="" name="text-name" type="text"><a class="link-button button newsletter-bt" href="#">Subscribe</a>
    </div>
  </div>
  <div class="surrounding-padding-col footer-contact-info container">
    <div class="container one-thousand-centered-cont sample-47-content-cont">
      <div class="container footer-contact-info-cont">
        <a class="link-text footer-contact-info" href="#">Football Advice<br>
        </a>
        <a class="link-text footer-contact-info" href="#">info AT footballadvice.de<br>
        </a>
        <a class="link-text footer-contact-info" href="#">+41 78 830 60 68</a>
      </div>
      <div class="container footer-contact-info-cont">
        <a class="link-text footer-contact-info" href="#">Twitter</a>
        <a class="link-text footer-contact-info" href="#">Instagram<br>
        </a>
      </div>
    </div>
  </div>
  

  <!--Include Footer-->
  <?php 
    $path = $_SERVER['DOCUMENT_ROOT'] ;
    $path .= "/includes/footer.php";
    include ($path);
  ?>
