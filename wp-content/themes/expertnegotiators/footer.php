 <footer>
      <div class="button-to-top">
        <img src="<?php echo img_src(); ?>footer-arrow.png" alt="">
      </div>
      <div class="footer">
        <div class="footer-lists">
          <ul class="footer-links">
            <li>
              <a href="">
                Acasa
              </a>
            </li>
            <li>
              <a href="">
                Despre Noi
              </a>
            </li>
            <li>
              <a href="">
                Servicii
              </a>
            </li>
            <li>
              <a href="">
                Blog
              </a>
            </li>
            <li>
              <a href="./pages/contact.html">
                Contact
              </a>
            </li>
          </ul>

          <div class="footer-social">
            <a href="">
              <div class="social-img">
                <img src="<?php echo img_src(); ?>facebook.png" alt="" />
              </div>
            </a>

            <a href="">
              <div class="social-img">
                <img src="<?php echo img_src(); ?>linkedin.png" alt="" />
              </div>
            </a>

            <a href="">
              <div class="social-img">
                <img src="<?php echo img_src(); ?>twitter.png" alt="" />
              </div>
            </a>
          </div>
        </div>

        <div class="footer-logo">
          <img src="<?php echo img_src(); ?>footer-logo.png" alt="" />
        </div>

        <div class="newsletter">
          <div class="newsletter-text">
            <h1>NEWSLETTER</h1>
            <p>Ramai conectat cu cele mai noi oferte...</p>
          </div>
          <div class="newsletter-form-container">
            <form action="POST">
              <input
                id="newsletter"
                placeholder="Email..."
                type="email"
                name="newsletter"
              />
            </form>
          </div>
        </div>
      </div>
      <div class="copyright">
        @2020 Expert Negotiators. All rights reserved.
        <a href=""> Terms of use</a> and <a href="">Privacy Policy.</a>
      </div>
    </footer>
     <script src="<?php echo script_src(); ?>hp.js"></script>
    <script src="<?php echo script_src(); ?>nav.js"></script>
  </body>
</html>
