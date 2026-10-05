<?php

echo 'Get the absolute path: ' . __DIR__;
echo '<hr>';
$doc_root = $_SERVER['DOCUMENT_ROOT'];
echo 'Get the document root: ' . $doc_root;
echo '<br>';
echo 'Alternately you can do this path: ' . preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
;
echo '<hr>';

$base_dir = __DIR__;
echo 'base directory: ' . $base_dir;
echo '<hr>';
$protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
echo 'server protocol: ' . $protocol;
echo '<hr>';
$domain = $_SERVER['SERVER_NAME'];
echo 'domain name: ' . $domain;
echo '<hr>';
$base_url = preg_replace("!^${doc_root}!", '', $base_dir);
echo 'base url: ' . $base_url;
echo '<hr>';
// server port
$port = $_SERVER['SERVER_PORT'];
$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
echo 'server port:' . $port;
echo '<hr>';

// put em all together to get the complete base URL
$url = "${protocol}://${domain}${disp_port}${base_url}";
echo 'put em all together to get the complete base URL: ' . $url;
echo '<hr>';
// get file path
echo 'get file path: ' . dirname(dirname(__FILE__)) . '\inc\example.php';
echo '<hr>';
echo 'get file: ' . dirname(__FILE__) . '/example.php';

echo '<hr>';
$relativePath = 'v1.php';
$absolutePath = realpath($relativePath);
echo '1 Get the absolute path: ' . $absolutePath;

echo '<hr>';
echo 'Get file path relative to index.php: ' . dirname($_SERVER['SCRIPT_FILENAME']);
echo '<hr>';
echo 'Get URL of a Directory with PHP: ' . 'http://' . $_SERVER['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__);
;
echo '<hr>';
$realDocRoot = realpath($_SERVER['DOCUMENT_ROOT']);
$realDirPath = realpath(__DIR__);
$suffix = str_replace($realDocRoot, '', $realDirPath);
$prefix = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$folderUrl = $prefix . $_SERVER['HTTP_HOST'] . $suffix;
echo $folderUrl;
echo '<br>';
$pathInPieces = explode('/', $_SERVER['DOCUMENT_ROOT']);
echo $pathInPieces[0];
echo '<hr>';
// getcwd() function will return  
// the current working directory 
$directory = dir(getcwd());

// Exploring directories and their contents 
echo "Handle: " . $directory->handle . '<br>';
echo "Path: " . $directory->path . '<br>';

// If the evaluation is true then, the loop will 
// continue otherwise any directory entry with name 
// equals to FALSE will stop the loop . 
while (($file = $directory->read()) !== false)
{

    // printing Filesystem objects/functions with PHP 
    echo "filename: " . $file . '<br>';
}
$directory->close();

echo '<hr>';
// Create a directory Iterator 
$directory1 = new DirectoryIterator(dirname(__FILE__));

// Move to the third element (0 based indexing) 
$directory1->seek(2);

// Check for validity of element 
if ($directory1->valid())
{

    // Display the filename 
    echo $directory1->key() . " => " . 
    $directory1->getFilename(); 
}
