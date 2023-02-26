<!DOCTYPE html>
<html>
<head>
	<title>Rod Cutting</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<?php
 	   $myfile=fopen("input.txt","r");
       $x=fgets($myfile);
       $y=fgets($myfile);
       $z=fgets($myfile);
       $s1=explode(',', $x);
       $s2=explode(',', $y);
       $s3=explode(',', $z);
	?>
<nav>
 	<h2> ROD CUTTING PROBLEM </h2>
   
</nav>
<table>
	<thead id="headings">
	</thead>
	<tbody id="content"></tbody>
</table>
<div id="working">
<div id="code">
<h3 style="color:black;">ROD CUTTING ALGORITHM</h3>
	<span>for(let i=0;i<=value.length;i++)</span>{<br>
		<span>&emsp;for(let j=1;j<=W;j++)</span>{<br>
			<span>&emsp;&emsp;if(weight[i-1]<=j)</span>{<br>
	<span>&emsp;&emsp;&emsp;knapsack_table[i][j] = Math.max(knapsack_table[i-1][j],value[i-1]+knapsack_table[i][j-weight[i-1]]);</span>
			<br><span>&emsp;&emsp;}else</span>{<br>
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
<a onclick="show()" id= "fr_btn">Auto Run</a><br><br><br><br>
<a onclick="show()" id= "fr_btn">Forward</a><br><br><br><br>
<a onclick="backshow()" id= "bk_btn">Backward</a>
</body>
<script type="text/javascript" >
	var price=[];
	var length=[];
	var Origina_Rod;
	var i1=	0;
	var j1=0;
	var s1 = <?php echo json_encode($s1); ?>;
	var s2 = <?php echo json_encode($s2); ?>;
	var s3 = <?php echo json_encode($s3); ?>;
	var material = [[],[]];

	window.onload = () =>{
		for(i=0;i<s1.length;i++)
		{
			price[i]=parseInt(s1[i]);
		}
		for(i=0;i<s2.length;i++)
		{
			length[i]=parseInt(s2[i]);
		}
		Origina_Rod=parseInt(s3);
		RodCutting(price,length, Origina_Rod);
	}
function RodCutting(price, length,Origina_Rod){
	if(Origina_Rod == 0)
		return 0;
	var headings=' ';
	var x = ' ';
	var content=' ';
	const tablehead = document.getElementById('headings');
	const TableLeft = document.getElementById('leftcontent');
	const ContentTable = document.getElementById('content');
	var rodcutting_table=[];
	for(let i=0;i<=price.length;i++)
	{
		rodcutting_table[i]=[];
		material[i]=[];
		for(let j=-1;j<=Origina_Rod;j++)
		{
			if(j>=0)
			{
			if(i==0)
			{
				headings += '<td>'+j+'</td>';
			}
			if(j==0 || i==0)
			{
				rodcutting_table[i][j]=0;
				material[i][j]='i = '+i+'   j = '+j+'<br>rodcutting_table[i][0]=0;';
				//material[i][j]='rodcutting_table[i][0]=0;';
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">i = '+i+'   j = '+j+'</span><br>');
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">rodcutting_table[i][0]=0;</span><br>');
			}
			}
			else
			{
				if(i==0)
				headings += '<td>Index</td>';
			}
			
	
		}
	}
	for(let i=1;i<=price.length;i++)
	{
		for(let j=1;j<=Origina_Rod;j++)
		{
			if(length[i-1]<=j)
			{
				//<br>rodcutting_table[i][j] = '+Math.max(rodcutting_table[i-1][j],1+rodcutting_table[i][j-price[i-1]])+';
				// <br>rodcutting_table[i][j] = Math.max('+rodcutting_table[i-1][j]+',1+'+rodcutting_table[i][j-price[i-1]+'])'
				// <br>rodcutting_table[i][j] = Math.max(rodcutting_table['+i-1+']['+j+'],1+rodcutting_table['+i+']['+j+'-price['+i-1+']])'
				rodcutting_table[i][j] = Math.max(rodcutting_table[i-1][j],price[i-1]+rodcutting_table[i][j-length[i-1]]);
				material[i][j]='i = '+i+'   j = '+j+'<br>rodcutting_table[i][j] = Math.max(rodcutting_table[i-1][j],price[i-1]+rodcutting_table[i][j-length[i-1]])<br>rodcutting_table[i][j] = Math.max(rodcutting_table['+i+'-1]['+j+'],price[i-1]+rodcutting_table['+i+']['+j+'-length['+i+'-1]])<br>rodcutting_table[i][j] = Math.max(rodcutting_table['+i+'-1]['+j+'],price['+(i-1)+']+rodcutting_table['+(i)+']['+j+'-length['+(i-1)+']])<br>rodcutting_table[i][j] = Math.max(rodcutting_table['+(i-1)+']['+j+'],'+price[(i-1)]+'+rodcutting_table['+(i)+']['+j+'-'+length[(i-1)]+'])<br>rodcutting_table[i][j] = Math.max('+rodcutting_table[i-1][j]+','+(price[(i-1)]+rodcutting_table[i][j-length[i-1]])+')<br>So, <br>rodcutting_table[i][j] = '+Math.max(rodcutting_table[(i-1)][j],(price[(i-1)]+rodcutting_table[i][j-length[i-1]]))+'';
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff">'+rodcutting_table[i][j]+'</span>');
			}
			else
			{
				rodcutting_table[i][j] = rodcutting_table[i-1][j];
				material[i][j]='rodcutting_table[i][j]= rodcutting_table[i-1][j]<br>rodcutting_table[i][j]=rodcutting_table['+i+'-1]['+j+']<br>rodcutting_table[i][j]=rodcutting_table['+(i-1)+']['+j+']<br>So, <br>rodcutting_table[i][j] = '+rodcutting_table[(i-1)][j]+'';

			}
		}

	}
	for(let i=0;i<=price.length;i++)
	{
		$("#content").append("<tr id='content"+i+"'></tr>");
		for(let j=-1;j<=Origina_Rod;j++)
		{
			if(j>=0)
			{
			$("#content"+i).append('<td id="id'+(i) + (j)+'" style="color:#fff">'+rodcutting_table[i][j]+'</td>');
			}
			else
			{
				//content+='<td style="font-length:bold;">'+i+'</td>';
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+i+'</td>');
			}
		}

	}
	tablehead.innerHTML = headings;
	//ContentTable.innerHTML = content; 	
	var xs = document.getElementById("content");
	console.log(xs);

}
function show()
{
	document.getElementById("bk_btn").disabled = false;
	console.log(i1);
	console.log(j1);
	var flag = 0;
	if(i1 == price.length  && j1 == Origina_Rod)
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
	if(j1==Origina_Rod+1)
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
		j1=Origina_Rod;

	}
}
</script>
</html>
