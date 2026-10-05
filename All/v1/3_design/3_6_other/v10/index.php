
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
  

  <title>Table with frozen table header and left column</title>

    <link rel="canonical" href="https://codepen.io/estelle/pen/RJpreX">
  
  
  
  
<style>
/* default styling. Nothing to do with freexing first row and column */
main {display: flex;}
main > * {border: 1px solid;}
table {border-collapse: collapse; font-family: helvetica}
td, th {border:  1px solid;
      padding: 10px;
      min-width: 200px;
      background: white;
      box-sizing: border-box;
      text-align: left;
}
.table-container {
  position: relative;
  max-height:  300px;
  width: 500px;
  overflow: scroll;
}

thead th {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  z-index: 2;
  background: hsl(20, 50%, 70%);
}

thead th:first-child {
  left: 0;
  z-index: 3;
}

tfoot {
  position: -webkit-sticky;
  bottom: 0;
  z-index: 2;
}

tfoot td {
  position: sticky;
  bottom: 0;
  z-index: 2;
  background: hsl(20, 50%, 70%);
}

tfoot td:first-child {
  z-index: 3;
}

tbody {
  overflow: scroll;
  height: 200px;
}

/* MAKE LEFT COLUMN FIXEZ */
tr > :first-child {
  position: -webkit-sticky;
  position: sticky; 
  background: hsl(180, 50%, 70%);
  left: 0; 
}
/* don't do this */
tr > :first-child {
  box-shadow: inset 0px 1px black;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <div class="table-container">
    <!--
  <table class="fixed-table">
    <thead>
      <tr><th>Fixed Header</th></tr>
    </thead>
    <tbody>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
      <tr><td>Fixed Column</td></tr>
    </tbody>
    <tfoot>
      <tr><td>Fixed Footer</td></tr>
    </tfoot>
  </table> -->
  
  <div class="table-horizontal-container">
    <table class="unfixed-table">
      <thead>
        <tr><th>Header</th><th>Header</th><th>Header</th><th>Header</th><th>Header</th><th>Header</th><th>Header</th><th>Header</th></tr>
      </thead>
      <tbody>
        <tr><th>Column one</th><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><th>Column one</th><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column one</td><td>Column two</td><td>Column three</td><td>Column four</td><td>Column firve</td><td>Column six</td><td>Column seven</td><td>Column eight</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
        <tr><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td><td>Column</td></tr>
      </tbody>
      
      <tfoot>
        <tr><td>Footer</td><td>Footer</td><td>Footer</td><td>Footer</td><td>Footer</td><td>Footer</td><th>Footer</th><th>Footer</th></tr>
      </tfoot>
    </table>
  </div>
</div>
</object>
</article>
  
  
  
</body>

</html>
