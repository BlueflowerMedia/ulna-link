<?php get_header(); ?>

<!-- section header -->

<!-- <section id="section-header">
  <div class="flex-row">
    <div class="flex-column">
      <img id="img-logo" src="<?php echo get_template_directory_uri(); ?>/images/ulna-link-final-logo.svg" alt="ULNA LINK logo">
    </div>
    <div class="flex-column" id="logo-text">
      ULNA LINK
    </div>
  </div>

</section> -->

<!-- section description -->
<section id="section-desc">
<div class="flex-row all-list">
  <div class="list-left flex1">
    <h2 id="rcorner">Social Media and meta job search platform for Medical community.
      <!-- <p>We also help recruitment firms, private companies, and more!</p> -->
    </h2>
  </div>
  <div class="list-right flex1">
    <img id="img1" src="<?php echo get_template_directory_uri(); ?>/images/ulna-animation-final.gif" alt="">
  </div>
</section>

<!-- Blank space between header and banner-->
<section class="blank-space">
  <div class="blank-space">

  </div>
</section>

<!--banner-->
<section class="banner">

  <div class="triangle">

  </div>
  <div class="container flex-row">
    <div class="list-left flex">
      <p id="box">1</p>
    </div>
    <div id="1" class="list-right flex">
      <p id="top">Search around the world with advanced filters.</p>
      <p id="bottom">This is a uesful tool to work with, it will help assist finding better offers.</p>
    </div>
  </div>

  <div class="container flex-row">

    <div class="list-left flex">
      <p id="box-white"></p>
      <img class="tree" id="tree1" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">

    </div>
    <div class="list-left flex">
      <p id="box">2</p>
    </div>


    <div id="2" class="list-right flex">
      <p id="top">Auto share information through social media.</p>
      <p id="bottom">Selected your profession? Great, create connection on this niche website.</p>
    </div>
  </div>

  <div class="container flex-row">

    <div class="list-left flex">
      <p id="box-white"></p>
      <img class="tree"  id="tree2" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    </div>
    <div class="list-left flex">
      <p id="box-white"></p>
      <img class="tree" id="tree3" src="<?php echo get_template_directory_uri(); ?>/images/ulna-dark-green-tree.png" alt="">
      <img class="tree" id="tree4" src="<?php echo get_template_directory_uri(); ?>/images/ulna-dark-green-tree.png" alt="">

    </div>

    <div class="list-left flex">
      <p id="box">3</p>
    </div>
    <div  id="3" class="list-right flex">
      <p id="top">Free to use community focussed services.</p>
      <p id="bottom">Need extra features? Get a premium account by inviting friends<br> and other businesses.</p>
    </div>
  </div>
</section>

<!-- Blank space between banner and description-->
<section>
  <div class="blank-space-2">
    <img class="tree" id="tree5" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree6" src="<?php echo get_template_directory_uri(); ?>/images/ulna-dark-green-tree.png" alt="">
    <img class="tree" id="tree7" src="<?php echo get_template_directory_uri(); ?>/images/ulna-dark-green-tree.png" alt="">
    <img class="tree" id="tree8" src="<?php echo get_template_directory_uri(); ?>/images/ulna-dark-green-tree.png" alt="">
    <img class="tree" id="tree9" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree10" src="<?php echo get_template_directory_uri(); ?>/images/ulna-dark-green-tree.png" alt="">
    <img class="tree" id="tree11" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree12" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree13" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree14" src="<?php echo get_template_directory_uri(); ?>/images/ulna-dark-green-tree.png" alt="">
    <img class="tree" id="tree15" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree16" src="<?php echo get_template_directory_uri(); ?>/images/ulna-dark-green-tree.png" alt="">
  </div>
</section>

<!-- description section -->

<section id="section-description">
  <div class="img-hospital">
    <img id="img1" src="<?php echo get_template_directory_uri(); ?>/images/ulna-hospital.svg" alt="">
  </div>
<div class="text-description">
    <h2 id="rcorner1">About Us
      <p>This  site is  dedicated  to  one  niche  in  particular:<br>Medical  field.  It  can  be  anyone  starting  from  Personal  Support  Worker  (PSW)who  just  finished  their  placement  and  obtained  certeficate,  and  ending  up  withRegistered  Nurses  (RN),  Doctors  e.t.c...  As  a  client,  all  your  job  is  to  follow  job  listing  news  and  information  board  for  monthly  updates,  once  registered.  If  you  are  employeryour  task  is  to  upload  work  order  and  wait  for  responce.</p>
    </h2>
  </div>
</section>

<!-- signup section -->
<section id="section-sign-up">
  <h1>Sign Up Today!</h1>
  <h2>For news updates.</h2>
    <div class="container flex-row">
      <div class="employer flex1">
        <img id="pic-employer" src="<?php echo get_template_directory_uri(); ?>/images/ulna-employer.png" alt="">
        <div class="employer-form">
          <h2>Employer</h2>
            <?php echo do_shortcode('[contact-form-7 id="11" title="Sign Up Form"]') ?>
        </div>
      </div>

      <div class="job-seeker flex1">
        <img id="pic-job-seeker" src="<?php echo get_template_directory_uri(); ?>/images/ulna-job-seeker.png" alt="">
      <div class="job-seeker-form">
        <h2>Job Seeker</h2>
          <?php echo do_shortcode('[contact-form-7 id="15" title="Sign Up Form"]') ?>
        </div>
      </div>
    </div>
</section>

<!-- Blank space between signup and contact-->
<section>
  <div class="blank-space-3">
    <img class="tree" id="tree17" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree18" src="<?php echo get_template_directory_uri(); ?>/images/ulna-dark-green-tree.png" alt="">
    <img class="tree" id="tree19" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree20" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree21" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree22" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree23" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree24" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
    <img class="tree" id="tree25" src="<?php echo get_template_directory_uri(); ?>/images/ulna-light-green-tree.png" alt="">
</section>

<!-- Contact Section -->
<section id="section-contact-us">
  <div class="container flex-row">
    <div class="contact flex1">
      <h2>Contact Us</h2>
      <p>We would love to help you with all of your recruitment/hiring questions. You will hear back us within 24 hours.</p>
      <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="14" title="Contact Us"]') ?>
      </div>
    </div>

    <div class="trees flex1">

    </div>

</section>

<?php get_footer(); ?>
