<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Light And Dark Mode</title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- dark mode switch -->
    <div class="theme-switch-wrapper">
      <span id="toggle-icon">
        <span class="toggle-text">Light Mode</span>
        <i class="fa-solid fa-sun"></i>
      </span>
      <label class="theme-switch">
        <input type="checkbox" />
        <div class="slider round"></div>
      </label>
    </div>
    <!-- navigation -->
    <nav id="nav">
      <a href="#home">HOME</a>
      <a href="#about">ABOUT</a>
      <a href="#projects">PROJECTS</a>
      <a href="#contact">CONTACT</a>
    </nav>
    <!-- home -->
    <section id="home">
      <div class="title-group">
        <h1>Custom Title Here</h1>
        <h3>Welcome to the Website!</h3>
      </div>
    </section>
    <!-- about -->
    <section id="about">
      <h2>About</h2>
      <div class="about-container">
        <div class="image-container">
          <h3>Web Innovation</h3>
          <img
            src="img/undraw_proud_coder_light.svg"
            alt="proud coder"
            id="img1"
          />
        </div>
        <div class="image-container">
          <h3>Problem Solving</h3>
          <img
            src="img/undraw_feeling_proud_light.svg"
            alt="feeling proud"
            id="img2"
          />
        </div>
        <div class="image-container">
          <h3>High Concept</h3>
          <img
            src="img/undraw_conceptual_idea_light.svg"
            alt="conceptual idea"
            id="img3"
          />
        </div>
      </div>
    </section>
    <!-- projects -->
    <section id="projects">
      <h2>Buttons</h2>
      <div class="buttons">
        <button class="primary">Primary</button>
        <button class="secondary">Secondary"</button>
        <button class="primary" disabled>Disabled</button>
        <button class="outline">Outline</button>
        <button class="secondary outline">Alt Outline</button>
        <button class="outline" disabled>Disabled</button>
      </div>
      <div class="text-box" id="text-box">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
          quam necessitatibus sed excepturi ea facilis iusto natus veniam nisi
          alias pariatur totam et vel magni dignissimos, laudantium odio hic
          dolores?
        </p>
      </div>
    </section>
    <!-- contact -->
    <section id="contact">
      <div class="social-icons">
        <i class="fa-brands fa-github"></i>
        <i class="fa-brands fa-codepen"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-medium"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
      </div>
    </section>
    <!-- Script -->
    <script
      src="https://kit.fontawesome.com/27cc2998d4.js"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>