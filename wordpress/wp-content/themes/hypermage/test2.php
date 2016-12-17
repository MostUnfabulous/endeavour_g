<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

<?php get_header(); ?>


<div id="wrapper">

  <!-- Intro -->
    <section id="intro" class="wrapper style0 fullscreen fade-up">
      <div class="inner">
        <h1>ENDEAVOUR</h1>
        <p>A chilled out semi-hardcore raiding guild on Magtheridon-EU.
      </br>Currently recruiting awesome, like-minded players for Mythic progression.
    </br>Scroll down or talk to one of us in-game for more info!</p>
        <ul class="actions">
          <li><a href="#one" class="button scrolly">Learn More</a></li>
        </ul>
      </div>
    </section>

  <!-- One -->
    <section id="one" class="wrapper style2 spotlights">

      <section>
      <a href="<?php the_permalink(); ?>" class="image"><img src="images/odynhc.jpg" alt="" data-position="top center" /></a>
      <div class="content">

        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="inner">
          <h2>"Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <h4><?php the_time( 'j s F' ); ?></h4>
          <p><?php the_content(); ?></p>
            <ul class="actions">
            </ul>
          </div>
        </div>
      </section>
    <?php else : ?>
    <?php endif; ?>


    </section>

  <!-- Two -->
    <section id="two" class="wrapper style3 fade-up">
      <div class="inner">
        <h2>About Us</h2>
        <p>Endeavour was founded shortly after the release of Legion. We're a new guild, but our raid team is almost entirely
          comprised of veteran players - most of us have been raiding since Classic
          - and while we're serious about progression, we have a very chilled out, laid-back attitude to raiding.</p>
          <div class="features">
          <section>
            <span class="icon major fa-calendar"></span>
            <h3>Raid Schedule</h3>
            <p>Progression raids are on Sunday, Monday and Wednesday, 8PM - 11PM Server time (7PM - 10PM UK time). Raiders must be
              able to attend at least 2 out of 3 of these!</p>
          </section>
          <section>
            <span class="icon major fa-heart"></span>
            <h3>Be Prepared!</h3>
            <p>Raiders must bring a plentiful supply of potions, flasks and buff food to all progression runs. Your gear must be socketed
              and enchanted with stats most appropriate to your spec.</P>
            </section>
            <section>
              <span class="icon major fa-diamond"></span>
              <h3>Rags to Riches</h3>
              <p>New members join the guild as a Trial. We'll promote you to Raider
                after you prove your worth in battle! Social members are also gladly welcome.
              </p>
              </section>
          <section>
            <span class="icon major fa-bolt"></span>
            <h3>Interface Addons</h3>
            <p>We only ask that our raiders use the latest version of Deadly Boss Mods or BigWigs. It's up to you if you want to
              use additional addons to help enhance your gameplay.</P>
            </section>
            <section>
              <span class="icon major fa-users"></span>
              <h3>Stay Awhile and Listen</h3>
              <p>Everyone's expected to be on Discord during raids, but we encourage you to come on and chat with us even when we aren't
                raiding!
                <a href="https://discord.gg/VmVDjva" class="button big" style="margin;">https://discord.gg/VmVDjva</a></p></P>
              </section>
          <section>
            <span class="icon major fa-snowflake-o"></span>
            <h3>Be Yourself!</h3>
            <p>Be active, friendly and most importantly, remember to have fun - and we're sure you'll fit right in.
            <a href="roster.html" class="button big" style="margin-left:25%;">Roster</a></p></P>
            </section>
        </div>
      </div>
    </section>

    <section id="three" class="wrapper style1 fade-up">
      <div class="inner">
        <h2>Apply Now!</h2>
        <section>
            <form method="post" name="application" action="applicationpost.php">
              <div class="field half first">
                <label for="name">Character Name</label>
                <input type="text"  name="name" id="name" required >
              </div>
              <div class="field half">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required />
              </div>
              <div class="field ">
                <label for="arm"></br>Armoury Link</label>
                <input type="text" name="link" id="link" required/>
              </div>
              <div class="field">
                <label for="join"></br>Why do you want to join Endeavour?</label>
                <textarea name="join" id="join" rows="3" required></textarea>
                <div class="field">
                  <label for="exp"></br>Tell us a bit about your raiding experience!</label>
                  <textarea name="exp" id="exp" rows="3" required></textarea>
                </div>
                <div class="field">
                  <label for="exp"></br>Anything else you'd like to add?</label>
                  <textarea name="other" id="other" rows="3"></textarea>
                </div>
              </div>
              <ul class="actions">
                <li><input type="submit" name='submit' value="Send Application"></li>
              </ul>
            </form>
          </section>
          <section>
      </div>
    </section>
    </div>


    </div>
    </section>

  <!-- Three -->
  <?php get_sidebar(); ?>



<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/jquery.tubular.js"></script>
<script type="text/javascript" charset="utf-8" src="assets/js/index.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>