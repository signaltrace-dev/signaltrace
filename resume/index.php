<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeff Glenn | Web Developer</title>
    <link rel="stylesheet" href="/assets/vendor/css/foundation5.min.css">
    <?php

      $manifest = file_get_contents("../assets/manifest.json");
      $json = !empty($manifest) ? json_decode($manifest, true) : NULL;
      $css = [];
      $js = [];

      if(!empty($json) && !empty($json['resume'])){
        foreach($json['resume'] as $file){
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
      <link rel="stylesheet" href="/assets/<?php echo $file; ?>">
    <?php endforeach; ?>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://signaltrace.net/resume" />
    <meta property="og:title" content="Jeff Glenn - Web Developer">
    <meta property="og:image" content="https://signaltrace.net/resume/img/headshot.png">
  </head>
  <body>
    <div class="row header">
      <div class="large-8 columns header-main">
        <img src="/assets/img/headshot.png" class="badge" alt="Jeff Glenn">
        <h1>Jeff Glenn</h2>
        <h2>Web Developer</h2>
      </div>
      <div class="large-4 columns header-contact">
        <ul class="contact">
          <li>Email: <a href="mailto:jeff@signaltrace.net">jeff@signaltrace.net</a></li>
          <li>Web: <a href="http://signaltrace.net">signaltrace.net</a></li>
          <li>GitHub: <a href="https://github.com/signaltrace-dev">https://github.com/signaltrace-dev</a></li>
          <li>Phone: <a href="tell:17066143341">+1-706-614-3341</a></li>
        </ul>
      </div>
    </div>
    <div class="row content profile">
      <div class="large-3 columns">
        <h3 class="section-title">Profile</h3>
      </div>
      <div class="large-9 columns section-body">
        <p>Hi there! I'm a full stack developer, jack-of-all-trades type with a primary focus on back-end
          development. I'm fairly language agnostic and prefer to use the right tool for the job at hand depending on the project's
          needs and technology stack, and I have no problem adapting to new technologies as needed. I have the most experience with C# / .NET and PHP, and decent working experience with
          Java and Ruby on Rails.</p>

        <p>I also have several years of systems administration experience and am very comfortable setting up and managing Windows and
          Linux servers, either by configuring bare metal instances or by using cloud solutions like Amazon Web Services and Microsoft Azure. I prefer to automate things whenever possible, so I love working with shell scripting and
          APIs.</p>

        <p>I dabble in design and can help to take a vague idea and turn that into a functional, user-friendly UI. I also
          have plenty of experience taking mockups or site designs and turning that into markup and CSS. Most of all, I just love
          to create things - taking an idea and turning it into a finished product is incredibly rewarding!</p>
      </div>
    </div>
    <div class="row content experience">
      <div class="large-3 columns">
        <h3 class="section-title">Experience</h3>
      </div>
      <div class="large-9 columns section-body">
        <div class="section-experience">
            <h3 class="experience-title">Senior Web Developer at <a href="http://mergeworld.com">MERGE Atlanta</a> (formerly <a href="http://aviddesign.com">AVID Design</a>)</h3>
            <h4 class="experience-timeline">February 2017 - Present</h4>
            <div class="experience-body">
              <ul class="experience">
                <li>Design data architecture for custom web applications and large hospital websites.</li>
                <li>Develop solutions in a variety of CMSes such as Sitecore, Sitefinity, Drupal, and proprietary systems.</li>
                <li>Serve as technical lead and lead developer for large website builds.</li>
                <li>Write application code in C#, PHP, and Javascript dependent on project requirements.</li>
                <li>Create front-end and back-end functionality based on client specifications and mockups.</li>                
                <li>Provide development assistance and mentoring for other developers.</li>
                <li>Develop technology adoption strategies and recommendations.</li>
                <li>Hold weekly status calls with clients to discuss project development and milestones.</li>
                <li>Work with project managers to determine developer capacity and schedule sprints.</li>
                <li>Perform code reviews and manage merge requests for production deployments.</li>
              </ul>
            </div>
          </div>
        <div class="section-experience">
          <h3 class="experience-title">Full Stack Web Developer at <a href="http://signaltrace.net">signal.trace()</a></h3>
          <h4 class="experience-timeline">December 2013 - Present</h4>
          <div class="experience-body">
            <ul class="experience">
              <li>Design, develop and implement custom web-based solutions using a mix of C#, PHP and Javascript depending on project needs and hosting environment.</li>
              <li>Design web application and mobile application user interfaces based on mockups or client discussions.</li>
              <li>Translate design mockups and comps into functional HTML / CSS / JS.</li>
              <li>Create database schema and data models.</li>
              <li>Develop additional features and functionality for existing client sites and applications.</li>
              <li>Create reusable components such as Drupal / WordPress modules and .NET shared libraries.</li>
              <li>Manage version control and deployment releases for projects via GitHub.</li>
              <li>Deploy and manage LAMP or IIS web application servers.</li>
              <li>Develop APIs to allow third-party services to integrate with solutions.</li>
            </ul>
          </div>
        </div>
        <div class="section-experience">
          <h3 class="experience-title">Web Developer at <a href="http://mergeworld.com">MERGE Atlanta</a> (formerly <a href="http://aviddesign.com">AVID Design</a>)</h3>
          <h4 class="experience-timeline">May 2014 - May 2015</h4>
          <div class="experience-body">
            <ul class="experience">
              <li>Developed websites, web applications, and mobile applications for clients in healthcare industry using a mixture of C#, VB and Javascript.</li>
              <li>Translated design mockups and comps into functional HTML / CSS / JS.</li>
              <li>Implemented website solutions using proprietary CMS.</li>
              <li>Developed custom functionality as needed and integrated into CMS.</li>
              <li>Standardized core CMS functionality and separated into standalone library.</li>
              <li>Upgraded legacy CMS code from VB to C#.</li>
              <li>Developed modular approach to extending CMS functionality.</li>
              <li>Served as lead developer on multiple award-winning projects.</li>
              <li>Developed new CMS functionality that was integrated into core product.</li>
              <li>Provided recommendations on new technology and workflow improvements.</li>
            </ul>
          </div>
        </div>
        <div class="section-experience">
          <h3 class="experience-title">Web Developer at <a href="http://www.uga.edu/">The University of Georgia</a></h3>
          <h4><a href="https://www.fmd.uga.edu/">Facilities Management Division</a></h4>
          <h4 class="experience-timeline">March 2012 - May 2014</h4>
          <div class="experience-body">
            <ul class="experience">
              <li>Developed web applications using C#/.NET MVC4, PHP, and jQuery.</li>
              <li>Designed and documented application database structure.</li>
              <li>Trained users and administrative associates in the use of Wordpress.</li>
              <li>Developed Wordpress themes and plugins based on departmental needs.</li>
              <li>Migrated legacy Web Forms applications to .NET MVC 4.</li>
              <li>Created reusable .NET MVC project template for all FMD .NET projects.</li>
              <li>Migrated Subversion repositories to self-hosted Git solution using Gitlab.</li>
              <li>Developed internal employee suggestions portal.</li>
              <li>Migrated static departmental websites to a Wordpress network.</li>
            </ul>
          </div>
        </div>
        <div class="section-experience">
          <h3 class="experience-title">Systems Administrator at <a href="http://www.uga.edu/">The University of Georgia</a></h3>
          <h4><a href="http://research.uga.edu/">Office of the Vice President for Research</a></h4>
          <h4 class="experience-timeline">August 2011 - March 2012</h4>
          <div class="experience-body">
            <ul class="experience">
              <li>Managed VMWare ESXi cluster hosting approximately 50 virtual machines.</li>
              <li>Managed 3 large storage servers hosting mission-critical application and user data.</li>
              <li>Managed MySQL, PostgreSQL and MS SQL Server databases.</li>
              <li>Wrote Perl and Bash scripts to automate various tasks on Linux servers.</li>
              <li>Provided additional support to development team in designing and implementing Java and PHP projects, utilizing Subversion to integrate changes.</li>
              <li>Managed multiple Red Hat Enterprise Linux / Apache web servers hosting approximately 70 websites.</li>
              <li>Managed Windows Server 2008 R2 IIS web servers.</li>
              <li>Secured systems and analyzed network traffic to detect malicious activity.</li>
              <li>Administered patches and scheduled updates to Windows and Linux servers.</li>
              <li>Managed Brocade switches and assisted in networking infrastructure management.</li>
              <li>Planned and implemented Nagios open source monitoring solution to monitor overall server and network health.</li>
              <li>Completely reconfigured network and virtual hosting infrastructure to alleviate an unstable hosting environment.</li>
              <li>Automated and refined backup tasks on all Linux servers hosting mission-critical data using custom Perl scripts.</li>
            </ul>
          </div>
        </div>
        <div class="section-experience">
          <h3 class="experience-title">Software Developer at <a href="http://www.uga.edu/">The University of Georgia</a></h3>
          <h4><a href="https://www.fmd.uga.edu/">Facilities Management Division</a></h4>
          <h4 class="experience-timeline">March 2006 - August 2011</h4>
          <div class="experience-body">
            <ul class="experience">
              <li>Developed desktop and web applications using C#/.NET 4, Ruby, and Perl as needs dictated.</li>
              <li>Created, updated, and maintained web applications to interface with 3rd party computer-aided facility management (CAFM) system.</li>
              <li>Created Oracle schemas, tables, stored procedures and triggers based on application structure.</li>
              <li>Coordinated with directors and shop supervisors regarding application needs.</li>
              <li>Created and maintained Perl scripts to integrate campus DB2 data with CAFM data as well as perform various daily tasks.</li>
              <li>Created and managed virtual machines using VMWare VCenter/vSphere.</li>
              <li>Utilized Google Analytics to track web application usage statistics.</li>
              <li>Wrote reports using BIRT and Crystal Reports to pull data from CAFM system.</li>
              <li>Implemented Subversion version control software to manage over 30 projects.</li>
              <li>Implemented Nagios system and service monitoring software to monitor and track service outages.</li>
              <li>Created internal code libraries containing commonly used functions and user controls.</li>
              <li>Created MediaWiki-based internal wiki for centralizing a repository of department-specific knowledge.</li>
              <li>Created internal helpdesk ticketing and inventory management system to serve user base of ~900 employees.</li>
              <li>Created work order tracking interface to allow University employees to enter and track work orders through the CAFM system.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row content skills">
      <div class="large-3 columns">
        <h3 class="section-title">Skills</h3>
      </div>
      <div class="large-9 columns section-body">
        <div class="skillset">
          <h4 class="skillset-title">Web</h4>
        	<ul class="skills">
          	<li>HTML</li>
            <li>CSS</li>
          	<li>REST APIs</li>
            <li>Less</li>
            <li>Sass</li>
            <li>jQuery</li>
            <li>Vue</li>
            <li>Knockout.js</li>
            <li>Angular</li>
            <li>Node.js</li>
        	</ul>
        </div>
        <div class="skillset">
          <h4 class="skillset-title">Languages</h4>
          <ul class="skills">
        		<li>C#</li>
        		<li>PHP</li>
            <li>Javascript</li>
        		<li>Perl</li>
        		<li>Java</li>
        		<li>Ruby</li>
        	</ul>
        </div>
        <div class="skillset">
          <h4 class="skillset-title">Platforms / Frameworks</h4>
          <ul class="skills">
            <li>.NET</li>
            <li>.NET MVC</li>
            <li>Laravel</li>
            <li>Xamarin</li>
        	</ul>
        </div>
        <div class="skillset">
          <h4 class="skillset-title">Tools</h4>
          <ul class="skills">
            <li>Visual Studio</li>
            <li>Visual Studio Code</li>
            <li>Webpack</li>
            <li>Grunt</li>
            <li>Octopus Deploy</li>
            <li>TeamCity</li>
            <li>Git</li>
            <li>Subversion</li>
          </ul>
        </div>
        <div class="skillset">
          <h4 class="skillset-title">Databases</h4>
          <ul class="skills">
        		<li>SQL Server</li>
        		<li>Oracle</li>
        		<li>MySQL</li>
        		<li>DB2</li>
        	</ul>
        </div>

        <div class="skillset">
          <h4 class="skillset-title">Content Management</h4>
          <ul class="skills">
            <li>Sitecore</li>
            <li>Sitefinity</li>
            <li>Drupal</li>
            <li>Wordpress</li>
          </ul>
        </div>
        <div class="skillset">
          <h4 class="skillset-title">PaaS / IaaS</h4>
          <ul class="skills">
            <li>Amazon EC2</li>
            <li>Amazon Web Services</li>
            <li>Microsoft Azure</li>            
        	</ul>
        </div>
        <div class="skillset">
          <h4 class="skillset-title">Server</h4>
          <ul class="skills">
            <li>Linux</li>
            <li>Windows Server</li>
            <li>VMWare ESXi</li>
            <li>Apache</li>
            <li>IIS</li>
            <li>Tomcat</li>
        	</ul>
        </div>
      </div>
    </div>
    <div class="row content education">
      <div class="large-3 columns">
        <h3 class="section-title">Education</h3>
      </div>
      <div class="large-9 columns section-body">
        <h3 class="experience-title"><a href="http://www.athenstech.edu/">Athens Technical College</a></h3>
        <h4>Athens, GA</h4>
        <h5>Associate of Applied Science, Networking Specialist</h5>
        <h5 class="experience-timeline">2008</h5>
      </div>
    </div>
  </body>
  <footer>
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
