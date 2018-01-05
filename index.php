<?php session_start() ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://signaltrace.net" />
    <meta property="og:title" content="signal.trace()">
    <meta property="og:image" content="https://signaltrace.net/assets/img/st-badge.png">
    <meta property="og:description" content="Software design and development consulting, from start to finish.">
    
    <title>signal.trace() | Software design and development consulting, from start to finish.</title>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-ND6KJVW');</script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href="assets/vendor/css/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/css/slick/slick-theme.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <?php

      $manifest = file_get_contents("assets/manifest.json");
      $json = !empty($manifest) ? json_decode($manifest, true) : NULL;
      $css = [];
      $js = [];

      if(!empty($json) && !empty($json['main'])){
        foreach($json['main'] as $file){
          if(strpos($file, ".js") !== FALSE){
            array_push($js, $file);
          }
          if(strpos($file, ".css") !== FALSE){
            array_push($css, $file);
          }
        }
      }
    ?>
    <?php foreach($css as $file) : ?>
      <link rel="stylesheet" href="assets/<?php echo $file; ?>">
    <?php endforeach; ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
      <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ND6KJVW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <span class="layout-large"></span>
    <span class="layout-medium"></span>
    <span class="layout-small"></span>

    <div id="about" class="row header">
      <div class="hero">
        <h1><img class="badge-brand" src="assets/img/st-badge.png" alt="SignalTrace logo">signal.trace</h1>
        <p>Hey there! My name is Jeff, and I'm a web developer currently living in Connecticut but
          working remotely from anywhere that I can find a WiFi signal.
          I'm a lifelong geek and lover of all things technology-related, and I would love to work on your next
          project.
        </p>
        <p>
          I've worn many hats throughout my career so I have a fairly diverse skillset ranging from front-end design
          and development using HTML/CSS/JS, back-end development using C#/PHP/Ruby, all the way down to server administration,
          virtualization, and cloud solutions.
        </p>
        <p>Want a more formalized list of my qualifications? <a href="resume/" target="_blank">Here you go.</a></p>
        <a href="resume/"><img src="assets/img/headshot.jpg" class="badge badge--headshot" alt="Jeff Glenn"></a>
        <div class="social-icons">
          <a href="https://github.com/signaltrace-dev/"><i class="fa fa-github"></i></a>
          <a href="https://www.linkedin.com/in/signaltrace"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.drupal.org/u/signaltrace"><i class="fa fa-drupal"></i></a>
          <a href="https://twitter.com/ThatJeffGlenn"><i class="fa fa-twitter"></i></a>
        </div>

        <div class="nav menu-centered">
          <ul class="menu">
            <li><a href="#about" data-section="about">About</a></li>
            <li><a href="#work" data-section="work">Work</a></li>
            <li><a href="#skills" data-section="skills">Skills</a></li>
            <li><a href="#contact" data-section="contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="work" class="section-body row medium-up-3 large-up-4 work">
        <h2 class="section-title">Work</h2>
        <p>Want to see what I've done? Here's a sampling of projects that I have worked on, grouped by client. These projects include a mix of
          content management systems (Sitecore, Drupal, WordPress, proprietary systems) as well as web applications that were
          built from the ground up.</p>
          <div id="projects">
            <div class="grid-x grid-margin-x">
              <project-group v-for="group in projectData" :group="group" :selected-group="selectedGroup" v-on:group-selected="showProjects"></project-group>
            </div>
            <div id="project-list" class="grid-x grid-margin-x projects-wrapper" v-show="selectedProjects.length > 0">
              <project v-for="project in selectedProjects" :project-data="project"></project>
            </div>
          </div>
    </div>
    <div id="skills" class="row content skills">
      <div class="large-12 columns">
        <div class="section-body">
          <h2 class="section-title">Skills</h2>
          <p>I started dabbling in programming <a target="_blank" href="files/dracula.pdf">at a young age</a> without any real goal other than to have fun with it
            and make things. Over time I decided to turn it into a career and have been lucky enough to work with some
            really great folks in a number of different settings, from higher education to healthcare.</p>
          <p>I've always tried to keep my skills well rounded and love getting a chance to play with any kind of new or
            interesting technologies. I specialize in front-end development (HTML / CSS / Javascript), back-end development (C# / PHP / Ruby on Rails),
            content management systems (Sitecore / Sitefinity / Drupal / WordPress), Windows and Linux server administration, virtualization using VMWare ESXi, shell scripting, and
            Amazon Web Services (EC2, S3, SES).</p>
        </div>
      </div>
    </div>
    <div id="contact" class="row content contact">
      <div class="large-12 columns">
        <div class="section-body">
          <h2 class="section-title">Contact</h2>
          <h3 class="section-subheader">So what do you think? Want to team up and make something cool?</h3>
          <div id="contact-form" class="clearfix">
              <?php
                $cf = array();
                $sr = false;

                if(isset($_SESSION['cf_returndata'])){
                    $cf = $_SESSION['cf_returndata'];
                    $error_fields = !empty($cf['error_fields']) ? $cf['error_fields'] : array();
                    $sr = true;
              }?>
              <div class="callout alert  <?php echo ($sr && !$cf['form_ok']) ? 'visible' : 'hidden'; ?>">
                <h5>Whoops, looks like we're missing something!</h5>
                    <?php
                    if(isset($cf['errors']) && sizeof($cf['errors']) > 0) : ?>
                      <ul id="errors" class="no-bullet">
                      <?php foreach($cf['errors'] as $error) : ?>
                        <li><?php echo $error ?></li>
                      <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                </ul>
              </div>

              <p id="success" class="panel callout success radius <?php echo ($sr && $cf['form_ok']) ? 'visible' : 'hidden'; ?>">Hey, thanks for getting in touch! You're awesome!</p>
              <form method="post" action="signalmail.php">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <label for="name" class="text-right middle <?php echo !empty($error_fields['name']) ? 'error' : '' ?>" >Name: <span class="required">*</span></label>
                  </div>
                  <div class="small-7 cell">
                    <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="A Cool Person" required <?php echo ($sr && $cf['form_ok']) ? 'autofocus' : ''; ?> />
                  </div>
                </div>
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <label for="email" class="text-right middle <?php echo !empty($error_fields['email']) ? 'error' : '' ?>">Email: <span class="required">*</span></label>
                  </div>
                  <div class="small-7 cell">
                    <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="coolperson@domain.com" required />
                  </div>
                </div>
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <label for="message" class="text-right middle <?php echo !empty($error_fields['message']) ? 'error' : '' ?>">Details: <span class="required">*</span></label>
                  </div>
                  <div class="small-7 cell">
                    <textarea id="message" name="message" placeholder="Some super cool idea" required rows="6"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                  </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="small-3 cell"></div>
                    <div class="small-7 cell">
                      <div class="g-recaptcha" data-sitekey="6LcFaz8UAAAAAEuQB0Jlo70L_9sAQSC5rSV0j4f3"></div>
                    </div>
                </div>
                <em><span class="required">*</span> indicates a required field</em>
                <p><input type="submit" class="button btn-submit expanded" value="Get In Touch!" name="formsubmit"></input></p>
              </form>
              <?php unset($_SESSION['cf_returndata']); ?>
          </div>

          <div class="contact-email">
            Don't feel like using the form? No problem, just send me an email at <a href="mailto:jeff@signaltrace.net">jeff@signaltrace.net</a>!
          </div>
        </div>
      </div>
    </div>
    <div class="row footer"></div>
    <script src="//code.jquery.com/jquery-latest.js"></script>
  </body>
  <footer id="footer">
    <script src="/assets/vendor/js/respond/respond.min.js"></script>
    <?php foreach($js as $file) : ?>
      <script src="/assets/<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-41555307-1', 'signaltrace.net');
       ga('send', 'pageview');
    </script>
  </footer>
</html>
