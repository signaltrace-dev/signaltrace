<?php session_start() ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signal.trace() | Software design and development consulting, from start to finish.</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/featherlight.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

  </head>
  <body>
    <span class="layout-large"></span>
    <span class="layout-medium"></span>
    <span class="layout-small"></span>

    <div id="about" class="row header">
      <div class="hero">
        <h1><img class="badge-brand" src="img/st-badge.png" alt="SignalTrace logo">signal.trace</h1>
        <p>Hey there! My name is Jeff, and I'm a full stack web developer currently based out of Atlanta, Georgia but
          working remotely from anywhere that I can find a WiFi signal.
          I'm a lifelong geek and lover of all things technology-related, and I would love to work on your next
          project.
        </p>
        <p>
          I've worn many hats throughout my career so I have a fairly diverse skillset ranging from front-end design
          and development using HTML/CSS/JS, back-end development using C#/PHP/Ruby, all the way down to server administration,
          virtualization, and cloud solutions.
        </p>
        <p>Want a more formalized list of my qualifications? <a href="resume/">Here you go.</a></p>
        <a href="resume/"><img src="img/headshot.png" class="badge" alt="Jeff Glenn"></a>
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
      <div id="navscroll"></div>
    </div>
    <div id="work" class="section-body row medium-up-3 large-up-4 work">
        <h2 class="section-title">Work</h2>
        <p>This is a sampling of projects that I have worked on, grouped by client. These projects include a mix of
          content management systems (Drupal, WordPress, proprietary systems) as well as web applications that were
          built from the ground up.</p>
        <div class="row medium-up-3 large-up-4">
          <div class="column">
            <img class="thumbnail" data-client="avid" src="img/avid.png" alt="AVID Design logo">
          </div>
          <div class="column">
            <img class="thumbnail" data-client="rp" src="img/rp-logo.png" alt="ResearchPipe logo">
          </div>
          <div class="column">
            <img class="thumbnail" data-client="wsw" src="img/wsw-logo.png" alt="WebsiteWorker logo">
          </div>
          <div class="column">
            <img class="thumbnail" data-client="uga" src="img/uga-logo.jpg" alt="University of Georgia logo">
          </div>
        </div>
        <div id="projects" class="row medium-up-3 large-up-4 projects-wrapper"></div>

    </div>
    <div id="skills" class="row content skills">
      <div class="large-12 columns">
        <div class="section-body">
          <h2 class="section-title">Skills</h2>
          <p>I started dabbling in programming <a target="_blank" href="files/dracula.pdf">at a young age</a> without any real goal other than to have fun with it
            and make things. Over time I decided to turn it into a career and have been lucky enough to work with some
            really great folks in a number of different settings, from higher education to healthcare.</p>
          <p>I've always tried to keep my skills well rounded and love getting a chance to play with any kind of new or
            interesting technologies. I primarily focus on front-end development (HTML / CSS / Javascript), back-end development (C# / PHP / Ruby on Rails),
            content management systems (Drupal / WordPress), Windows and Linux server administration, virtualization using VMWare ESXi, shell scripting, and
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
              //init variables
              $cf = array();
              $sr = false;

              if(isset($_SESSION['cf_returndata'])){
                  $cf = $_SESSION['cf_returndata'];
                  $error_fields = !empty($cf['error_fields']) ? $cf['error_fields'] : array();
                  $sr = true;
              }?>
              <ul id="errors" class="no-bullet <?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                  <?php
                  if(isset($cf['errors']) && count($cf['errors']) > 0) :
                      foreach($cf['errors'] as $error) :
                  ?>
                  <li><?php echo $error ?></li>
                  <?php
                      endforeach;
                  endif;
                  ?>
              </ul>
              <p id="success" class="panel callout radius <?php echo ($sr && $cf['form_ok']) ? 'visible' : 'hidden'; ?>">Hey, thanks for getting in touch! You're awesome!</p>
              <form method="post" action="signalmail.php">
                <div class="row">
                  <div class="small-3 columns">
                    <label for="name" class="inline <?php echo !empty($error_fields['name']) ? 'error' : '' ?>" >Name: <span class="required">*</span></label>
                  </div>
                  <div class="small-9 columns">
                    <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="A Cool Person" required <?php echo ($sr && $cf['form_ok']) ? 'autofocus' : ''; ?> />
                  </div>
                </div>
                <div class="row">
                  <div class="small-3 columns">
                    <label for="email" class="inline <?php echo !empty($error_fields['email']) ? 'error' : '' ?>">Email: <span class="required">*</span></label>
                  </div>
                  <div class="small-9 columns">
                    <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="coolperson@domain.com" required />
                  </div>
                </div>
                <div class="row">
                  <div class="small-3 columns">
                    <label for="message" class="inline <?php echo !empty($error_fields['message']) ? 'error' : '' ?>">Details: <span class="required">*</span></label>
                  </div>
                  <div class="small-9 columns">
                    <textarea id="message" name="message" placeholder="Some super cool idea" required rows="6"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                  </div>
                </div>

                  <span id="loading"></span>
                  <em><span class="required">*</span> indicates a required field</em>
                  <p><input type="submit" class="button btn-submit expanded" value="Get In Touch!"></input></p>

              </form>
              <?php unset($_SESSION['cf_returndata']); ?>
          </div>

          <div class="contact-email">
            Don't feel like using the form? Just send me an email at <a href="mailto:jeff@signaltrace.net">jeff@signaltrace.net</a>!
          </div>
        </div>
      </div>
    </div>
    <div class="row footer"></div>
  </body>
  <footer>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/vendor/headhesive.min.js"></script>
    <script src="js/vendor/featherlight.min.js"></script>
    <script src="js/app.js"></script>
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
