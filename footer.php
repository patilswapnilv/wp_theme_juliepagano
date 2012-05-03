    <footer>
      <div id='ribbon'>
        <div class='top_edge'></div>
        <div class='container'>
          <div class='row'>
            <section class='social one-third column'>
              <div class='clearfix' id='twitter'>
                <h4>
                  <a href="http://twitter.com/juliepagano">@juliepagano</a>
                </h4>
                <ul class='clearfix' id='twitter_update_list'></ul>
              </div>
            </section>
            <section class='one-third column'>
              Section.
            </section>
            <section class='about one-third column'>
              <h3>About Me</h3>
              <div class='photo'></div>
              <p>I am a software engineer based in Pittsburgh, PA.  I tend to focus on user experience and front-end web development.  In my free time, I like to indulge my geeky interests and play with my cat (I am a cat lady in training).</p>
            </section>
          </div>
          <div class='row'>
            <ul class='social'>
              <li class='twitter'>
                <a href="http://twitter.com/juliepagano">Twitter</a>
              </li>
              <li class='github'>
                <a href="http://github.com/juliepagano">Github</a>
              </li>
              <li class='linkedin'>
                <a href="http://www.linkedin.com/pub/julie-pagano/8/57b/aaa">LinkedIn</a>
              </li>
              <li class='facebook'>
                <a href="http://www.facebook.com/julie.pagano">Facebook</a>
              </li>
              <li class='googleplus'>
                <a href="http://plus.google.com/106821554349844606311">Google+</a>
              </li>
              <li class='tumblr'>
                <a href="http://juliepagano.tumblr.com/">Tumblr</a>
              </li>
            </ul>
          </div>
        </div>
        <div class='bottom_edge'></div>
      </div>
      <div class='container' id='footer_menu'>
        <div class='eight columns'>
          <ul class='nav'>
            <li>
              <a class="index active" href="index">home</a>
            </li>
            <li>
              <a class="about" href="about">about</a>
            </li>
            <li>
              <a class="blog" href="blog">blog</a>
            </li>
            <li>
              <a class="contact" href="contact">contact</a>
            </li>
          </ul>
        </div>
        <div class='copyright eight columns'>© 2011 Julie Pagano. All Rights Reserved.</div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>

  <!-- Imported js from main site -->
  <script src="<?php bloginfo( 'template_directory' ); ?>/javascripts/twitter.js" type="text/javascript"></script>
  <script src="http://twitter.com/javascripts/blogger.js" type="text/javascript"></script>
  <script src="http://api.twitter.com/1/statuses/user_timeline.json?screen_name=juliepagano&callback=twitterCallback&include_rts=true&count=3" type="text/javascript"></script>
</html>