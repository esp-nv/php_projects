<?php
/*
  Author: Javed Ur Rehman
  Website: https://www.allphptricks.com/
 */

require('db.php');
include("auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard - Secured Page</title>
        <!--  <link rel="stylesheet" href="css/style.css" />-->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    </head>
    <body>
        <div class="m-1 sticky-sm-top">
            <nav class="navbar  navbar-expand-lg navbar-dark bg-warning">
                <div class="container-fluid">
                    <span>Welcome to <?php echo $_SESSION['username']; ?>! Dashboard</span>
                    <span><a href="logout.php">Logout</a></span>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <span class="navbar-brand">Menu</span>
               <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav nav-pills">
                        <a class="nav-item nav-link active" href="index.php">Home </a>
                        <a class="nav-item nav-link" href="sort.php">Sort</a>
                        <a class="nav-item nav-link" href="logout.php">Logout</a>
                        
                    </div>
                </div>
            </nav>
        </div>
        <h1>title</h1>
       
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse orci nulla, bibendum a elit lobortis,
            viverra tincidunt ante. Curabitur elementum ante ac tellus rhoncus, eu maximus risus facilisis. Sed vitae 
            risus nibh. Morbi sed velit ut eros consequat tempus et vitae tellus. Mauris vitae mollis dui. Proin pharetra
            nisl velit, eget pulvinar urna molestie ut. In hac habitasse platea dictumst. Praesent hendrerit accumsan ex 
            ac posuere. In hac habitasse platea dictumst. Nam vestibulum vel dui sed iaculis. Cras mattis semper dapibus.
            Praesent finibus ornare lacus quis fermentum. Mauris aliquam, ligula consequat condimentum scelerisque, ipsum 
            nibh molestie ex, quis rutrum nunc nunc eu diam. Curabitur id dolor dictum, iaculis velit eu, imperdiet odio. 
            Nunc vel metus eu quam finibus accumsan eget vel sem.</p><<p>
Sed efficitur at leo quis viverra. Phasellus sit amet purus neque. Fusce vel hendrerit dolor. Sed a mollis dolor. Nam non iaculis libero. In porta justo sed sem tincidunt luctus. Pellentesque vitae efficitur mauris, ut faucibus dolor. Suspendisse eu lacus sit amet arcu commodo auctor. Nulla facilisi. In luctus, neque eu dapibus iaculis, massa nibh cursus lacus, quis facilisis eros tellus eget mauris. Ut condimentum magna sed scelerisque condimentum.
        </p><p>
Praesent est ipsum, dictum non lorem id, sodales egestas massa. Nulla quis orci risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent malesuada laoreet risus, eu auctor mi bibendum sit amet. Quisque vulputate nulla a porta aliquet. In lacinia odio sem, eu aliquam enim malesuada placerat. Proin sit amet nulla tincidunt, lobortis sapien in, egestas sapien. Sed suscipit nulla in dapibus fermentum. Fusce non egestas ligula. Vestibulum hendrerit vulputate nunc, ultrices iaculis sem dignissim eget. Proin nec mauris felis. Pellentesque interdum cursus velit. Nullam aliquet lorem leo, ac dapibus felis dapibus sed. Maecenas tristique vestibulum eros a pellentesque. In lacinia quis sapien vitae vulputate.
</p><p>
Nulla finibus mauris vel ipsum tempor aliquam. Nunc vel venenatis arcu, eget congue lacus. Etiam vitae mauris sodales, pulvinar elit quis, congue leo. Phasellus at ultrices leo. Sed at imperdiet enim, eget aliquam est. Sed sed vestibulum orci. Sed vitae diam efficitur, cursus odio sit amet, aliquet ex. Nam finibus laoreet enim ac volutpat. Suspendisse potenti. Sed consequat quam odio, rutrum pharetra turpis porttitor tincidunt. In dapibus mi sit amet urna blandit, non euismod felis scelerisque. Suspendisse varius, enim eu auctor facilisis, est ex pretium nisl, et sodales nunc augue sit amet urna. Aenean ut dui a massa posuere facilisis.
</p><p>
Phasellus vel nisi faucibus, molestie dolor quis, aliquam nunc. Donec imperdiet dolor commodo lorem maximus pretium. Donec ac tempor justo. Vestibulum pellentesque, mauris id finibus fringilla, nunc turpis egestas nibh, eget ultrices quam eros sit amet quam. Quisque mollis venenatis nunc, eu luctus felis eleifend sed. Etiam dignissim euismod sagittis. Aenean pulvinar elementum nulla sit amet tempus. Fusce convallis dapibus iaculis. Aliquam at pretium quam, id eleifend orci. Vivamus quis odio tincidunt velit vehicula cursus.
        </p>
    </body>
</html>
