<!DOCTYPE html>
<html>
<head>
	<title>Partition Problem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<?php
 	   $myfile=fopen("input.txt","r");
       $x=fgets($myfile);
       $y=fgets($myfile);
       $s1=explode(',', $x);
	?>
<nav>
 	<h2> PARTITION PROBLEM </h2>
   
</nav>
<!-- <div>
	<div id="leftcontent"></div>
</div> -->
<table>
	<thead id="headings">
	</thead>
	<tbody id="content"></tbody>
</table>
<div id="working">
<div id="code">
<h3 style="color:black;">PARTITION PROBLEM ALGORITHM</h3>
	<span>for(let i=1;i<=number.length;i++)</span>{<br>
		<span>&emsp;for(let j=1;j<=sum;j++)</span>{<br>
			<span>&emsp;&emsp;if(number[i-1]<=j)</span>{<br>
				<span>&emsp;&emsp;&emsp;partition_table[i][j] = partition_table[i-1][j] || partition_table[i-1][j-number[i-1]];</span>
			<br>
			<span>&emsp;&emsp;}else</span>{<br>
				<span>&emsp;&emsp;&emsp;partition_table[i][j] = partition_table[i-1][j];</span><br>
			&emsp;&emsp;}<br>
		&emsp;}<br>

	}
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
<script type="text/javascript" >
		var number=[];
	var i1=0;
	var j1=0;
	var s1= <?php echo json_encode($s1); ?>;
	var material = [[],[]];
	var sum=0;
	for(i=0;i<s1.length;i++)
		{
			number[i]=parseInt(s1[i]);
		}
		for(let i=0;i<number.length;i++){
			sum=sum+number[i];
		}
		if(sum%2 != 0)
		{
			console.log("rr");
			exit(0);
		}
	window.onload = () =>{
		console.log("ddd");
		Partition(number,sum/2);

	}


	function Partition(number,sum)
	{
		if(sum == 0)
		return 0;
	var headings=' ';
	var x = ' ';
	var content=' ';
	const tablehead = document.getElementById('headings');
	const TableLeft = document.getElementById('leftcontent');
	const ContentTable = document.getElementById('content');
	var partition_table=[];
		console.log(sum);
		for(let i=0;i<=number.length;i++)
		{
		partition_table[i]=[];
		material[i]=[];
		for(let j=-1;j<=sum;j++)
		{
			if(j>=0)
			{
			if(i==0)
			{
				headings += '<td>'+j+'</td>';
			}
			if(j==0)
			{
				partition_table[i][0]=true;
				material[i][j]='i = '+i+'   j = '+j+'<br>partition_table[i][0]=T;';
				//material[i][j]='partition_table[i][0]=0;';
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">i = '+i+'   j = '+j+'</span><br>');
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">partition_table[i][0]=0;</span><br>');
			}
			if(i==0 && j>0)
			{
			partition_table[0][j]=false;
				material[i][j]='i = '+i+'   j = '+j+'<br>partition_table[0][j]=F;';
			}
			}
			else
			{
				if(i==0)
				headings += '<td>Index</td>';
			}
			
	
		}
		}

	for(let i=1;i<=number.length;i++)
	{
		for(let j=1;j<=sum;j++)
		{
			if(number[i-1]<=j)
			{
				//<br>partition_table[i][j] = '+Math.min(partition_table[i-1][j],1+partition_table[i][j-number[i-1]])+';
				// <br>partition_table[i][j] = Math.min('+partition_table[i-1][j]+',1+'+partition_table[i][j-number[i-1]+'])'
				// <br>partition_table[i][j] = Math.min(partition_table['+i-1+']['+j+'],1+partition_table['+i+']['+j+'-number['+i-1+']])'
				partition_table[i][j] = partition_table[i-1][j] || partition_table[i-1][j-number[i-1]];
				material[i][j]='i = '+i+'   j = '+j+'<br>partition_table[i][j] = partition_table['+i+'-1]['+j+'] || partition_table['+i+'-1]['+j+'-number['+i+'-1]])<br>partition_table[i][j] = partition_table['+(i-1)+']['+j+'] || partition_table['+(i-1)+']['+j+'-number['+(i-1)+']])<br>partition_table[i][j] = partition_table['+(i-1)+']['+j+'] || partition_table['+(i-1)+']['+j+'-'+number[(i-1)]+'])<br>partition_table[i][j] = '+partition_table[i-1][j]+'||'+(partition_table[i-1][j-number[i-1]])+'<br>So, <br>partition_table[i][j] = '+(partition_table[(i-1)][j] || (partition_table[i-1][j-number[i-1]]))+'';
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff">'+partition_table[i][j]+'</span>');
			}
			else
			{
				partition_table[i][j] = partition_table[i-1][j];
				material[i][j]='partition_table[i][j]= partition_table[i-1][j]<br>partition_table[i][j]=partition_table['+i+'-1]['+j+']<br>partition_table[i][j]=partition_table['+(i-1)+']['+j+']<br>So, <br>partition_table[i][j] = '+partition_table[(i-1)][j]+'';

			}
		}

	}
	for(let i=0;i<=number.length;i++)
	{
		$("#content").append("<tr id='content"+i+"'></tr>");
		for(let j=-1;j<=sum;j++)
		{
			if(j>=0)
			{
			
			$("#content"+i).append('<td id="id'+(i) + (j)+'" style="color:#fff">'+partition_table[i][j]+'</td>');
			//content += "<td id='records' style='color:#fff;'>"+change_table[i][j]+"</td>";
			//ContentTable.innerHTML = content; 	
			}
			else
			{
				//content+='<td style="font-weight:bold;">'+i+'</td>';
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+i+'</td>');
			}
		  	//setTimeout(function(){ ContentTable.innerHTML = content; }, 2000);
		}

	}
	tablehead.innerHTML = headings;

	}

function show()
{
	console.log(sum/2);
	document.getElementById("bk_btn").disabled = false;
	console.log(i1);
	console.log(j1);
	var flag = 0;
	if(i1 == number.length  && j1 == (sum/2))
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
	if(j1==(sum/2)+1)
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
		j1=(sum/2);

	}

}

</script>
</html>
