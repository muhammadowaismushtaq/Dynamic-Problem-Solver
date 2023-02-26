<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<style type="text/css">
  
nav{
    background: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70px;
    padding: 0 100px;
    color: white;
    text-align: center;
}
.button{
    width: 400px;
    height: 440px;
    border: none;
    overflow: hidden;
    position: relative;
}
.button_sale
{
    width: 1200px;
    height: 500px;
    border: none;
    overflow: hidden;
    position: relative;
}
.imagy{
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    transition: all 2s;
}
.imagy:hover{
  transform: scale(1.2);
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  position: relative;
  margin: auto;
}
.slider_img{
  height: 620px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.left, .right {  
            cursor: pointer;  
            position: absolute;  
            top: 50%;  
            width: auto;  
            padding: 16px;  
            margin-top: -22px;  
            color: white;  
            font-weight: bold;  
            font-size: 18px;  
            transition: 0.6s ease;  
            border-radius: 0 3px 3px 0;  
        }  
 .right {  
            right: 0;  
            border-radius: 3px 0 0 3px;  
        }  
            .left:hover, .right:hover {  
                background-color: rgba(115, 115, 115, 0.8);  
            }  

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active_dot {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.img_container{
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 40px;
   -webkit-text-stroke: 1px black;
  transform: translate(-50%, -50%);
}
.anchor_link{
  text-decoration: none;
  color: #fff;
}
.anchor_link:hover{
  text-decoration: none;
  color: #fff;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<body>
<nav>
 	<h2>Dynamic Programming Problem Solver</h2>
   
</nav>
	<div style="margin: 50px;">
  <div class="row justify-content-between">
     <div class="img_container col-lg-4 col-offset-12 special-grid best-seller">
      <a href="Coinfile.php" class="anchor_link" href="/women_home">
                   <button class="button"><img src="Pics/Coin.jpg" class="imagy"></button>
                   <div class="centered">Coin Change</div>
                 </a>
    </div>
    <div class="img_container col-lg-4 col-offset-12 special-grid best-seller">
      <a href="../LCSfile.php">
                   <button class="button"><img src="Pics/LCS.jpg" class="imagy"></button>
                    <div class="centered">Longest Common Sequence</div>
                    </a>
    </div>
    <div class="img_container col-lg-4 col-offset-12 special-grid best-seller">
      <a href="editdistancefile.php">
                   <button class="button"><img src="Pics/EDIT.jpg" class="imagy"></button>
                    <div class="centered">Edit Distance</div>
                    </a>
    </div>
  </div> 
    <br>
    <div class="img_container col-lg-4 col-offset-12 special-grid best-seller">
      <a href="rodcuttingfile.php">
                   <button class="button_sale"><img src="Pics/rodcutting.jpg" class="imagy"></button>
                    </a>
    </div>
    <br>
  <div class="img_container row justify-content-between">
         <div class="col-lg-4 col-offset-12 special-grid best-seller">
          <a href="SCSfile.php">
                   <button class="button"><img src="Pics/scs.jpg" class="imagy"></button>
                    <div class="centered">Shortest Common Sequence</div>
                    </a>
    </div>
     <div class="img_container col-lg-4 col-offset-12 special-grid best-seller">
      <a href="01knapsackfile.php">
                   <button class="button"><img src="Pics/01.jpg" class="imagy"></button>
                    <div class="centered">0 1 Knapsack</div>
                    </a>
    </div>  
        <div class="img_container col-lg-4 col-offset-12 special-grid best-seller">
          <a href="matrixchainfile.php">
                 <button class="button"><img src="Pics/matrix.jpg" class="imagy"> </button>
                 <div class="centered">Matrix Chain Multiplication</div>
          </a>
    </div>
     </div>
     <div class="img_container row justify-content-between">
         <div class="col-lg-4 col-offset-12 special-grid best-seller">
          <a href="LISfile.php">
                   <button class="button"><img src="Pics/LIS.jpg" class="imagy"></button>
                    <div class="centered">Longest Increasing Sequence</div>
                    </a>
    </div>
     <div class="img_container col-lg-4 col-offset-12 special-grid best-seller">
      <a href="wordbreakfile.php">
                   <button class="button"><img src="Pics/wordbreak.jpg" class="imagy"></button>
                    <div class="centered">Word Break</div>
                    </a>
    </div>  
        <div class="img_container col-lg-4 col-offset-12 special-grid best-seller">
          <a href="partitionfile.php">
                 <button class="button"><img src="Pics/partition\.jpg" class="imagy"> </button>
                 <div class="centered">Partition Problem</div>
          </a>
    </div>
     </div>
     </div>
</body>
<script type="text/javascript">
</script>
</html>
