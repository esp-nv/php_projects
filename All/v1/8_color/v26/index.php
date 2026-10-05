<html lang="en">
<head>
    <!-- To switch themes, go to https://www.bootstrapcdn.com/bootswatch/?theme=0 -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <a class="navbar-brand">Bootswatch Theme Changer</a>
    <div class="nav navbar-nav pull-right">
        <li id="theme-button" class="dropdown">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Change Theme <b class="caret"></b></a>
          <ul class="dropdown-menu ">
            <li><a href="#" name="current">Cerulean</a></li>
            <li class="divider"></li>
            <li><a href="#" name="cerulean">Cerulean</a></li>
            <li><a href="#" name="cosmo">Cosmo</a></li>
            <li><a href="#" name="cyborg">Cyborg</a></li>
            <li><a href="#" name="darkly">Darkly</a></li>
            <li><a href="#" name="flatly">Flatly</a></li>
            <li><a href="#" name="journal">Journal</a></li>
            <li><a href="#" name="lumen">Lumen</a></li>
            <li><a href="#" name="paper">Paper</a></li>
            <li><a href="#" name="readable">Readable</a></li>
            <li><a href="#" name="sandstone">Sandstone</a></li>
            <li><a href="#" name="simplex">Simplex</a></li>
            <li><a href="#" name="slate">Slate</a></li>
            <li><a href="#" name="solar">Solar</a></li>
            <li><a href="#" name="spacelab">Spacelab</a></li>
            <li><a href="#" name="superhero">Superhero</a></li>
            <li><a href="#" name="united">United</a></li>
            <li><a href="#" name="yeti">Yeti</a></li>
          </ul>
        </li>
    </div>
  </div>
</div>
<script>
jQuery(function($) {
  $('#theme-button ul a').click(function() {
    if ($(this).attr('name') != 'current') {
      var urlbeg = 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/'
      var urlend = '/bootstrap.min.css'
      var themeurl = urlbeg + $(this).text().toLowerCase() + urlend;
      var link = $('link[rel="stylesheet"][href$="/bootstrap.min.css"]').attr('href', themeurl);

      $('#theme-button ul a[name="current"]').text($(this).text());
    }
  });
});
</script>
</body>
</html>