<!DOCTYPE html>
<html>
<head>
	<title>0 1 Knapsack Problem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		$s= $_GET['data1'];
 	   $myfile=fopen("$s.txt","r");
       $x=fgets($myfile);
       $y=fgets($myfile);
       $z=fgets($myfile);
       $s1=explode(',', $x);
       $s2=explode(',', $y);
       $s3=explode(',', $z);
	?>
<nav>
 	<h2> 0/1 KNAPSACK PROBLEM </h2>
   
</nav>

<!-- <div>
	<div id="leftcontent"></div>
</div> -->
<table>Auto Run

	<thead id="headings">
	</thead>
	<tbody id="content"></tbody>
</table>
<div id="working">
	
<div id="code">
<h3 style="color:black;">KNAPSACK ALGORITHM</h3><br>
	<span>for(let i=0; i<=value.length; i++){</span>
		<br>
		<span>&emsp;for(let j=1; j<=W; j++){</span><br>
			<span>&emsp;&emsp;if(weight[i-1]<=j){</span><br>
				<span>&emsp;&emsp;&emsp;knapsack_table[i][j] = Math.max(knapsack_table[i-1][j],value[i-1]+knapsack_table[i-1][j-weight[i-1]]);</span>
			}<br>
			<span>&emsp;&emsp;else{</span><br>
				<span>&emsp;&emsp;&emsp;knapsack_table[i][j] = knapsack_table[i-1][j];</span><br>
	
&emsp;&emsp;}<br>
		&emsp;}<br>

	}<br>
</div>
<div id="steps">
<h3 style="color:black;">Working Step by Step</h3><br>
<div id="common">
	
</div>
</div>
</div>
<p id="button">
<br><br>
<a onclick="autorun()" id= "fr_btn">Auto Run</a><br><br><br>
<a onclick="show()" id= "fr_btn">Forward</a><br><br><br>
<a onclick="backshow()" id= "bk_btn">Backward</a><br><br><br>
<a onclick="showall()" id= "bk_btn">All Iteration</a><br><br><br>
<a onclick="clearall()" id= "bk_btn">Clear All</a>
</body>
<script type="text/javascript" >
	var value=[];
	var weight=[];
	var W;
	var s1= <?php echo json_encode($s1); ?>;
	var s2= <?php echo json_encode($s2); ?>;
	var s3= <?php echo json_encode($s3); ?>;
	var i1=0;
	var j1=0;
	var material = [[],[]];

	window.onload = () =>{
		for(i=0;i<s1.length;i++)
		{
			value[i]=parseInt(s1[i]);
		}
		for(i=0;i<s2.length;i++)
		{
			weight[i]=parseInt(s2[i]);
		}
		W=parseInt(s3);
		KnapSack(value,weight, W);
	}
function KnapSack(value, weight,W){
	if(W == 0)
		return 0;
	var headings=' ';
	var x = ' ';
	var content=' ';
	const tablehead = document.getElementById('headings');
	const TableLeft = document.getElementById('leftcontent');
	const ContentTable = document.getElementById('content');
	var knapsack_table=[];
	for(let i=0;i<=value.length;i++)
	{
		knapsack_table[i]=[];
		material[i]=[];
		for(let j=-2;j<=W;j++)
		{
			if(j>=0)
			{
			if(i==0)
			{
				headings += '<td>'+j+'</td>';
			}
			if(j==0 || i==0)
			{
				knapsack_table[i][j]=0;
				material[i][j]='i = '+i+'   j = '+j+'<br>knapsack_table[i][0]=0;';
				//material[i][j]='knapsack_table[i][0]=0;';
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">i = '+i+'   j = '+j+'</span><br>');
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">knapsack_table[i][0]=0;</span><br>');
			}
			}
			else
			{
				if(i==0 && j==-1)
				headings += '<td>Index</td>';
				if(i==0 && j==-2)
				headings += '<td>Weight</td>';
			}
			
	
		}
	}
	for(let i=1;i<=value.length;i++)
	{
		for(let j=1;j<=W;j++)
		{
			if(weight[i-1]<=j)
			{
				//<br>knapsack_table[i][j] = '+Math.max(knapsack_table[i-1][j],1+knapsack_table[i][j-value[i-1]])+';
				// <br>knapsack_table[i][j] = Math.max('+knapsack_table[i-1][j]+',1+'+knapsack_table[i][j-value[i-1]+'])'
				// <br>knapsack_table[i][j] = Math.max(knapsack_table['+i-1+']['+j+'],1+knapsack_table['+i+']['+j+'-value['+i-1+']])'
				knapsack_table[i][j] = Math.max(knapsack_table[i-1][j],value[i-1]+knapsack_table[i-1][j-weight[i-1]]);
				material[i][j]='i = '+i+'   j = '+j+'<br>knapsack_table[i][j] = Math.max(knapsack_table[i-1][j],value[i-1]+knapsack_table[i-1][j-weight[i-1]])<br>knapsack_table[i][j] = Math.max(knapsack_table['+i+'-1]['+j+'],value[i-1]+knapsack_table['+i+'-1]['+j+'-weight['+i+'-1]])<br>knapsack_table[i][j] = Math.max(knapsack_table['+i+'-1]['+j+'],value['+(i-1)+']+knapsack_table['+(i-1)+']['+j+'-weight['+(i-1)+']])<br>knapsack_table[i][j] = Math.max(knapsack_table['+(i-1)+']['+j+'],'+value[(i-1)]+'+knapsack_table['+(i-1)+']['+j+'-'+weight[(i-1)]+'])<br>knapsack_table[i][j] = Math.max('+knapsack_table[i-1][j]+','+(value[(i-1)]+knapsack_table[i-1][j-weight[i-1]])+')<br>So, <br>knapsack_table[i][j] = '+Math.max(knapsack_table[(i-1)][j],(value[(i-1)]+knapsack_table[i-1][j-weight[i-1]]))+'';
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff">'+knapsack_table[i][j]+'</span>');
			}
			else
			{
				knapsack_table[i][j] = knapsack_table[i-1][j];
				material[i][j]='knapsack_table[i][j]= knapsack_table[i-1][j]<br>knapsack_table[i][j]=knapsack_table['+i+'-1]['+j+']<br>knapsack_table[i][j]=knapsack_table['+(i-1)+']['+j+']<br>So, <br>knapsack_table[i][j] = '+knapsack_table[(i-1)][j]+'';

			}
		}

	}
	for(let i=0;i<=value.length;i++)
	{
		$("#content").append("<tr id='content"+i+"'></tr>");
		for(let j=-2;j<=W;j++)
		{
			if(j>=0)
			{
			if(knapsack_table[i][j] == Infinity)
			{
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="color:#fff">&#8734;</td>');
			}
			else{
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="color:#fff">'+knapsack_table[i][j]+'</td>');
			//content += "<td id='records' style='color:#fff;'>"+knapsack_table[i][j]+"</td>";
			//ContentTable.innerHTML = content; 	
			}
			}
			else
			{
				if(j==-1)
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+i+'</td>');
				if(j==-2)
				{
					if(i>0)
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+weight[i-1]+'</td>');
				else
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+0+'</td>');
				}
			}
		  	//setTimeout(function(){ ContentTable.innerHTML = content; }, 2000);
		}

	}
	tablehead.innerHTML = headings;
	//ContentTable.innerHTML = content; 	
	var xs = document.getElementById("content");
	console.log(xs);

}
function clearall()
{
	for(var i=0;i<=value.length;i++)
	{
		for(var j=0;j<=W;j++)
		{
			var select1 = document.getElementById("id"+i+j);
			select1.style="display:none";

		}
	}
	i1 = 0;
	j1 = 0;
}

function showall()
{
	for(var i=0;i<=value.length;i++)
	{
		for(var j=0;j<=W;j++)
		{
			var select1 = document.getElementById("id"+i+j);
			select1.style="color:#009879";

		}
	}
	i1 = value.length;
	j1 = W;
}
function autorun()
{
	document.getElementById("bk_btn").disabled = false;
	console.log(i1);
	console.log(j1);
	var flag = 0;
	if(i1 == value.length  && j1 == W)
	{

		console.log("rafay");
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
		return;
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
	if(j1==W+1)
	{
		i1++;
		j1=0;

	}
	setTimeout(autorun,100);
}
function show()
{
	document.getElementById("bk_btn").disabled = false;
	console.log(i1);
	console.log(j1);
	var flag = 0;
	if(i1 == value.length  && j1 == W)
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
	if(j1==W+1)
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
	j1--;
	if(i1<0)
		i1++;
		if(i1==0 && j1==0)
	{
		console.log("rr");
		document.getElementById("bk_btn").disabled = true;
		return;
	}
	document.getElementById("fr_btn").disabled = false;
	if(j1==0)
	{
		i1--;
		j1=W;

	}
}
</script>
</html>
