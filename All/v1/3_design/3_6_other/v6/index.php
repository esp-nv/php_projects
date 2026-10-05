
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
  

  <title>Tooltip</title>

    <link rel="canonical" href="https://codepen.io/hixann/pen/NvELLW">
  
  
  
  
<style>
body {
  background: #e6e6e6;
  font-family: "Helvetica", "Arial";
  padding-top: 100px;
  text-align: center;
}

a {
  background: #D2D7D3;
  color: #222;
  border-radius: 100%;
  display: inline-block;
  text-decoration: none;
  position: relative;
  width: 40px;
  height: 28px;
  margin: 0 2px;
  padding-top: 12px;
  -webkit-transition: all .5s;
  -moz-transition: all .5s;
  transition: all .5s;
}

a.icon:before {
  font-family: "FontAwesome", sans-serif;
  color: #fff;
  font-size: 20px;
}

a.facebook:before {
  content: '\f09a';
}

a.twitter:before {
  content: '\f099';
}

a.github:before {
  content: '\f113';
}

a.dribble:before {
  content: '\f17d';
}

a.pinterest:before {
  content: '\f0d2';
}

a span {
  background: #fff;
  color: #222;
  font-size: 14px;
  font-weight: bold;
  position:  absolute;
  bottom: 0;
  left: -25px;
  right: -25px;
  padding: 5px 7px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all .4s;
  -moz-transition: all .4s;
  transition: all .4s;
}

a span:before {
  content: '';
/*   width: 0;
  height: 0; */
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #fff;
  position: absolute;
  bottom: -5px;
  left: 40px;
}

a:hover span {
  bottom: 50px;
  visibility: visible;
  opacity: 1;
}


/* Hover through the icons */

a.facebook:hover {
  background-color: #4183d7; 
  color: #bfbfbf;
}

a.facebook span {
  color: #4183d7;
}

a.twitter:hover {
  background-color: #19b5fe;
  color: #fff;
}

a.twitter span {
  color: #19b5fe;
}

a.github:hover {
  background-color: #000;
  color: #fff;
}

a.github span {
  color: #000;
}

a.dribble:hover {
  background-color: #f62459;
  color: #fff;
}

a.dribble span {
  color: #f62459;
}

a.pinterest:hover {
  background-color: #f22613;
  color: #fff;
}

a.pinterest span {
  color: #f22613;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <head>
    <meta charset="UTF-8">
    <title>Tooltip Hover Effect</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div>
        <a href="https://www.facebook.com" class="icon facebook"><span>Facebook</span></a>
        <a href="https://www.twitter.com" class="icon twitter"><span>Twitter</span></a>
        <a href="https://www.github.com" class="icon github"><span>Github</span></a>
        <a href="http://www.dribble.com" class="icon dribble"><span>Dribble</span></a>
      <a href="https://pinterest.com" class="icon pinterest"><span>Pinterest</span></a>
    </div>
</body>
</html>
  
  
  
</body>

</html>
