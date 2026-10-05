<?php
$pageTitle='Spisak';
include 'includes/header.php';
echo(' PHP_SELF <br>'.$_SERVER['PHP_SELF'].'<br><br>');
?>

        <a href="form.php">Dobavi nov kontakt</a>
        <table border="1">
            <tr>
                <td>Ime</td>
                <td>Telefon</td>
                <td>GrupaID</td>
                <td>Grupa</td>
                
            </tr>
            <tr>
               <?php
               //zadaljitelna poverka dali sashtestvuva faila
               if(file_exists('data.txt')){
                // $result= file_get_contents('data.txt');
                   $result=file('data.txt');
                 // pokazva informaciqta ot faila v browser-a
                 echo '<pre>'.print_r($result,true).'</pre>';
                
                 foreach ($result as $value) {
                     $columns= explode('!', $value);
                    echo '<pre>'.print_r($columns,true).'</pre>'; 
                     echo '<tr>
                        <td>'.$columns[0].'</td>
                        <td>'.$columns[1].'</td>
                        <td>'.$columns[2].'</td>    
                        <td>'.$groups[trim($columns[2])].'</td>
                     </tr>'; 
                 }
               }
               
               ?> 
            </tr>
        </table>
    
<?php
include 'includes/footer.php';
?> 