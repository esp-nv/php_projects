<?php
// -----------------------------
// Folder / File Explorer
function explore_dir_scan_html($dir, $niv=0, $id=0)
{
 $html = null;
 $html_dirs = null;
 $html_fils = null;
 if($niv==0){ $html .= ' <ul>'."\n"; }
 if ($handle = opendir($dir)) {
 while (false !== ($entry = readdir($handle))) {
 $id++;
 if(is_dir($dir.'/'.$entry)) // folder
 {
 if($entry!='..' && $entry!='.')
 {
 $html_dirs .= str_repeat("\t",$niv+1).'<li class="dir" id="div_'.$id.'">'.$entry."\n";
 $html_dirs .= str_repeat("\t",$niv+2).'<ul class="sub_dir" id="sub_'.$id.'">'."\n";
 $html_dirs .= explore_dir_scan_html($dir.'/'.$entry, $niv+1, $id);
 } 
 } else { // file
 $html_fils .= str_repeat("\t",$niv+2).'<li class="fil" id="fil_'.$id.'"><a href="'.$dir.'/'.$entry.'" target="_blank">'.$entry.'</a></li>'."\n";
 }
 if(is_dir($dir.'/'.$entry))
 {
 if($entry!='..' && $entry!='.')
 {
 $html_dirs .= str_repeat("\t",$niv+2).'</ul>'."\n";
 $html_dirs .= str_repeat("\t",$niv+1).'</li>'."\n";
 }
 }
 }
 closedir($handle);
 $html .= $html_dirs; // folders
 $html .= $html_fils; // files
 } 
 if($niv==0){ $html .= ' </ul>'."\n"; }
 return $html;
};
// -----------------------------
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
<script>
// -----------------------------
// OPEN / CLOSE FOLDERS: In pure JavaScript (WITHOUT jQuery)
window.onload = function() {
 var explorateur_dirs = document.querySelectorAll('#explorateur-dossier .dir');
 for( index=0; index < explorateur_dirs.length; index++ ) 
 {
 explorateur_dirs[index].addEventListener('click', function(ev){ opencloseSubDir(this); ev.stopPropagation(); }, false);
 }
};
function opencloseSubDir( dossier ) 
{
 var ul = dossier.querySelector('ul');
 ul.style.display = (ul.style.display!='block')? 'block':'none';
 
}
// -----------------------------
</script>
 
<!-- or WITH jQuery -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script>
/*
// ----------------------------- 
// OPEN / CLOSE FILES: WITH jQuery
$(document).ready(function(){
 $('#explorateur-dossier').on('click', '.dir', function(event){
 $(this).find('ul').first().slideToggle();
 event.stopPropagation(); // important
 });
});
// -----------------------------
*/
</script>
<style>
#explorateur-dossier ul { margin:0; padding:0; list-style:none outside none; }
#explorateur-dossier .dir { position:relative; padding-left:20px; cursor:pointer; border:solid 0px #00FF00; }
#explorateur-dossier .sub_dir { position:relative; padding-left:20px; cursor:pointer; display:none; border:solid 0px #FF0000;; }
#explorateur-dossier .fil { position:relative; padding-left:20px; }
#explorateur-dossier .dir:before { position:absolute; content:''; display:block; width:16px; height:16px; top:2px; left:0; background:url(images/folder.png) no-repeat; }
#explorateur-dossier .fil:before { position:absolute; content:''; display:block; width:16px; height:16px; top:2px; left:0; background:url(images/file.png) no-repeat; }
</style>
</head>
<body>
 
<nav id="explorateur-dossier">
<?php echo explore_dir_scan_html('./'); // ( ../ parent folder) ?>
</nav>
 
</body>
</html>

