<?php
// Start the session to access session variables
session_start();
?>

<head>
    <link rel="stylesheet" href="./navbar.css" />
</head>
<nav class="navbar1">
  <ul class="navbar-text1" id="navbar">
    <li class="roadmap4" id="roadmapListItem1">Roadmap</li>
    <li class="practice6" id="practiceListItem1">Practice</li>
    <li class="project1" id="projectListItem1">Projects</li>
    <li class="resources3" id="resources">Resources</li>
  </ul>
  <div class="navbar-button1">
    <?php if (isset($_SESSION['username'])): ?>
        <!-- Show the user's name and a logout button when signed in -->
        <span class="username-display"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
        <a href="logout.php">
            <button class="logout-btn">
                <div class="contact-us3">Log Out</div>
            </button>
        </a>
    <?php else: ?>
        <!-- Show Sign In and Sign Up buttons if the user is not signed in -->
        <a href="signin.html">
            <button class="sign-in1">
                <div class="contact-us2">Sign In</div>
            </button>
        </a>
        <a href="signup.html">
            <button class="sign-up1">
                <div class="contact-us3">Sign Up</div>
            </button>
        </a>
    <?php endif; ?>
  </div>
  <div class="light-logo1" id="lightLogo">
    <img
      class="light-logo-icon1"
      alt=""
      src="./public/lightlogo@2x.png"
    />
  </div>
</nav>
<script src="navbar.js"></script>
