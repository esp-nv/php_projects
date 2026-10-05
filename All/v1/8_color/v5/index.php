<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="style.css">
   <title>Create a Website in HTML CSS and JavaScript DarkLight Mode Theme Colour Switchers</title>
</head>

<body>
   <nav>
      <div class="navbar">
         <div class="logo">
            <a href="#">Color theme switcher</a>
         </div>
         <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Skills</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
         </ul>
         <div class="appearance">
            <div class="light-dark">
               <i class="btn fas fa-moon" data-color="#e4e6eb #e4e6eb #24292d #24292d #242526"></i>
            </div>
            <div class="color-icon">
               <div class="icons">
                  <i class="fas fa-palette"></i>
                  <i class="fas fa-sort-down arrow"></i>
               </div>
               <div class="color-box">
                  <h3>Color Switcher</h3>
                  <div class="color-switchers">
                     <button class="btn blue active" data-color="#fff #24292d #4070f4 #0b3cc1 #f0f8ff"></button>
                     <button class="btn orange" data-color="#fff #24292d #f79f1f #dd8808 #fef5e6"></button>
                     <button class="btn purple" data-color="#fff #24292d #8e44ad #783993 #eadaf1"></button>
                     <button class="btn green" data-color="#fff #24292d #3a9943 #2a6f31 #daf1dc"></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>

   <section class="home-content">
      <texts>
         <h2>Customize your Website</h2>
         <h3>With a <span>Beautiful Colours...</span></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi at repellendus incidunt itaque iste, modi
            ipsa
            doloremque repudiandae enim perspiciatis impedit eum esse et eos qui, quod recusandae dolorum aperiam.</p>
         <div class="button">
            <a href="#">
               Explore
               <i class="fas fa-location-arrow"></i>
            </a>
         </div>
      </texts>
   </section>
   <script src="script.js"></script>
</body>

</html>