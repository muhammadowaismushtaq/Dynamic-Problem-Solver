<!DOCTYPE html>
<html>
<head>
	<title>0/1 KnapSack</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<?php
 	   $myfile=fopen("input.txt","r");
 		$s1=fgets($myfile);
       ?>
0/1 KnapSack Problem
<table>
	<thead id="headings">
	</thead>
	<tbody id="content"></tbody>
</table>
<div id="working">
	<p>ALGORITHM OF KnapSack</p>
<div id="code">
	<span>for(let i=0;i<=value.length;i++)</span>
	<br>
	{
		<br>
		<span>for(let j=1;j<=W;j++)</span><br>
		{<br>
			<span>if(weight[i-1]<=j)</span><br>
			{<br>
				<span>knapsack_table[i][j] = Math.max(knapsack_table[i-1][j],value[i-1]+knapsack_table[i-1][j-weight[i-1]]);</span>
			}<br>
			<span>else</span><br>
			{<br>
				<span>knapsack_table[i][j] = knapsack_table[i-1][j];</span><br>
			}<br>
		}<br>

	}<br>
</div>

<div id="steps">
<p>Working Step by Step</p>

<div id="common">
	
</div>
</div>
</div>
<button onclick="show()" id="fr_btn">Forward</button>
<button onclick="backshow()" id="bk_btn">Backward</button>
</body>
<script type="text/javascript">
	word = "samsungandmangok";
	var word= <?php echo $s1; ?>;; 
window.onload = () =>{
	//console.log(s1);
		var x=wordBreak(word);
		console.log(x);
	}
function dictionaryContains(word) 
{ 
	var dictionary = ["mobile","samsung","sam","sung","man","mango", 
						"icecream","and","go","i","like","ice","cream"]; 
	for (let i = 0; i < dictionary.length; i++) 
		if (dictionary[i].localeCompare(word) == 0) 
		return true; 
	return false; 
} 

// Returns true if string can be segmented into space separated 
// words, otherwise returns false 
function wordBreak(str) 
{ 
	var size = str.length; 
	if (size == 0) return true; 

	// Create the DP table to store results of subroblems. The value wb[i] 
	// will be true if str[0..i-1] can be segmented into dictionary words, 
	// otherwise false. 
	var wb=	[]; 
	//memset(wb, 0, sizeof(wb)); // Initialize all values as false.
	for(let i=0;i<=size;i++)
	wb[i]=false; 

	for (let i=1; i<=size; i++) 
	{ 
		// if wb[i] is false, then check if current prefix can make it true. 
		// Current prefix is "str.substr(0, i)" 
		if (wb[i] == false && dictionaryContains( str.substr(0, i) )) 
			wb[i] = true; 

		// wb[i] is true, then check for all substrings starting from 
		// (i+1)th character and store their results. 
		if (wb[i] == true) 
		{ 
			// If we reached the last prefix 
			if (i == size) 
				return true; 

			for (let j = i+1; j <= size; j++) 
			{ 
				// Update wb[j] if it is false and can be updated 
				// Note the parameter passed to dictionaryContains() is 
				// substring starting from index 'i' and length 'j-i' 
				if (wb[j] == false && dictionaryContains( str.substr(i, j-i) )) 
					wb[j] = true; 

				// If we reached the last character 
				if (j == size && wb[j] == true) 
					return true; 
			} 
		} 
	} 

	/* Uncomment these lines to print DP table "wb[]" 
	for (int i = 1; i <= size; i++) 
		cout << " " << wb[i]; */

	// If we have tried all prefixes and none of them worked 
	return false; 
} 
</script>
</html>