<!DOCTYPE html>
<html>
<head>
	<title>Shortest Common Supersequence</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<?php
 	   $s= $_GET['data1'];
 	   $myfile=fopen("$s.txt","r");
 	   $temp=fgets($myfile);
       $temp=explode(',', $temp);
       $s1 = $temp[0];
       $s2 = $temp[1];
	?>
<nav>
 	<h2> SHORTEST COMMON SUPPERSEQUENCE PROBLEM </h2>
   
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
<h3 style="color:black;">SCSS ALGORITHM</h3>
	<span>for(let i=1;i<=string1.length;i++)</span>{<br>
		<span>&emsp;for(let j=1;j<=string2.length;j++)</span>{<br>
			<span>&emsp;&emsp;if(string1[i-1] == string2[j-1])</span>{<br>
				<span>&emsp;&emsp;&emsp;SCS_table[i][j] = SCS_table[i-1][j-1] + 1;</span>
			<br>
			<span>&emsp;&emsp;}else</span>{<br>
				<span>&emsp;&emsp;&emsp;SCS_table[i][j] = 1+Math.min(SCS_table[i-1][j],SCS_table[i][j-1]);</span><br>
			&emsp;&emsp;}<br>
		&emsp;}<br>

	}<br>
</div>
<div id="steps">
<h3 style="color:black;">Working Step by Step</h3><br>
<div id="common">
	
</div>
</div>
<p id="button">
<br><br>
<a onclick="autorun()" id= "fr_btn">Auto Run</a><br><br><br><br>
<a onclick="show()" id= "fr_btn">Forward</a><br><br><br><br>
<a onclick="backshow()" id= "bk_btn">Backward</a><br><br><br>
<a onclick="showall()" id= "bk_btn">All Iteration</a><br><br><br>
<a onclick="clearall()" id= "bk_btn">Clear All</a>
</body>
<script type="text/javascript" >
		

	var string1;
	var string2;
	var i1=0;
	var j1=0;
	var material = [[],[]];
	var s1= <?php echo json_encode($s1); ?>;
	var s2= <?php echo json_encode($s2); ?>;
	window.onload = () =>{
		string1=s1;
		string2=s2;
		SCS(string1,string2);

	}


	function SCS(string1,string2)
	{
		//string1 = Array.from(string1);
		//string2 = Array.from(string2);
		console.log(string1);
		if(string1.length == 0 || string2.length == 0)
		return 0;
	var headings=' ';
	var x = ' ';
	var content=' ';
	const tablehead = document.getElementById('headings');
	const TableLeft = document.getElementById('leftcontent');
	const ContentTable = document.getElementById('content');
	var SCS_table=[];
		for(let i=0;i<=string1.length;i++)
		{
		SCS_table[i]=[];
		material[i]=[];
		for(let j=-2;j<=string2.length;j++)
		{
			if(j>=0)
			{
			if(i==0)
			{
				if(j>0)
				headings += '<td>'+string2[j-1]+'</td>';
				else
				headings += '<td>'+0+'</td>';
			}
			if(i==0)
			{
				SCS_table[i][j]=j;
				material[i][j]='i = '+i+'   j = '+j+'<br>SCS_table[i][j]=j;';
				//material[i][j]='SCS_table[i][0]=0;';
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">i = '+i+'   j = '+j+'</span><br>');
				// $("#steps").append('<span class="step'+(i) + (j)+'" style="color:#fff">SCS_table[i][0]=0;</span><br>');
			}
			else if(j==0)
			{
				SCS_table[i][j]=i;
				material[i][j]='i = '+i+'   j = '+j+'<br>SCS_table[i][j]=i;';
			}
			}
			else
			{
				if(i==0)
				headings += '<td>Index</td>';
			}
			
	
		}
		}

	for(let i=1;i<=string1.length;i++)
	{
		for(let j=1;j<=string2.length;j++)
		{
			if(string1[i-1] == string2[j-1])
			{
				//<br>SCS_table[i][j] = '+Math.min(SCS_table[i-1][j],1+SCS_table[i][j-number[i-1]])+';
				// <br>SCS_table[i][j] = Math.min('+SCS_table[i-1][j]+',1+'+SCS_table[i][j-number[i-1]+'])'
				// <br>SCS_table[i][j] = Math.min(SCS_table['+i-1+']['+j+'],1+SCS_table['+i+']['+j+'-number['+i-1+']])'
				SCS_table[i][j] = SCS_table[i-1][j-1] + 1;
				material[i][j]='i = '+i+'   j = '+j+'<br>SCS_table[i][j] = SCS_table['+i+'-1]['+j+'-1]+1 <br>SCS_table[i][j] = SCS_table['+(i-1)+']['+(j-1)+']+1<br>So,SCS_table[i][j] = '+(SCS_table[i-1][j-1]+1)+'';
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
				// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff">'+SCS_table[i][j]+'</span>');
			}
			else
			{
				SCS_table[i][j] = 1+Math.min(SCS_table[i-1][j],SCS_table[i][j-1]);
				material[i][j]='i = '+i+'   j = '+j+'<br>SCS_table[i][j]= 1+Math.min(SCS_table[i-1][j],SCS_table[i][j-1]);<br>SCS_table[i][j]= 1+Math.min(SCS_table['+i+'-1]['+j+'],SCS_table['+i+']['+j+'-1]);<br>SCS_table[i][j]= 1+Math.min(SCS_table['+(i-1)+']['+j+'],SCS_table['+i+']['+(j-1)+']);<br>SCS_table[i][j]= 1+Math.min('+(SCS_table[i-1][j])+','+(SCS_table[i][j-1])+');<br>So, <br>SCS_table[i][j]= '+(1+Math.min(SCS_table[i-1][j],SCS_table[i][j-1]))+'';

			}
		}

	}
	for(let i=0;i<=string1.length;i++)
	{
		$("#content").append("<tr id='content"+i+"'></tr>");
		for(let j=-2;j<=string2.length;j++)
		{
			if(j>=0)
			{
			
			$("#content"+i).append('<td id="id'+(i) + (j)+'" style="color:#fff">'+SCS_table[i][j]+'</td>');
			//content += "<td id='records' style='color:#fff;'>"+change_table[i][j]+"</td>";
			//ContentTable.innerHTML = content; 	
			}
			else
			{
				//content+='<td style="font-weight:bold;">'+i+'</td>';
				if(j==-1)
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+i+'</td>');
				if(j==-2)
				{
					if(i>0)
						$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+string1[i-1]+'</td>');
					else
						$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">'+0+'</td>');
				}	
			}
		  	//setTimeout(function(){ ContentTable.innerHTML = content; }, 2000);
		}

	}
	tablehead.innerHTML = headings;

	}
function clearall()
{
	for(var i=0;i<=string1.length;i++)
	{
		for(var j=0;j<=string2.length;j++)
		{
			var select1 = document.getElementById("id"+i+j);
			select1.style="color:#fff;";

		}
	}
	i1 = 0;
	j1 = 0;
}
function showall()
{
	var select1;
	for(var i=0;i<=string1.length;i++)
	{
		for(var j=0;j<=string2.length;j++)
		{
			select1 = document.getElementById("id"+i+j);
			select1.style="color:#009879";

		}
	}
	i1 = string1.length;
	j1 = string2.length;
}
function autorun()
{
	document.getElementById("bk_btn").disabled = false;
	console.log(i1);
	console.log(j1);
	var flag = 0;
	if(i1 == string1.length  && j1 == string2.length)
	{
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
	if(j1==(string2.length)+1)
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
	if(i1 == string1.length  && j1 == string2.length)
	{
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
	if(j1==(string2.length)+1)
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
		j1=(string2.length);

	}

}

</script>
</html>
