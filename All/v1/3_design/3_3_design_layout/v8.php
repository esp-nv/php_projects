<!DOCTYPE html>
<html>
<head>
   <title>Layout structure of HTML</title>
   <style>
      * {
         box-sizing: border-box;
      }
      header {
         font-size: 25px;
         color: whitesmoke;
         padding: 1px;
         text-align: center;
         background-color: lightslategray;
      }
      nav {
         float: left;
         width: 20%;
         height: 350px;
         background: lightgray;
         padding: 20px;
      }
      nav ul {
         padding: 1px;
      }
      article {
         float: left;
         padding: 20px;
         width: 80%;
         background-color: lightyellow;
         height: 350px;
      }
      footer {
         background-color: lightslategray;
         padding: 10px;
         text-align: center;
         color: white;
         padding-top: 20px;
         padding-bottom: 10px;
      }
      footer a {
         margin: 10px;
      }
      footer p {
         margin-top: 30px;
      }
   </style>
</head>
<body>
   <!--header segment-->
   <header>
   <div>
   <p>Tutorialspoint</p>
   <p>Simply easy learning!</p>
   </div>
   </header>
   <section>
      <!--Menu Navigation segment-->
      <nav>
         <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Coding Ground</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">Corporate Training</a></li>
         </ul>
      </nav>
      <!--Content segment-->
      <article>
         <h1>Welcome to Tutorials point</h1>
         <p> Tutorialspoint.com is a dedicated website to provide quality online education in the domains of Computer Science, Information Technology, Programming Languages, and other Engineering as well as Management subjects. </p>
      </article>
   </section>
   <!--Footer segment-->
   <footer>
      <h2>Tutorialspoint</h2>
      <div>
         <a href="#">About us</a>
         <a href="#">Refund policy</a>
         <a href="#">Terms of use</a>
         <a href="#">Privacy policy</a>
         <a href="#">FAQ's</a>
         <a href="#">Affiliates</a>
         <a href="#">Contact</a>
      </div>
      <div>
         <p>Copyrights © TUTORIALS POINT (INDIA) PRIVATE LIMITED. All rights reserved.</p>
      <div>
   </footer>
</body>
</html>