<!DOCTYPE html>
<html>
<head>
	<title>Word Break Files</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
<nav>
 	<h2>Dynamic Programming Problem Solver</h2>
</nav>
<?php
 session_start();
       $_SESSION['val']=array();
       $data1=0;
  for($i=1;$i<11;$i++)
  {
     $myfile=fopen("Input Files/Coin Change/".$i.".txt","r");
       $x=fgets($myfile);
       $y=fgets($myfile);
       $s1=explode(',', $x);
       $s2=explode(',', $y);
       fclose($myfile);
       echo "<a href='Coin Change/IndexCoin.php?data1=$i'><h2>File Input$i<br></h2></a>";
       echo "coin&emsp;";
        for($j=0;$j<count($s1);$j++)
        {
        echo "$s1[$j] ";
        }
       echo "<br>";
       echo "change $s2[0]<br>";
    }
  ?>
</body>
<script type="text/javascript" >
  var s1= <?php echo json_encode($s1); ?>;
  var s2= <?php echo json_encode($s2); ?>;
  for(i=0;i<s1.length;i++)
    {
      s1[i]=parseInt(s1[i]);
    }
  s2=parseInt(s2);
  console.log(s1);
   console.log(s2);
</script>
</html>
