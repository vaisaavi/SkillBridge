<?php
  // Enable error reporting for debugging
  error_reporting(E_ALL);

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
    <link rel="stylesheet" href="./project.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />
  </head>
  <body>
  
      <main class="main">
         <!-- Category List -->
        <section class="pro">
          <label for="project-category">Choose a project category:</label>
          <select id="project-category">
              <option value="" selected disabled>Select a category</option>
          </select>
       
          <!-- Table to display project details -->
          <table id="project-table" border="1">
              <thead>
                  <tr>
                      <th>Language</th>
                      <th>Project Description</th>
                      <th>Link</th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Table content will be populated here using JavaScript -->
              </tbody>
          </table>
       
        </section>
      </main>
      <header class="heading">
        <div class="frame">
          <div class="frame1">
            <h1 class="heading-title">
              <span>Level Up Your Skills with<br></span>
              <span class="project-header">Real-World Projects</span>
            </h1>
            <p class="text">
                Whether you're just getting started or looking to deepen your expertise, these hands-on projects are designed to challenge your creativity and enhance your problem-solving abilities. Tackle projects across different domains, build a strong portfolio, and gain confidence by applying what you’ve learned in a real-world context. Remember, the best way to learn is by doing—start building today!
            </p>
          </div>
          <img
            class="practice-img-icon"
            alt=""
            src="./public/projects.png"
          />
        </div>
      </header>
      <?php include 'foot.php';?>
      <?php include 'navbar.php'; ?>

    <script>
      // Data for projects
const projectData = {
    "Build your own Blockchain / Cryptocurrency": [
            { title: "ATS", description: "Functional Blockchain", link: "https://beta.observablehq.com/@galletti94/functional-blockchain" },
            { title: "C#", description: "Programming The Blockchain in C#", link: "https://programmingblockchain.gitbooks.io/programmingblockchain/" },
            { title: "Crystal", description: "Write your own blockchain and PoW algorithm using Crystal", link: "https://medium.com/@bradford_hamilton/write-your-own-blockchain-and-pow-algorithm-using-crystal-d53d5d9d0c52" },
            { title: "Go", description: "Building Blockchain in Go", link: "https://jeiwan.net/posts/building-blockchain-in-go-part-1/" },
            { title: "Go", description: "Code your own blockchain in less than 200 lines of Go", link: "https://medium.com/@mycoralhealth/code-your-own-blockchain-in-less-than-200-lines-of-go-e296282bcffc" },
            { title: "Java", description: "Creating Your First Blockchain with Java", link: "https://medium.com/programmers-blockchain/create-simple-blockchain-java-tutorial-from-scratch-6eeed3cb03fa" },
            { title: "JavaScript", description: "A cryptocurrency implementation in less than 1500 lines of code", link: "https://github.com/conradoqg/naivecoin" },
            { title: "JavaScript", description: "Build your own Blockchain in JavaScript", link: "https://github.com/nambrot/blockchain-in-js" },
            { title: "JavaScript", description: "Learn & Build a JavaScript Blockchain", link: "https://medium.com/digital-alchemy-holdings/learn-build-a-javascript-blockchain-part-1-ca61c285821e" },
            { title: "JavaScript", description: "Creating a blockchain with JavaScript", link: "https://github.com/SavjeeTutorials/SavjeeCoin" },
            { title: "JavaScript", description: "How To Launch Your Own Production-Ready Cryptocurrency", link: "https://hackernoon.com/how-to-launch-your-own-production-ready-cryptocurrency-ab97cb773371" },
            { title: "JavaScript", description: "Writing a Blockchain in Node.js", link: "https://www.smashingmagazine.com/2020/02/cryptocurrency-blockchain-node-js/" },
            { title: "Kotlin", description: "Let’s implement a cryptocurrency in Kotlin", link: "https://medium.com/@vasilyf/lets-implement-a-cryptocurrency-in-kotlin-part-1-blockchain-8704069f8580" },
            { title: "Python", description: "Learn Blockchains by Building One", link: "https://hackernoon.com/learn-blockchains-by-building-one-117428612f46" },
            { title: "Python", description: "Build your own blockchain: a Python tutorial", link: "http://ecomunsing.com/build-your-own-blockchain" },
            { title: "Python", description: "A Practical Introduction to Blockchain with Python", link: "http://adilmoujahid.com/posts/2018/03/intro-blockchain-bitcoin-python/" },
            { title: "Python", description: "Let’s Build the Tiniest Blockchain", link: "https://medium.com/crypto-currently/lets-build-the-tiniest-blockchain-e70965a248b" },
            { title: "Ruby", description: "Programming Blockchains Step-by-Step (Manuscripts Book Edition)", link: "https://github.com/yukimotopress/programming-blockchains-step-by-step" },
            { title: "Scala", description: "How to build a simple actor-based blockchain", link: "https://medium.freecodecamp.org/how-to-build-a-simple-actor-based-blockchain-aac1e996c177" },
            { title: "TypeScript", description: "Naivecoin: a tutorial for building a cryptocurrency", link: "https://lhartikk.github.io/" },
            { title: "TypeScript", description: "NaivecoinStake: a tutorial for building a cryptocurrency with the Proof of Stake consensus", link: "https://naivecoinstake.learn.uno/" },
            { title: "Rust", description: "Building A Blockchain in Rust & Substrate", link: "https://hackernoon.com/building-a-blockchain-in-rust-and-substrate-a-step-by-step-guide-for-developers-kc223ybp" }
        ],
        "Build your own Bot": [
            { title: "Haskell", description: "Roll your own IRC bot", link: "https://wiki.haskell.org/Roll_your_own_IRC_bot" },
            { title: "Node.js", description: "Creating a Simple Facebook Messenger AI Bot with API.ai in Node.js", link: "https://tutorials.botsfloor.com/creating-a-simple-facebook-messenger-ai-bot-with-api-ai-in-node-js-50ae2fa5c80d" },
            { title: "Node.js", description: "How to make a responsive telegram bot", link: "https://www.sohamkamani.com/blog/2016/09/21/making-a-telegram-bot/" },
            { title: "Node.js", description: "Create a Discord bot", link: "https://discordjs.guide/" },
            { title: "Node.js", description: "gifbot - Building a GitHub App", link: "https://blog.scottlogic.com/2017/05/22/gifbot-github-integration.html" },
            { title: "Node.js", description: "Building A Simple AI Chatbot With Web Speech API And Node.js", link: "https://www.smashingmagazine.com/2017/08/ai-chatbot-web-speech-api-node-js/" },
            { title: "Python", description: "How to Build Your First Slack Bot with Python", link: "https://www.fullstackpython.com/blog/build-first-slack-bot-python.html" },
            { title: "Python", description: "How to build a Slack Bot with Python using Slack Events API & Django under 20 minute", link: "https://medium.com/freehunch/how-to-build-a-slack-bot-with-python-using-slack-events-api-django-under-20-minute-code-included-269c3a9bf64e" },
            { title: "Python", description: "Build a Reddit Bot", link: "http://pythonforengineers.com/build-a-reddit-bot-part-1/" },
            { title: "Python", description: "How To Make A Reddit Bot", link: "https://www.youtube.com/watch?v=krTUf7BpTc0" },
            { title: "Python", description: "How To Create a Telegram Bot Using Python", link: "https://www.freecodecamp.org/news/how-to-create-a-telegram-bot-using-python/" },
            { title: "Python", description: "Create a Twitter Bot in Python Using Tweepy", link: "https://medium.freecodecamp.org/creating-a-twitter-bot-in-python-with-tweepy-ac524157a607" },
            { title: "Python", description: "Creating Reddit Bot with Python & PRAW", link: "https://www.youtube.com/playlist?list=PLIFBTFgFpoJ9vmYYlfxRFV6U_XhG-4fpP" },
            { title: "R", description: "Build A Cryptocurrency Trading Bot with R", link: "https://towardsdatascience.com/build-a-cryptocurrency-trading-bot-with-r-1445c429e1b1" },
            { title: "R", description: "Build A Cryptocurrency Trading Bot with R", link: "https://towardsdatascience.com/build-a-cryptocurrency-trading-bot-with-r-1445c429e1b1" },
            { title: "Rust", description: "A bot for Starcraft in Rust, C or any other language", link: "https://habr.com/en/post/436254/" },
        ],
        "Build your own Command-Line Tool": [
            { title: "Go", description: "Visualize your local git contributions with Go", link: "https://flaviocopes.com/go-git-contributions/" },
            { title: "Go", description: "Build a command line app with Go: lolcat", link: "https://flaviocopes.com/go-tutorial-lolcat/" },
            { title: "Go", description: "Building a CLI command with Go: cowsay", link: "https://flaviocopes.com/go-tutorial-cowsay/" },
            { title: "Go", description: "Go CLI tutorial: fortune clone", link: "https://flaviocopes.com/go-tutorial-fortune/" },
            { title: "Nim", description: "Writing a stow alternative to manage dotfiles", link: "https://xmonader.github.io/nimdays/day06_nistow.html" },
            { title: "Node.js", description: "Create a CLI tool in Javascript", link: "https://citw.dev/tutorial/create-your-own-cli-tool" },
            { title: "Rust", description: "Command line apps in Rust", link: "https://rust-cli.github.io/book/index.html" },
            { title: "Rust", description: "Writing a Command Line Tool in Rust", link: "https://mattgathu.dev/2017/08/29/writing-cli-app-rust.html" },
        ],
        "Build your own Database": [
            { title: "C", description: "Let's Build a Simple Database", link: "https://cstack.github.io/db_tutorial/" },
            { title: "C++", description: "Build Your Own Redis from Scratch", link: "https://build-your-own.org/redis" },
            { title: "C#", description: "Build Your Own Database", link: "https://www.codeproject.com/Articles/1029838/Build-Your-Own-Database" },
            { title: "Clojure", description: "An Archaeology-Inspired Database", link: "http://aosabook.org/en/500L/an-archaeology-inspired-database.html" },
            { title: "Crystal", description: "Why you should build your own NoSQL Database", link: "https://medium.com/@marceloboeira/why-you-should-build-your-own-nosql-database-9bbba42039f5" },
            { title: "Go", description: "Build Your Own Database from Scratch: Persistence, Indexing, Concurrency", link: "https://build-your-own.org/database/" },
            { title: "Go", description: "Build Your Own Redis from Scratch", link: "https://www.build-redis-from-scratch.dev/" },
            { title: "JavaScript", description: "Dagoba: an in-memory graph database", link: "http://aosabook.org/en/500L/dagoba-an-in-memory-graph-database.html" },
            { title: "Python", description: "DBDB: Dog Bed Database", link: "http://aosabook.org/en/500L/dbdb-dog-bed-database.html" },
            { title: "Python", description: "Write your own miniature Redis with Python", link: "http://charlesleifer.com/blog/building-a-simple-redis-server-with-python/" },
            { title: "Ruby", description: "Build your own fast, persistent KV store in Ruby", link: "https://dineshgowda.com/posts/build-your-own-persistent-kv-store/" },
            { title: "Rust", description: "Build your own Redis client and server", link: "https://tokio.rs/tokio/tutorial/setup" },
        ],
        "Build your own Docker": [
            { title: "C", description: "Linux containers in 500 lines of code", link: "https://blog.lizzie.io/linux-containers-in-500-loc.html" },
            { title: "Go", description: "Build Your Own Container Using Less than 100 Lines of Go", link: "https://www.infoq.com/articles/build-a-container-golang" },
            { title: "Go", description: "Building a container from scratch in Go", link: "https://www.youtube.com/watch?v=8fi7uSYlOdc" }, // video
            { title: "Python", description: "A workshop on Linux containers: Rebuild Docker from Scratch", link: "https://github.com/Fewbytes/rubber-docker" },
            { title: "Python", description: "A proof-of-concept imitation of Docker, written in 100% Python", link: "https://github.com/tonybaloney/mocker" },
            { title: "Shell", description: "Docker implemented in around 100 lines of bash", link: "https://github.com/p8952/bocker" },
        ],
        "Build your own Emulator / Virtual Machine": [
            { title: "C", description: "Home-grown bytecode interpreters", link: "https://medium.com/bumble-tech/home-grown-bytecode-interpreters-51e12d59b25c" },
            { title: "C", description: "Virtual machine in C", link: "http://web.archive.org/web/20200121100942/https://blog.felixangell.com/virtual-machine-in-c/" },
            { title: "C", description: "Write your Own Virtual Machine", link: "https://justinmeiners.github.io/lc3-vm/" },
            { title: "C", description: "Writing a Game Boy emulator, Cinoop", link: "https://cturt.github.io/cinoop.html" },
            { title: "C++", description: "How to write an emulator (CHIP-8 interpreter)", link: "http://www.multigesture.net/articles/how-to-write-an-emulator-chip-8-interpreter/" },
            { title: "C++", description: "Emulation tutorial (CHIP-8 interpreter)", link: "http://www.codeslinger.co.uk/pages/projects/chip8.html" },
            { title: "C++", description: "Emulation tutorial (GameBoy emulator)", link: "http://www.codeslinger.co.uk/pages/projects/gameboy.html" },
            { title: "C++", description: "Emulation tutorial (Master System emulator)", link: "http://www.codeslinger.co.uk/pages/projects/mastersystem/memory.html" },
            { title: "C++", description: "NES Emulator From Scratch", link: "https://www.youtube.com/playlist?list=PLrOv9FMX8xJHqMvSGB_9G9nZZ_4IgteYf" }, // video
            { title: "Common Lisp", description: "CHIP-8 in Common Lisp", link: "http://stevelosh.com/blog/2016/12/chip8-cpu/" },
            { title: "JavaScript", description: "GameBoy Emulation in JavaScript", link: "http://imrannazar.com/GameBoy-Emulation-in-JavaScript" },
            { title: "Python", description: "Emulation Basics: Write your own Chip 8 Emulator/Interpreter", link: "http://omokute.blogspot.com.br/2012/06/emulation-basics-write-your-own-chip-8.html" },
            { title: "Rust", description: "0dmg: Learning Rust by building a partial Game Boy emulator", link: "https://jeremybanks.github.io/0dmg/" },
        ],
        "Build your own Front-end Framework / Library" : [
        { title: "JavaScript", description: "WTF is JSX (Let's Build a JSX Renderer)", link: "https://jasonformat.com/wtf-is-jsx/" },
            { title: "JavaScript", description: "A DIY guide to build your own React", link: "https://github.com/hexacta/didact" },
            { title: "JavaScript", description: "Building React From Scratch", link: "https://www.youtube.com/watch?v=_MAD4Oly9yg" }, // video
            { title: "JavaScript", description: "Gooact: React in 160 lines of JavaScript", link: "https://medium.com/@sweetpalma/gooact-react-in-160-lines-of-javascript-44e0742ad60f" },
            { title: "JavaScript", description: "Learn how React Reconciler package works by building your own lightweight React DOM", link: "https://hackernoon.com/learn-you-some-custom-react-renderers-aed7164a4199" },
            { title: "JavaScript", description: "Build Yourself a Redux", link: "https://zapier.com/engineering/how-to-build-redux/" },
            { title: "JavaScript", description: "Let’s Write Redux!", link: "https://www.jamasoftware.com/blog/lets-write-redux/" },   
            { title: "JavaScript", description: "Redux: Implementing Store from Scratch", link: "https://egghead.io/lessons/react-redux-implementing-store-from-scratch" }, // video
            { title: "JavaScript", description: "Build Your own Simplified AngularJS in 200 Lines of JavaScript", link: "https://blog.mgechev.com/2015/03/09/build-learn-your-own-light-lightweight-angularjs/" },
            { title: "JavaScript", description: "Make Your Own AngularJS", link: "http://teropa.info/blog/2013/11/03/make-your-own-angular-part-1-scopes-and-digest.html" },
            { title: "JavaScript", description: "How to write your own Virtual DOM", link: "https://medium.com/@deathmood/how-to-write-your-own-virtual-dom-ee74acc13060" },
            { title: "JavaScript", description: "Building a frontend framework, from scratch, with components (templating, state, VDOM)", link: "https://mfrachet.github.io/create-frontend-framework/" },
            { title: "JavaScript", description: "Build your own React", link: "https://pomb.us/build-your-own-react/" },
            { title: "JavaScript", description: "Building a Custom React Renderer", link: "https://youtu.be/CGpMlWVcHok" }, // video
        ],
        "Build your own Game": [
            { title: "C", description: "Handmade Hero", link: "https://handmadehero.org/" },
            { title: "C", description: "How to Program an NES game in C", link: "https://nesdoug.com/" },
            { title: "C", description: "Chess Engine In C", link: "https://www.youtube.com/playlist?list=PLZ1QII7yudbc-Ky058TEaOstZHVbT-2hg" }, // video
            { title: "C", description: "Let's Make: Dangerous Dave", link: "https://www.youtube.com/playlist?list=PLSkJey49cOgTSj465v2KbLZ7LMn10bCF9" }, // video
            { title: "C", description: "Learn Video Game Programming in C", link: "https://www.youtube.com/playlist?list=PLT6WFYYZE6uLMcPGS3qfpYm7T_gViYMMt" }, // video
            { title: "C", description: "Coding A Sudoku Solver in C", link: "https://www.youtube.com/playlist?list=PLkTXsX7igf8edTYU92nU-f5Ntzuf-RKvW" }, // video
            { title: "C", description: "Coding a Rogue/Nethack RPG in C", link: "https://www.youtube.com/playlist?list=PLkTXsX7igf8erbWGYT4iSAhpnJLJ0Nk5G" }, // video
            { title: "C", description: "On Tetris and Reimplementation", link: "https://brennan.io/2015/06/12/tetris-reimplementation/" },
            { title: "C++", description: "Breakout", link: "https://learnopengl.com/In-Practice/2D-Game/Breakout" },
            { title: "C++", description: "Beginning Game Programming v2.0", link: "http://lazyfoo.net/tutorials/SDL/" },
            { title: "C++", description: "Tetris tutorial in C++", link: "http://javilop.com/gamedev/tetris-tutorial-in-c-platform-independent-focused-in-game-logic-for-beginners/" },
            { title: "C++", description: "Remaking Cavestory in C++", link: "https://www.youtube.com/watch?v=ETvApbD5xRo&list=PLNOBk_id22bw6LXhrGfhVwqQIa-M2MsLa" }, // video
            { title: "C++", description: "Reconstructing Cave Story", link: "https://www.youtube.com/playlist?list=PL006xsVEsbKjSKBmLu1clo85yLrwjY67X" }, // video
            { title: "C++", description: "Space Invaders from Scratch", link: "http://nicktasios.nl/posts/space-invaders-from-scratch-part-1.html" },
            { title: "C#", description: "Learn C# by Building a Simple RPG", link: "http://scottlilly.com/learn-c-by-building-a-simple-rpg-index/" },
            { title: "C#", description: "Creating a Roguelike Game in C#", link: "https://roguesharp.wordpress.com/" },
            { title: "C#", description: "Build a C#/WPF RPG", link: "https://scottlilly.com/build-a-cwpf-rpg/" },
            { title: "Go", description: "Games With Go", link: "https://www.youtube.com/playlist?list=PLDZujg-VgQlZUy1iCqBbe5faZLMkA3g2x" }, // video
            { title: "Java", description: "Code a 2D Game Engine using Java - Full Course for Beginners", link: "https://www.youtube.com/watch?v=025QFeZfeyM" }, // video
            { title: "Java", description: "3D Game Development with LWJGL 3", link: "https://lwjglgamedev.gitbooks.io/3d-game-development-with-lwjgl/content/" },
            { title: "JavaScript", description: "2D breakout game using Phaser", link: "https://developer.mozilla.org/en-US/docs/Games/Tutorials/2D_breakout_game_Phaser" },
            { title: "JavaScript", description: "How to Make Flappy Bird in HTML5 With Phaser", link: "http://www.lessmilk.com/tutorial/flappy-bird-phaser-1" },
            { title: "JavaScript", description: "Developing Games with React, Redux, and SVG", link: "https://auth0.com/blog/developing-games-with-react-redux-and-svg-part-1/" },
            { title: "JavaScript", description: "Build your own 8-Ball Pool game from scratch", link: "https://www.youtube.com/watch?v=aXwCrtAo4Wc" }, // video
            { title: "JavaScript", description: "How to Make Your First Roguelike", link: "https://gamedevelopment.tutsplus.com/tutorials/how-to-make-your-first-roguelike--gamedev-13677" },
            { title: "JavaScript", description: "Think like a programmer: How to build Snake using only JavaScript, HTML & CSS", link: "https://medium.freecodecamp.org/think-like-a-programmer-how-to-build-snake-using-only-javascript-html-and-css-7b1479c3339e" },
            { title: "Lua", description: "BYTEPATH", link: "https://github.com/SSYGEN/blog/issues/30" },
            { title: "Python", description: "Developing Games With PyGame", link: "https://pythonprogramming.net/pygame-python-3-part-1-intro/" },
            { title: "Python", description: "Making Games with Python & Pygame", link: "https://inventwithpython.com/makinggames.pdf" }, // pdf
            { title: "Python", description: "Roguelike Tutorial Revised", link: "http://rogueliketutorials.com/" },
            { title: "Ruby", description: "Developing Games With Ruby", link: "https://leanpub.com/developing-games-with-ruby/read" },
            { title: "Ruby", description: "Ruby Snake", link: "https://www.diatomenterprises.com/gamedev-on-ruby-why-not/" },
            { title: "Rust", description: "Adventures in Rust: A Basic 2D Game", link: "https://a5huynh.github.io/posts/2018/adventures-in-rust/" },
            { title: "Rust", description: "Roguelike Tutorial in Rust + tcod", link: "https://tomassedovic.github.io/roguelike-tutorial/" },
        ],
        "Build your own Git": [
            { title: "Haskell", description: "Reimplementing “git clone” in Haskell from the bottom up", link: "http://stefan.saasen.me/articles/git-clone-in-haskell-from-the-bottom-up/" },
            { title: "JavaScript", description: "Gitlet", link: "http://gitlet.maryrosecook.com/docs/gitlet.html" },
            { title: "JavaScript", description: "Build GIT - Learn GIT", link: "https://kushagra.dev/blog/build-git-learn-git/" },
            { title: "Python", description: "Just enough of a Git client to create a repo, commit, and push itself to GitHub", link: "https://benhoyt.com/writings/pygit/" },
            { title: "Python", description: "Write yourself a Git!", link: "https://wyag.thb.lt/" },
            { title: "Python", description: "ugit: Learn Git Internals by Building Git Yourself", link: "https://www.leshenko.net/p/ugit/" },
            { title: "Ruby", description: "Rebuilding Git in Ruby", link: "https://robots.thoughtbot.com/rebuilding-git-in-ruby" },
        ],
        
        "Build your own Neural Network": [
            { title: "C#", description: "Neural Network OCR", link: "https://www.codeproject.com/Articles/11285/Neural-Network-OCR" },
            { title: "F#", description: "Building Neural Networks in F#", link: "https://towardsdatascience.com/building-neural-networks-in-f-part-1-a2832ae972e6" },
            { title: "Go", description: "Build a multilayer perceptron with Golang", link: "https://made2591.github.io/posts/neuralnetwork" },
            { title: "Go", description: "How to build a simple artificial neural network with Go", link: "https://sausheong.github.io/posts/how-to-build-a-simple-artificial-neural-network-with-go/" },
            { title: "Go", description: "Building a Neural Net from Scratch in Go", link: "https://datadan.io/blog/neural-net-with-go" },
            { title: "JavaScript / Java", description: "Neural Networks - The Nature of Code", link: "https://www.youtube.com/playlist?list=PLRqwX-V7Uu6aCibgK1PTWWu9by6XFdCfh" }, // video
            { title: "JavaScript", description: "Neural networks from scratch for JavaScript linguists (Part1 — The Perceptron)", link: "https://hackernoon.com/neural-networks-from-scratch-for-javascript-linguists-part1-the-perceptron-632a4d1fbad2" },
            { title: "Python", description: "A Neural Network in 11 lines of Python", link: "https://iamtrask.github.io/2015/07/12/basic-python-network/" },
            { title: "Python", description: "Implement a Neural Network from Scratch", link: "https://victorzhou.com/blog/intro-to-neural-networks/" },
            { title: "Python", description: "Optical Character Recognition (OCR)", link: "http://aosabook.org/en/500L/optical-character-recognition-ocr.html" },
            { title: "Python", description: "Traffic signs classification with a convolutional network", link: "https://navoshta.com/traffic-signs-classification/" },
            { title: "Python", description: "Generate Music using LSTM Neural Network in Keras", link: "https://towardsdatascience.com/how-to-generate-music-using-a-lstm-neural-network-in-keras-68786834d4c5" },
            { title: "Python", description: "An Introduction to Convolutional Neural Networks", link: "https://victorzhou.com/blog/intro-to-cnns-part-1/" },
            { title: "Python", description: "Neural Networks: Zero to Hero", link: "https://www.youtube.com/playlist?list=PLAqhIrjkxbuWI23v9cThsA9GvCAUhRvKZ" },
        ],
        "Build your own Operating System" : [
            { title: "Assembly", description: "Writing a Tiny x86 Bootloader", link: "http://joebergeron.io/posts/post_two.html" },
            { title: "Assembly", description: "Baking Pi – Operating Systems Development", link: "http://www.cl.cam.ac.uk/projects/raspberrypi/tutorials/os/index.html" },
            { title: "C", description: "Building a software and hardware stack for a simple computer from scratch", link: "https://www.youtube.com/watch?v=ZjwvMcP3Nf0&list=PLU94OURih-CiP4WxKSMt3UcwMSDM3aTtX" }, // video
            { title: "C", description: "Operating Systems: From 0 to 1", link: "https://tuhdo.github.io/os01/" },
            { title: "C", description: "The little book about OS development", link: "https://littleosbook.github.io/" },
            { title: "C", description: "Roll your own toy UNIX-clone OS", link: "http://jamesmolloy.co.uk/tutorial_html/" },
            { title: "C", description: "Kernel 101 – Let’s write a Kernel", link: "https://arjunsreedharan.org/post/82710718100/kernel-101-lets-write-a-kernel" },
            { title: "C", description: "Kernel 201 – Let’s write a Kernel with keyboard and screen support", link: "https://arjunsreedharan.org/post/99370248137/kernel-201-lets-write-a-kernel-with-keyboard" },
            { title: "C", description: "Build a minimal multi-tasking kernel for ARM from scratch", link: "https://github.com/jserv/mini-arm-os" },
            { title: "C", description: "How to create an OS from scratch", link: "https://github.com/cfenollosa/os-tutorial" },
            { title: "C", description: "Malloc tutorial", link: "https://danluu.com/malloc-tutorial/" },
            { title: "C", description: "Hack the virtual memory", link: "https://blog.holbertonschool.com/hack-the-virtual-memory-c-strings-proc/" },
            { title: "C", description: "Learning operating system development using Linux kernel and Raspberry Pi", link: "https://github.com/s-matyukevich/raspberry-pi-os" },
            { title: "C", description: "Operating systems development for Dummies", link: "https://medium.com/@lduck11007/operating-systems-development-for-dummies-3d4d786e8ac" },
            { title: "C++", description: "Write your own Operating System", link: "https://www.youtube.com/playlist?list=PLHh55M_Kq4OApWScZyPl5HhgsTJS9MZ6M" }, // video
            { title: "C++", description: "Writing a Bootloader", link: "http://3zanders.co.uk/2017/10/13/writing-a-bootloader/" },
            { title: "Rust", description: "Writing an OS in Rust", link: "https://os.phil-opp.com/" },
            { title: "Rust", description: "Add RISC-V Rust Operating System Tutorial", link: "https://osblog.stephenmarz.com/" },
            { title: "(any)", description: "Linux from scratch", link: "https://linuxfromscratch.org/lfs" },
        ],
        "Build your own Programming Language" : [
            { title: "(any)", description: "mal - Make a Lisp", link: "https://github.com/kanaka/mal#mal---make-a-lisp" },
            { title: "Assembly", description: "Jonesforth", link: "https://github.com/nornagon/jonesforth/blob/master/jonesforth.S" },
            { title: "C", description: "Baby's First Garbage Collector", link: "http://journal.stuffwithstuff.com/2013/12/08/babys-first-garbage-collector/" },
            { title: "C", description: "Build Your Own Lisp: Learn C and build your own programming language in 1000 lines of code", link: "http://www.buildyourownlisp.com/" },
            { title: "C", description: "Writing a Simple Garbage Collector in C", link: "http://maplant.com/gc.html" },
            { title: "C", description: "C interpreter that interprets itself.", link: "https://github.com/lotabout/write-a-C-interpreter" },
            { title: "C", description: "A C & x86 version of the 'Let's Build a Compiler' by Jack Crenshaw", link: "https://github.com/lotabout/Let-s-build-a-compiler" },
            { title: "C++", description: "Writing Your Own Toy Compiler Using Flex", link: "https://gnuu.org/2009/09/18/writing-your-own-toy-compiler/" },
            { title: "C++", description: "How to Create a Compiler", link: "https://www.youtube.com/watch?v=eF9qWbuQLuw"},
            { title: "C++", description: "Kaleidoscope: Implementing a Language with LLVM", link: "https://llvm.org/docs/tutorial/MyFirstLanguageFrontend/index.html" },
            { title: "F#", description: "Understanding Parser Combinators", link: "https://fsharpforfunandprofit.com/posts/understanding-parser-combinators/" },
            { title: "Elixir", description: "Demystifying compilers by writing your own", link: "https://www.youtube.com/watch?v=zMJYoYwOCd4" }, // video
            { title: "Go", description: "The Super Tiny Compiler", link: "https://github.com/hazbo/the-super-tiny-compiler" },
            { title: "Go", description: "Lexical Scanning in Go", link: "https://www.youtube.com/watch?v=HxaD_trXwRE" }, // video
            { title: "Haskell", description: "Let's Build a Compiler", link: "https://g-ford.github.io/cradle/" },
            { title: "Haskell", description: "Write You a Haskell", link: "http://dev.stephendiehl.com/fun/" },
            { title: "Haskell", description: "Write Yourself a Scheme in 48 Hours", link: "https://en.wikibooks.org/wiki/Write_Yourself_a_Scheme_in_48_Hours" },
            { title: "Haskell", description: "Write You A Scheme", link: "https://www.wespiser.com/writings/wyas/home.html" },
            { title: "Java", description: "Crafting interpreters: A handbook for making programming languages", link: "http://www.craftinginterpreters.com/" },
            { title: "Java", description: "Creating JVM Language", link: "http://jakubdziworski.github.io/categories.html#Enkel-ref" },
            { title: "JavaScript", description: "The Super Tiny Compiler", link: "https://github.com/jamiebuilds/the-super-tiny-compiler" },
            { title: "JavaScript", description: "The Super Tiny Interpreter", link: "https://github.com/keyanzhang/the-super-tiny-interpreter" },
            { title: "JavaScript", description: "Little Lisp interpreter", link: "https://maryrosecook.com/blog/post/little-lisp-interpreter" },
            { title: "JavaScript", description: "How to implement a programming language in JavaScript", link: "http://lisperator.net/pltut/" },
            { title: "JavaScript", description: "Let’s go write a Lisp", link: "https://idiocy.org/lets-go-write-a-lisp/part-1.html" },
            { title: "OCaml", description: "Writing a C Compiler", link: "https://norasandler.com/2017/11/29/Write-a-Compiler.html" },
            { title: "OCaml", description: "Writing a Lisp, the series", link: "https://bernsteinbear.com/blog/lisp/" },
            { title: "Pascal", description: "Let's Build a Compiler", link: "https://compilers.iecc.com/crenshaw/" },
            { title: "Python", description: "A Python Interpreter Written in Python", link: "http://aosabook.org/en/500L/a-python-interpreter-written-in-python.html" },
            { title: "Python", description: "lisp.py: Make your own Lisp interpreter", link: "http://khamidou.com/compilers/lisp.py/" },
            { title: "Python", description: "How to Write a Lisp Interpreter in Python", link: "http://norvig.com/lispy.html" },
            { title: "Python", description: "Let’s Build A Simple Interpreter", link: "https://ruslanspivak.com/lsbasi-part1/" },
            { title: "Python", description: "Make Your Own Simple Interpreted Programming Language", link: "https://www.youtube.com/watch?v=dj9CBS3ikGA&list=PLZQftyCk7_SdoVexSmwy_tBgs7P0b97yD&index=1" }, // video
            { title: "Python", description: "From Source Code To Machine Code: Build Your Own Compiler From Scratch", link: "https://build-your-own.org/compiler/" },
            { title: "Racket", description: "Beautiful Racket: How to make your own programming languages with Racket", link: "https://beautifulracket.com/" },
            { title: "Ruby", description: "A Compiler From Scratch", link: "https://www.destroyallsoftware.com/screencasts/catalog/a-compiler-from-scratch" },
            { title: "Ruby", description: "Markdown compiler from scratch in Ruby", link: "https://blog.beezwax.net/2017/07/07/writing-a-markdown-compiler/" },
            { title: "Rust", description: "So You Want to Build a Language VM", link: "https://blog.subnetzero.io/post/building-language-vm-part-00/" },
            { title: "Rust", description: "Learning Parser Combinators With Rust", link: "https://bodil.lol/parser-combinators/" },
            { title: "Swift", description: "Building a LISP from scratch with Swift", link: "https://www.uraimo.com/2017/02/05/building-a-lisp-from-scratch-with-swift/" },
            { title: "TypeScript", description: "Build your own WebAssembly Compiler", link: "https://blog.scottlogic.com/2019/05/17/webassembly-compiler.html" },
        ],
        "Build your own Text Editor": [
            { title: "C", description: "Build Your Own Text Editor", link: "https://viewsourcecode.org/snaptoken/kilo/" },
            { title: "C++", description: "Designing a Simple Text Editor", link: "http://www.fltk.org/doc-1.1/editor.html" },
            { title: "Python", description: "Python Tutorial: Make Your Own Text Editor", link: "https://www.youtube.com/watch?v=xqDonHEYPgA" }, // video
            { title: "Python", description: "Create a Simple Python Text Editor!", link: "http://www.instructables.com/id/Create-a-Simple-Python-Text-Editor/" },
            { title: "Ruby", description: "Build a Collaborative Text Editor Using Rails", link: "https://blog.aha.io/text-editor/" },
            { title: "Rust", description: "Hecto: Build your own text editor in Rust", link: "https://www.flenker.blog/hecto/" },
        ],
        "Build your own Web Browser": [
        { title: "Rust", description: "Let's build a browser engine", link: "https://limpet.net/mbrubeck/2014/08/08/toy-layout-engine-1.html" },
        { title: "Python", description: "Browser Engineering", link: "https://browser.engineering" },
        ],

        "Build your own Web Server": [
            { title: "C#", description: "Writing a Web Server from Scratch", link: "https://www.codeproject.com/Articles/859108/Writing-a-Web-Server-from-Scratch" },
            { title: "Node.js", description: "Build Your Own Web Server From Scratch In JavaScript", link: "https://build-your-own.org/webserver/" },
            { title: "Node.js", description: "Let's code a web server from scratch with NodeJS Streams", link: "https://www.codementor.io/@ziad-saab/let-s-code-a-web-server-from-scratch-with-nodejs-streams-h4uc9utji" },
            { title: "Node.js", description: "lets-build-express", link: "https://github.com/antoaravinth/lets-build-express" },
            { title: "PHP", description: "Writing a webserver in pure PHP", link: "http://station.clancats.com/writing-a-webserver-in-pure-php/" },
            { title: "Python", description: "A Simple Web Server", link: "http://aosabook.org/en/500L/a-simple-web-server.html" },
            { title: "Python", description: "Let’s Build A Web Server.", link: "https://ruslanspivak.com/lsbaws-part1/" },
            { title: "Python", description: "Web application from scratch", link: "https://defn.io/2018/02/25/web-app-from-scratch-01/" },
            { title: "Python", description: "Building a basic HTTP Server from scratch in Python", link: "http://joaoventura.net/blog/2017/python-webserver/" },
            { title: "Python", description: "Implementing a RESTful Web API with Python & Flask", link: "http://blog.luisrei.com/articles/flaskrest.html" },
            { title: "Ruby", description: "Building a simple websockets server from scratch in Ruby", link: "http://blog.honeybadger.io/building-a-simple-websockets-server-from-scratch-in-ruby/" },
        ]
};

        // Populate the project category dropdown
        const categoryDropdown = document.getElementById('project-category');
        Object.keys(projectData).forEach(category => {
            const option = document.createElement('option');
            option.value = category;
            option.textContent = category;
            categoryDropdown.appendChild(option);
        });

        // Set default selected category
        categoryDropdown.value = "Build your own Blockchain / Cryptocurrency";

        // Populate the table based on selected category
        categoryDropdown.addEventListener('change', function() {
            const selectedCategory = categoryDropdown.value;
            const projectTableBody = document.getElementById('project-table').getElementsByTagName('tbody')[0];
            
            // Clear any existing rows
            projectTableBody.innerHTML = '';

            // Iterate through selected category projects and add rows
            projectData[selectedCategory].forEach(project => {
                const row = document.createElement('tr');

                // Create and append title cell
                const titleCell = document.createElement('td');
                titleCell.textContent = project.title;
                row.appendChild(titleCell);

                // Create and append description cell
                const descriptionCell = document.createElement('td');
                descriptionCell.textContent = project.description;
                row.appendChild(descriptionCell);

                // Create and append link cell
                const linkCell = document.createElement('td');
                const link = document.createElement('a');
                link.href = project.link;
                link.target = '_blank'; // Open in new tab
                link.textContent = "View Project";
                linkCell.appendChild(link);
                row.appendChild(linkCell);

                // Append row to table
                projectTableBody.appendChild(row);
            });
        });

        // Trigger the change event to load the default selected category's projects
        categoryDropdown.dispatchEvent(new Event('change'));
    </script>
  </body>
</html>
