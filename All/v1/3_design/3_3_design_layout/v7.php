<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta data-fr-http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Html Layout based on CSS float property</title>
    <style>
      div.container {
        width: 100%;
        border: 1px solid gray;
      }
      header, footer {
        padding: 1em;
        color: rgb(255, 255, 255);
        background-color: #b4607c;
        clear: left;
        text-align: center;
      }
      nav {
        float: left;
        max-width: 160px;
        margin: 0;
        padding: 1em;
      }
      nav ul {
        list-style-type: none;
        padding: 0;
      }
      nav ul a {
        text-decoration: none;
      }
      article {
        margin-left: 170px;
        border-left: 1px solid gray;
        padding: 1em;
        overflow: hidden;
      }
      
    </style>
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Html Layout based on CSS float property</h1>
      </header>


      <nav>
        <ul>
          <li><a href="#">Link1</a></li>
          <li> <a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
        </ul>
      </nav>
      <article>
        <h1> Layout </h1>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
         Lorem ipsum dolor sit amet consectetur adipisicing elit.
         voluptas eligendi nostrum voluptatem sapiente consectetur adipisicing elit.
          error aliquid alias unde ipsam fugit eveniet!
        </p>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <h1> Layout 2 </h1>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
         Lorem ipsum dolor sit amet consectetur adipisicing elit.
         voluptas eligendi nostrum voluptatem sapiente consectetur adipisicing elit.
          error aliquid alias unde ipsam fugit eveniet!
        </p>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <h1> Layout 3</h1>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
         Lorem ipsum dolor sit amet consectetur adipisicing elit.
         voluptas eligendi nostrum voluptatem sapiente consectetur adipisicing elit.
          error aliquid alias unde ipsam fugit eveniet!
        </p>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <h1> Layout 4</h1>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
         Lorem ipsum dolor sit amet consectetur adipisicing elit.
         voluptas eligendi nostrum voluptatem sapiente consectetur adipisicing elit.
          error aliquid alias unde ipsam fugit eveniet!
        </p>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <h1> Layout 5</h1>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
         Lorem ipsum dolor sit amet consectetur adipisicing elit.
         voluptas eligendi nostrum voluptatem sapiente consectetur adipisicing elit.
          error aliquid alias unde ipsam fugit eveniet!
        </p>
        <p>
            Molestias veniam expedita aliquid alias unde ipsam porro sequi vel, dolor rem esse soluta
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
      </article>
      <footer>Copyright © xyz</footer>
    </div>
  </body>
</html>