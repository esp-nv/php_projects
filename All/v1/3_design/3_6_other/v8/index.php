
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
  

  <title>Tooltip Pagination</title>

    <link rel="canonical" href="https://codepen.io/dope/pen/RNGQWp">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
  
<style>
body {
  background: #1BA39C;
}

.pagination {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 15px;
  margin: auto;
  text-align: center;
}
.pagination__dot {
  position: relative;
  width: 8px;
  height: 8px;
  border: 2px solid #5ae4dd;
  border-radius: 100px;
  display: inline-block;
  cursor: pointer;
  margin: 0 4px;
  transition: 0.3s;
}
.pagination__dot--active {
  background: #5ae4dd;
}
.pagination__dot:hover {
  transition: 0.3s;
  border-color: white;
  background: white;
}
.pagination__dot:hover:before {
  top: -48px;
  opacity: 1;
}
.pagination__dot:hover:after {
  top: -18px;
  opacity: 1;
}
.pagination__dot:before {
  position: absolute;
  top: -40px;
  left: -36px;
  background: white;
  width: 80px;
  font-family: "Montserrat";
  font-size: 14px;
  padding: 8px 0;
  border-radius: 3px;
  content: attr(data-tooltip);
  opacity: 0;
  transition: 0.3s;
}
.pagination__dot:after {
  position: absolute;
  width: 0;
  height: 0;
  top: -10px;
  left: -2px;
  border-top: 6px solid white;
  border-right: 6px solid transparent;
  border-bottom: 6px solid transparent;
  border-left: 6px solid transparent;
  content: "";
  opacity: 0;
  transition: 0.3s;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <div class="pagination">
  <div data-tooltip="Tooltip 1" class="pagination__dot pagination__dot--active"></div>
  <div data-tooltip="Tooltip 2" class="pagination__dot"></div>
  <div data-tooltip="Tooltip 3" class="pagination__dot"></div>
  <div data-tooltip="Tooltip 4" class="pagination__dot"></div>
  <div data-tooltip="Tooltip 5" class="pagination__dot"></div>

</div>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  
</body>

</html>
