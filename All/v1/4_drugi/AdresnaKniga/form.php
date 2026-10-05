<?php
mb_internal_encoding('UTF-8');
$pageTitle='Forma';
include 'includes/header.php';
//danni koito sadarjat sekretna informaciq ne trqbva da se prashtat s metod get
// s get te se mogat da se vidqt ot nejelani potrebiteli ili hakeri i po lesno se blokira ili hakva sait
if($_POST) {
   //normalizaciq na danni
    $username= trim($_POST['username']);// premahva intervali otpred i otzad pred stringa
    $username= str_replace('!', '', $username); // premahvame simvola za razdel na poletata na poletata
    $phone= trim($_POST['phone']);
    $phone= str_replace('!', '', $phone);
    $selectedGroup=(int)$_POST['group'];
    $error=false;  
   //validaciq 
  // echo mb_strlen($username,'UTF-8'); izkarva kolko e daljinata na username
  if(mb_strlen($username,'UTF-8')<4){
      echo '<p>Imeto e prekaleno kaso</p>';
      $error=true;
  } 
  if(mb_strlen($phone)<6 || mb_strlen($phone)>12){
      echo '<p>Telefon s greshna daljina / nevaliden telefon</p>';
      $error=true;
  } 
 if(!array_key_exists($selectedGroup, $groups))// proverqva v masiva imali tozi $key
 {
     echo '<p>Nevalidna grupa</p>';
     $error=true;
 }
// echo 'zapis';
 // echo '<pre>'.print_r($_POST,true).'</pre>'; proverka kakvo ima v masiva kato stoinost
  //proverka za greshka
 if(!$error){
     //echo 'zapis';
   $result=$username.'!'.$phone.'!'.$selectedGroup."\n";// tuk zapisvame dannite; ZADALJITELNO V DVOJNI KAVI4KI
   if(file_put_contents('data.txt',$result,FILE_APPEND)){// tuk gi zapisvame v faila data.txt
       echo 'zapisa e uspeshen';  
   }
   
 }
}

?>
<a href="v1.php">Списък</a>
<form method="post">
        <div>Ime:<input type="text" name="username"/></div>
        <div>Telefon:<input type="text" name="phone"/></div>
        <div>Grupa:
            <select name="group">
                  <?php
                  foreach ($groups as $key=>$value) {
                      echo '<option value="'.$key.'">'.$value.'</option>';
                  }
                  ?>
            </select>
        </div>        
        <div><input type="submit" value="Dobavi"/></div>
</form>
<?php
include 'includes/footer.php';
?>    