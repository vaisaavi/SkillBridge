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
    <link rel="stylesheet" href="./prac.css" />
    <link rel="stylesheet" href="./practice.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />
  </head>

  <body>
    
    <div class="practice">
      
      <header class="heading">
        <div class="frame">
          <div class="frame1">
            <h1 class="heading-title">
              <span>Sharpen Your Skills with Targeted </span>
              <span class="practice-questions">Practice Questions</span>
            </h1>
            <p class="text">
              Welcome to the Practice section of SkillBridge, your go-to
              resource for mastering the key concepts in computer science.
              Whether you're preparing for exams, interviews, or simply
              reinforcing your knowledge, our curated questions cover every
              major field in the discipline. Choose your focus area, challenge
              yourself with a variety of questions, and track your progress as
              you advance.
            </p>
          </div>
          <img
            class="practice-img-icon"
            alt=""
            src="./public/practiceimg@2x.png"
          />
        </div>
          <button class="button1">
            <div class="get-started">Get Started</div>
          </button>
      </header>
      <main class="main">
        
      <div class="grid-container">
        <!-- Programming Language Cards -->
        <div class="card">
            <div class="card-header light-pattern">
                <h2 class="card-title">C Programming</h2>
            </div>
            <div class="card-content">
                <ul class="feature-list">
                    <li>Basic to advanced practice questions for C Programming</li>
                    <li>Core concepts and syntax MCQs</li>
                    <li>Practice C coding challenges</li>
               </ul>
                <a href="./questions/c.html" class="btn dark" target="_blank">Solve Questions</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header dark-pattern">
                <h2 class="card-title">Computer Networks</h2>
            </div>
            <div class="card-content">
                <ul class="feature-list">
                    <li>Basic to advanced practice questions for Computer Networks</li>
                    <li>Understand network protocols and models</li>
                    <li>Configure and troubleshoot network devices</li>
                </ul>
                <a href="./questions/CNT.html" class="btn light" target="_blank">Solve Questions</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header light-pattern">
                <h2 class="card-title">DBMS</h2>
            </div>
            <div class="card-content">
                <ul class="feature-list">
                    <li>Learn SQL for data manipulation</li>
                    <li>Design efficient database schemas</li>
                    <li>Implement data integrity and security measures</li>
                </ul>
                <a href="./questions/DBMS.html" class="btn dark" target="_blank">Solve Questions</a>
            </div>
        </div>

        <!-- Company Cards -->
        <div class="card">
            <div class="card-header light-pattern">
                <h2 class="card-title">Data Structures</h2>
            </div>
            <div class="card-content">
                <ul class="feature-list">
                    <li>Master fundamental data structures</li>
                    <li>Understand algorithm design and analysis</li>
                    <li>Solve complex problems using sorting and searching algorithms</li>
                </ul>
                <a href="./questions/DSA.html" class="btn dark" target="_blank">Solve Questions</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header dark-pattern">
                <h2 class="card-title">Java</h2>
            </div>
            <div class="card-content">
                <ul class="feature-list">
                    <li>Learn Java syntax and object-oriented principles</li>
                    <li>Explore Java libraries and frameworks</li>
                    <li>Practice coding challenges and interview questions</li>
                </ul>
                <a href="./questions/JAVA.html" class="btn light" target="_blank">Solve Questions</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header light-pattern">
                <h2 class="card-title">OOP</h2>
            </div>
            <div class="card-content">
                <ul class="feature-list">
                    <li>Understand core OOP concepts: classes, objects, inheritance</li>
                    <li>Implement polymorphism and encapsulation in code</li>
                    <li>Apply design patterns to solve common programming problems</li>
                </ul>
                <a href="./questions/OOPS.html" class="btn dark" target="_blank">Solve Questions</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header light-pattern">
                <h2 class="card-title">OS</h2>
            </div>
            <div class="card-content">
                <ul class="feature-list">
                    <li>Learn about process management and scheduling algorithms</li>
                    <li>Understand memory management techniques and virtual memory</li>
                    <li>Explore file systems and I/O management</li>
                </ul>
                <a href="./questions/OS.html" class="btn  dark" target="_blank">Solve Questions</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header dark-pattern">
                <h2 class="card-title">Python</h2>
            </div>
            <div class="card-content">
                <ul class="feature-list">
                    <li>Master syntax and core concepts of Python</li>
                    <li>Utilize libraries for data manipulation and analysis</li>
                    <li>Practice coding challenges and real-world projects</li>
                </ul>
                <a href="./questions/PYTHON.html" class="btn light" target="_blank">Solve Questions</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header light-pattern">
                <h2 class="card-title">Web Technology</h2>
            </div>
            <div class="card-content">
                <ul class="feature-list">
                <li>Learn essential HTML, CSS, and JavaScript fundamentals</li>
                <li>Explore frameworks like React, Angular, and Vue.js</li>
                <li>Develop responsive and interactive web applications</li>
                </ul>
                <a href="./questions/WEBTECH.html" class="btn  dark" target="_blank">Solve Questions</a>
            </div>
        </div>
        </div>
        
      </main>
      
      <?php include 'navbar.php'; ?>
    </div>
    <?php include 'foot.php'; ?>

  </body>
</html>