<?php

// Create a directory Iterator 
$directory = new DirectoryIterator(dirname(__FILE__));

// Loop runs for each element of directory 
foreach ($directory as $dir)
{

    // Check if not a dot directory 
    if (!$dir->isDot())
    {

        // Display directory element and its permission 
        $perms = substr(sprintf('%o', $dir->getPerms()), -4);
        echo $dir->getFilename() . " "
        . " | Permission: " . $perms . "<br>";
    }
}

echo '<hr>';
// Create a directory Iterator 
$directory1 = new DirectoryIterator(dirname(__FILE__));

// Loop runs while directory is valid 
while ($directory1->valid())
{

    // Check if not a dot directory 
    if (!$directory1->isDot())
    {
        echo $directory1->getFilename() . "<br>";
    }
    $directory1->next();
}
echo '<hr>';
// Create a directory Iterator 
$directory2 = new DirectoryIterator(dirname(__FILE__));

// Loop runs while directory is valid 
while ($directory2->valid())
{

    // Check the element is directory 
    if ($directory2->isDir())
    {

        // Display the key and file name 
        echo $directory2->key() . " => " .
        $directory2->getFilename() . "<br>";
    }

    // Move to the next element 
    $directory2->next();
}

// Use rewind() function to move to 
// the start position 
$directory2->rewind();

// Display the key and file name 
echo $directory2->key() . " => " .
 $directory2->getFilename();

echo '<hr>';
// Create a directory Iterator 
$directory3 = new DirectoryIterator(dirname(__FILE__)); 
  
// Loop runs for each element of directory 
foreach($directory3 as $dir) { 
  
    // Display key and file name 
    echo $dir->key() . " => " .  
    $dir->getFilename() . "<br>"; 
} 
  
// Use rewind() function to move to 
// the start position 
$directory3->rewind(); 
  
// Display key and file name 
echo $directory3->key() . " => " .  
        $directory3->getFilename(); 
echo '<hr>';
var_dump(DIRECTORY_SEPARATOR);
var_dump(bin2hex(PHP_EOL)); 
echo '<hr>';
$path = "index.php";
$filenameExt = basename($path);          // "index.php"
var_dump($filenameExt);
$filename    = basename($path, ".php");  // "index"
var_dump($filename);
echo '<hr>';
var_dump($_SERVER['PHP_SELF']);                   // e.g., 'test/test.php'
var_dump(basename($_SERVER['PHP_SELF']));         // e.g., 'test.php'
var_dump(basename($_SERVER['PHP_SELF'], '.php')); // e.g., 'test'
echo '<hr>';
echo 'Get the absolute path: ' . __DIR__;
echo '<hr>';
echo 'Get the absolute path: ' . __DIR__;
echo '<hr>';
echo 'Get the absolute path: ' . __DIR__;
echo '<hr>';
echo 'Get the absolute path: ' . __DIR__;
echo '<hr>';

