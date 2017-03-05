<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>



<div id="container" style="width:1000px; float;center;">

<div id="header" style="">
<h1 style="margin-bottom:0;">[theStickerbook]</h1></div>

<div id="contentleft" style="height:500px;width:498px;float:left;">
        <br>
        <h2> Thank you for your order!</h2>
        <p style="margin-left:22px">
        Name: 
        <?php echo $_POST["fname"]; ?>
        <?php echo $_POST["lname"]; ?><br>
        <h2> We'll send your stickers to: </h2>
        <?php echo $_POST["address1"]; ?>
        <?php echo $_POST["address2"]; ?> <br>
        <?php echo $_POST["county"]; ?><br>
        <?php echo $_POST["postcode"]; ?><br><br><br>
        <!--with the help of stackoverflow forum -->
       <?php
        $num1 = 2.50;
        $numOf = $_POST['quantity'];
        $a = $num1 * $numOf;
        echo "Total Price is &pound;". $a?>
        </p>
        
        
        <?php
        $myFile = "data.txt";
        $fh = fopen($myFile, 'a');
        $list = implode(",", $_POST) . "\n";
        fwrite($fh, $list);
        fclose($fh);
        ?>


</div>	

<div id="contentright" style="height:500px;width:498px;float:right;">

</div>

<div id="footer" style="clear:both;text-align:center">Andy McFadyen</div>

</div>

</body>