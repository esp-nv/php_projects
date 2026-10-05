<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include"index.php";
		echo $link; ?>
        <title><?php echo $pageTitle; ?></title>
        <style>
            #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: red;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
            }

            #myBtn:hover {
                background-color: #555;
            }
        </style>
    
</head>
<body>
   <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
    
