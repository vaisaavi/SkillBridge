<?php
  // Enable error reporting for debugging
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  // Start the session
  session_start();

  // Include the navbar file
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />
  </head>
  <body>
    
    <div class="home">
      <header class="hero" data-scroll-to="hero">
        <div class="heading-parent">
          <div class="heading1">
            <span>Bridge the Gap from</span>
            <span class="span"> </span>
            <span class="code-to-career">Code to Career</span>
          </div>
          <div class="description2">
            Master essential tech skills, build impressive projects, and unlock
            career opportunities with our all-in-one platform designed for
            computer science students.
          </div>
          <div class="button7">
            <button class="button8">
              <div class="get-started1">Get Started</div>
            </button>
          </div>
        </div>
        <div class="home-img-wrapper">
          <img class="home-img-icon" alt="" src="./public/homeimg@2x.png" />
        </div>
      </header>
      <main class="body">
        <section class="frame6">
          <div class="intro">
            <h2 class="section-title">
              Unlock Your Full Potential with Essential Tools
            </h2>
            <p class="description3">What does SkillBridge offer?</p>
          </div>
          <div class="features">
          <div class="career-guidance" id="roadmap">
              <div class="career-group">
                <div class="career">
                  <div class="icon6">
                    <img
                      class="career-icon1"
                      alt=""
                      src="./public/career1@2x.png"
                    />
                  </div>
                  <h3 class="career-guidance1">
                    <p class="guidance">Course</p>
                    <p class="guidance">Roadmap</p>
                  </h3>
                </div>
                <div class="description6">
                  <p class="our-membership-management">
                    Navigate your learning journey with structured course
                    pathways in key computer science subjects.
                  </p>
                </div>
              </div>
            </div>
            <div class="practice-questions1" id="practice">
              <div class="practice3">
                <div class="icon5">
                  <div class="icon-child"></div>
                  <img class="code-icon" alt="" src="./public/code@2x.png" />
                </div>
                <h3 class="career-guidance1">
                  <p class="guidance">Practice</p>
                  <p class="guidance">Questions</p>
                </h3>
              </div>
              <div class="description5">
                <p class="our-membership-management">
                Sharpen your skills with hands-on coding exercises and challenges designed to test your knowledge and reinforce key programming concepts.
                </p>
              </div>
            </div>
            <div class="career-guidance" id="project">
              <div class="career-parent">
                <div class="career">
                  <div class="icon4">
                    <img
                      class="career-icon"
                      alt=""
                      src="./public/career@2x.png"
                    />
                  </div>
                  <h3 class="career-guidance1">
                    <p class="guidance">Project</p>
                    <p class="guidance">Guidance</p>
                  </h3>
                </div>
                <div class="description4">
                  <p class="our-membership-management">
                  Discover hands-on projects across diverse domains to enhance your skills and build a strong portfolio.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="info">
          <div class="img">
            <img
              class="upskill-img-icon"
              alt=""
              src="./public/upskillimg@2x.png"
            />
          </div>
          <div class="section">
            <h3 class="transform-your-passion">
            Discover Essential Resources for Your Tech Journey!
            </h3>
            <p class="when-joining-the">
            Explore a wealth of resources designed to elevate your tech skills and propel your career forward. Whether you’re just starting out or looking to advance your expertise, SkillBridge offers curated tools, projects, and guidance to help you succeed. Dive into our resources page and take the next step toward achieving your goals today!
            </p>
            <div class="button7">
              <button class="button8">
                <div class="get-started1">Get Resources!</div>
              </button>
            </div>
          </div>
        </section>
        
      </main>
      <?php
      include('navbar.php');
      ?>


    </div>
    <?php include 'foot.php';?>
    <script>
    // JavaScript to make the div clickable
    document.getElementById('roadmap').addEventListener('click', function() {
        window.location.href = '/SkillBridge/roadmap.php';
    });
    document.getElementById('practice').addEventListener('click', function() {
        window.location.href = '/SkillBridge/practice.php';
    });
    document.getElementById('project').addEventListener('click', function() {
        window.location.href = '/SkillBridge/project.php';
    });
</script>
  </body>
</html>