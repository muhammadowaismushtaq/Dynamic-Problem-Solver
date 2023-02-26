<!DOCTYPE html>
<html>
<head>
	<title>Longest Increasing Subsequence</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
 	<h2> Longest Increasing Subsequence </h2>
   
</nav>
	<?php
 	   $myfile=fopen("input.txt","r");
       $x=fgets($myfile);
       $s1=explode(',', $x);
	?>
<table>
	<thead id="headings">
	</thead>
	<tbody id="content"></tbody>
</table>
<div id="working">
<div id="code">
	<h3 style="color:black;">Longest Increasing Subsequence ALGORITHM</h3>
	<span>for(let i=1;i<=coin.length;i++){</span><br>
		<span>&emsp;for(let j=1;j<=change;j++){</span><br>
			<span>&emsp;&emsp;if(coin[i-1]<=j){</span><br>
				<span>&emsp;&emsp;&emsp;change_table[i][j] = Math.min(change_table[i-1][j],1+change_table[i][j-coin[i-1]]);</span>
			}<br>
			<span>&emsp;&emsp;else{</span><br>
				<span>&emsp;&emsp;&emsp;change_table[i][j] = change_table[i-1][j];</span><br>
			&emsp;&emsp;}<br>
		&emsp;}<br>

	}<br>
</div>
</div>
<div id="steps">
<h3 style="color:black;">Working Step by Step</h3><br>	
<div id="common">
	
</div>
</div>
<p id="button">
<br><br>
<a onclick="show()" id= "fr_btn">Auto Run</a><br><br><br><br>
<a onclick="show()" id= "fr_btn">Forward</a><br><br><br><br>
<a onclick="backshow()" id= "bk_btn">Backward</a>
</body>
<script type="text/javascript">

	var num_array = [];
	var i1=0;
	var j1=0;
	var material = [[],[]];
	var s1= <?php echo json_encode($s1); ?>;
	window.onload = () =>{
		for(i=0;i<s1.length;i++)
		{
			num_array[i]=parseInt(s1[i]);
		}
		LIS(num_array);

	}


	function LIS(num_array)
	{
		
		if(num_array.length == 0)
		return 0;
	var headings=' ';
	var x = ' ';
	var content=' ';
	const tablehead = document.getElementById('headings');
	const TableLeft = document.getElementById('leftcontent');
	const ContentTable = document.getElementById('content');
	var LIS_table=[],max=0;
		for(let i=0;i<num_array.length;i++)
		{
		LIS_table[i]=1;
		material[i]=[];
		for(let j=-1;j<num_array.length;j++)
		{
			if(j>=0)
			{
			if(i==0)
			{
				
			}
			if(j==0)
			{
				headings += '<td>'+num_array[i]+'</td>';
				//material[i][j]='i = '+i+'   j = '+j+'<br>change_table[i][0]=0;';
				//material[i][j]='change_table[i][0]=0;';
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">i = '+i+'   j = '+j+'</span><br>');
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">change_table[i][0]=0;</span><br>');
			}
			if(i==0 && j>0)
			{
			//change_table[0][j]=Infinity;
			//	material[i][j]='i = '+i+'   j = '+j+'<br>change_table[0][j]=Infinity;';
			}
			}
			else
			{
				if(i==0)
				headings += '<td>Index</td>';
			}

		}
		}
		//LIS_table[0]=[num_array[0]];
//		console.log(LIS_table[0]);

		// console.log(LIS_table[0]);

		// console.log(LIS_table[1]);
		// console.log(LIS_table[2]);
		
	for(var i=1;i<num_array.length;i++)
	{
		for(var j=0;j<i;j++)
		{
		// 	console.log("i zisw"+LIS_table[i].length);
		// console.log("j size"+LIS_table[j].length);
			if(num_array[j] < num_array[i] && LIS_table[j]+1 > LIS_table[i])
			{
				
				// console.log(num_array[i]);console.log(num_array[j]);
				//<br>LIS_table[i][j] = '+Math.min(LIS_table[i-1][j],1+LIS_table[i][j-number[i-1]])+';
				// <br>LIS_table[i][j] = Math.min('+LIS_table[i-1][j]+',1+'+LIS_table[i][j-number[i-1]+'])'
				// <br>LIS_table[i][j] = Math.min(LIS_table['+i-1+']['+j+'],1+LIS_table['+i+']['+j+'-number['+i-1+']])'
				//console.log(LIS_table[j]);
				//LIS_table[i]=[];
				LIS_table[i]=LIS_table[j]+1;
				material[i][j]='i = '+i+'   j = '+j+'<br>if(num_array[j] < num_array[i] && LIS_table[j]+1 > LIS_table[i])<br>if('+num_array[j]+' < '+num_array[i]+' && '+LIS_table[j]+1+' > '+LIS_table[i]+')<br>{<br>LIS_table[i]='+(LIS_table[j]+1)+'<br>}<br>';
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				//material[i][j]='i = '+i+'   j = '+j+'<br>LIS_table[i][j] = LIS_table['+i+'-1]['+j+'-1]+1 <br>LIS_table[i][j] = LIS_table['+(i-1)+']['+(j-1)+']+1<br>So,LIS_table[i][j] = '+(LIS_table[i-1][j-1]+1)+'';
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff">'+LIS_table[i][j]+'</span>');
			}
			
		}
		//console.log(LIS_table[3]);
		//LIS_table[i].push(num_array[i]);
		//console.log(LIS_table[2]);
	}
	for(let i=0;i<num_array.length;i++)
	{
		$("#content").append("<tr id='content"+i+"'></tr>");
		for(let j=-1;j<num_array.length;j++)
		{
			if(j>=0)
			{
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="color:#fff">'+LIS_table[i]+'</td>');
				material[i][j]='i = '+i+'   j = '+j+'<br>if(num_array[j] < num_array[i] && LIS_table[j]+1 > LIS_table[i])<br>if('+num_array[j]+' < '+num_array[i]+' && '+LIS_table[j]+1+' > '+LIS_table[i]+')<br>{<br>LIS_table[i]='+(LIS_table[j]+1)+'<br>}<br>';
			//content += "<td id='records' style='color:#fff;'>"+change_table[i][j]+"</td>";
			//ContentTable.innerHTML = content; 	
			}
			else
			{
				//content+='<td style="font-weight:bold;">'+i+'</td>';
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+num_array[i]+'</td>');
			}
		  	//setTimeout(function(){ ContentTable.innerHTML = content; }, 2000);
		}
	}
	tablehead.innerHTML = headings;
	for(var i=0;i<num_array.length;i++)
	{
		if(max<LIS_table[i])
		{
			max = LIS_table[i]
		}
		
		console.log(LIS_table[i]);
		
	}
	console.log("Max = "+max);
	//console.log(LIS_table[0]);
}

function show()
{
	document.getElementById("bk_btn").disabled = false;
	console.log(i1);
	console.log(j1);
	var flag = 0;
	if(i1 == num_array.length  && j1 == num_array.length)
	{
		console.log("rafay")
	document.getElementById("fr_btn").disabled = true;
	flag=1;
	}
	var select1 = document.getElementById("id"+i1+j1);
	var select2 = document.getElementsByClassName("step"+i1+j1);
	var select3 = document.getElementById("common");
	select1.style="color:#009879";
	select3.innerHTML=material[i1][j1];
	console.log(select2);
	if(flag==1)
	{
		j1--;
	}
	// for(var count = 0; count < select2.length; count++)
	// {
	// //console.log("sdd");
	//  select2[count].style="color:#000";
	//  //if(check==0)
	//  select3.innerHTML =select2[count];
	//  select3.style="display:none";
	//  }

	//$("id"+i1+j1).css("	background-color","black");
	//console.log(select2);
	j1++;
	if(j1==num_array.length)
	{
		i1++;
		j1=0;

	}
	
		
// console.log(i1);
// console.log(j1);
}
function backshow()
{
		
	var select1 = document.getElementById("id"+(i1)+(j1));
	var select2 = document.getElementsByClassName("step"+i1+j1);
	var select3 = document.getElementById("common");
	select1.style="color:#fff";
	select3.innerHTML=material[i1][j1];
	if(j1==0)
	{
		i1--;
		j1=num_array.length;

	}
	j1--;
		console.log(j1);
		console.log(i1);
	if(i1<0)
		i1++;
		if(i1==0 && j1==0)
	{
		console.log("rr");
		document.getElementById("bk_btn").disabled = true;
		return;
	}
	document.getElementById("fr_btn").disabled = false;
	

}

// 	}
// 	for(let i=0;i<=string1.length;i++)
// 	{
// 		$("#content").append("<tr id='content"+i+"'></tr>");
// 		for(let j=-1;j<=string2.length;j++)
// 		{
// 			if(j>=0)
// 			{
			
// 			$("#content"+i).append('<td id="id'+(i) + (j)+'" style="color:#fff">'+LIS_table[i][j]+'</td>');
// 			//content += "<td id='records' style='color:#fff;'>"+change_table[i][j]+"</td>";
// 			//ContentTable.innerHTML = content; 	
// 			}
// 			else
// 			{
// 				//content+='<td style="font-weight:bold;">'+i+'</td>';
// 				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+i+'</td>');
// 			}
// 		  	//setTimeout(function(){ ContentTable.innerHTML = content; }, 2000);
// 		}

// 	}
// 	tablehead.innerHTML = headings;

// 	}

// function show()
// {
// 	document.getElementById("bk_btn").disabled = false;
// 	console.log(i1);
// 	console.log(j1);
// 	var flag = 0;
// 	if(i1 == string1.length  && j1 == string2.length)
// 	{
// 	document.getElementById("fr_btn").disabled = true;
// 	flag=1;
// 	}
// 	var select1 = document.getElementById("id"+i1+j1);
// 	var select2 = document.getElementsByClassName("step"+i1+j1);
// 	var select3 = document.getElementById("common");
// 	select1.style="color:#000";
// 	select3.innerHTML=material[i1][j1];
// 	console.log(select2);
// 	if(flag==1)
// 	{
// 		j1--;
// 	}
// 	// for(var count = 0; count < select2.length; count++)
// 	// {
// 	// //console.log("sdd");
// 	//  select2[count].style="color:#000";
// 	//  //if(check==0)
// 	//  select3.innerHTML =select2[count];
// 	//  select3.style="display:none";
// 	//  }

// 	//$("id"+i1+j1).css("	background-color","black");
// 	//console.log(select2);
// 	j1++;
// 	if(j1==(string2.length)+1)
// 	{
// 		i1++;
// 		j1=0;

// 	}
	
		
// // console.log(i1);
// // console.log(j1);
// }
// function backshow()
// {
		

// 	var select1 = document.getElementById("id"+(i1)+(j1));
// 	var select2 = document.getElementsByClassName("step"+i1+j1);
// 	var select3 = document.getElementById("common");
// 	select1.style="color:#fff";
// 	select3.innerHTML=material[i1][j1];
// 	j1--;
// 	if(i1<0)
// 		i1++;
// 		if(i1==0 && j1==0)
// 	{
// 		console.log("rr");
// 		document.getElementById("bk_btn").disabled = true;
// 		return;
// 	}
// 	document.getElementById("fr_btn").disabled = false;
// 	if(j1==0)
// 	{
// 		i1--;
// 		j1=(string2.length);

// 	}

// }
	
</script>
</html>
