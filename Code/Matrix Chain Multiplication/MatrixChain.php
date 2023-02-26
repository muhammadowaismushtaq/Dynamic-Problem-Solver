<!DOCTYPE html>
<html>
<head>
	<title>Matrix Change</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<?php
 	   $myfile=fopen("input.txt","r");
       $x=fgets($myfile);
       $s1=explode(',', $x);
	?>
<nav>
 	<h2> MATRIX CHAIN PROBLEM </h2>
   
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
<h3 style="color:black;">MATRIX CHAIN ALGORITHM</h3>
	<span>for(let i=1;i<=dimension.length;i++)</span>{<br>
		<span>&emsp;for(let j=1;j<=change;j++)</span>{<br>
			<span>&emsp;&emsp;if(dimension[i-1]<=j)</span>{<br>
				<span>&emsp;&emsp;&emsp;matrix_table[i][j] = Math.min(matrix_table[i-1][j],1+matrix_table[i][j-dimension[i-1]]);</span>
			<br>
			<span>}&emsp;&emsp;else{</span><br>
				<span>&emsp;&emsp;&emsp;matrix_table[i][j] = matrix_table[i-1][j];</span><br>
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
<a onclick="show()" id= "fr_btn">Auto Run</a><br><br><br><br>
<a onclick="show()" id= "fr_btn">Forward</a><br><br><br><br>
<a onclick="backshow()" id= "bk_btn">Backward</a>
</body>
<script type="text/javascript" >
		var dimension=[];
	var s1= <?php echo json_encode($s1); ?>;
	var i1=1;
	var j1=1;
	var k1=0;
	var material = [[],[]];

	window.onload = () =>{
		for(i=0;i<s1.length;i++)
		{
			dimension[i]=parseInt(s1[i]);
		}
		MatrixChainMultiplication(dimension);
	}
function MatrixChainMultiplication(dimension){
	if(dimension.length == 0)
		return 0;
	var headings=' ';
	var x = ' ';
	var content=' ';
	const tablehead = document.getElementById('headings');	
	const TableLeft = document.getElementById('leftcontent');
	const ContentTable = document.getElementById('content');
	var matrix_table=[];
	var j,q;
	for(let i=0;i<dimension.length;i++)
	{
		matrix_table[i]=[];
		material[i]=[];
		for(let j=-1;j<dimension.length;j++)
		{
			if(j>0)
			{
				if(i==0)
			{
				headings += '<td>A'+j+'</td>';
			}
			matrix_table[i][j];
			}
			else if(j<0)
			{
				if(i==0)
				headings += '<td>Matrix</td>';
			}
			
	
		}
	}
	for(let i=0;i<dimension.length;i++)
	{
		matrix_table[i][i]=0;
	}
	for(let L=2;L<dimension.length;L++)
	{
		for(let i=1;i<dimension.length-L+1;i++)
		{
			 j = i+L-1;
            matrix_table[i][j] = 1000000;
            for (k=i; k<=j-1; k++)
            {
                q = matrix_table[i][k] + matrix_table[k+1][j] + dimension[i-1]*dimension[k]*dimension[j];
                material[i][j]='i = '+i+'   j = '+j+'  k = '+k+'<br>q = matrix_table[i][k] + matrix_table[k+1][j] + dimension[i-1]*dimension[k]*dimension[j];<br>q = matrix_table['+i+']['+k+'] + matrix_table['+(k+1)+']['+j+'] + dimension['+(i-1)+']*dimension['+k+']*dimension['+j+'];<br>q = '+(matrix_table[i][k] + matrix_table[(k+1)][j] + dimension[i-1]*dimension[k]*dimension[j])+'<br>if(q < matrix_table[i][j])<br>if('+q+' < '+matrix_table[i][j]+')<br>{<br>matrix_table[i][j] = q;<br>}'
                if (q < matrix_table[i][j])
                {
                    matrix_table[i][j] = q;    //if number of multiplications found less that number will be updated.
                }
            }
           console.log("i value"+i+"j value"+j+matrix_table[i][j]);
			// if(dimension[i-1]<=j)
			// {
			// 	//<br>matrix_table[i][j] = '+Math.min(matrix_table[i-1][j],1+matrix_table[i][j-dimension[i-1]])+';
			// 	// <br>matrix_table[i][j] = Math.min('+matrix_table[i-1][j]+',1+'+matrix_table[i][j-dimension[i-1]+'])'
			// 	// <br>matrix_table[i][j] = Math.min(matrix_table['+i-1+']['+j+'],1+matrix_table['+i+']['+j+'-dimension['+i-1+']])'
			// 	matrix_table[i][j] = Math.min(matrix_table[i-1][j],1+matrix_table[i][j-dimension[i-1]]);
			// 	material[i][j]='i = '+i+'   j = '+j+'<br>matrix_table[i][j] = Math.min(matrix_table['+i+'-1]['+j+'],1+matrix_table['+i+']['+j+'-dimension['+i+'-1]])<br>matrix_table[i][j] = Math.min(matrix_table['+(i-1)+']['+j+'],1+matrix_table['+i+']['+j+'-dimension['+(i-1)+']])<br>br>matrix_table[i][j] = Math.min(matrix_table['+(i-1)+']['+j+'],1+matrix_table['+i+']['+j+'-'+dimension[(i-1)]+'])<br>matrix_table[i][j] = Math.min('+matrix_table[i-1][j]+','+(1+matrix_table[i][j-dimension[i-1]])+')<br>So, <br>matrix_table[i][j] = '+Math.min(matrix_table[(i-1)][j],(1+matrix_table[i][j-dimension[i-1]]))+'';
			// 	// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
			// 	// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff"></span>');
			// 	// $("#steps").append('<span id="step'+(i) + (j)+'" style="color:#fff">'+matrix_table[i][j]+'</span>');
			// }
			// else
			// {
			// 	matrix_table[i][j] = matrix_table[i-1][j];
			// 	material[i][j]='matrix_table[i][j]= matrix_table[i-1][j]<br>matrix_table[i][j]=matrix_table['+i+'-1]['+j+']<br>matrix_table[i][j]=matrix_table['+(i-1)+']['+j+']<br>So, <br>matrix_table[i][j] = '+matrix_table[(i-1)][j]+'';

			// }
		}

	}
	for(let i=1;i<dimension.length;i++)
	{
		$("#content").append("<tr id='content"+i+"'></tr>");
		for(let j=-1;j<dimension.length;j++)
		{
			if(j>0)
			{
				if(matrix_table[i][j]!=undefined)
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="color:#fff;">'+matrix_table[i][j]+'</td>');
			else
			{
				$("#content"+i).append('<td id="id'+(i) + (j)+'" ></td>');
			}
			//content += "<td id='records' style='color:#fff;'>"+matrix_table[i][j]+"</td>";
			//ContentTable.innerHTML = content; 	
			}
			else if(j<0)
			{
				//content+='<td style="font-weight:bold;">'+i+'</td>';
				$("#content"+i).append('<td id="id'+(i) + (j)+'" style="font-weight:bold;">A'+i+'</td>');
			}
		  	//setTimeout(function(){ ContentTable.innerHTML = content; }, 2000);
		}

	}
	tablehead.innerHTML = headings;
	//ContentTable.innerHTML = content; 	
	var xs = document.getElementById("content");
	console.log(xs);

	// TableLeft.innerHTML = x;
	
	// 	for(let i=0;i<=dimension.length;i++)
	// {
	// 	for(let j=0;j<=change;j++)
	// 	{
	// 		matrix_table[0][j]=Infinity;
	// 	}
	// }

}
function show()
{
	document.getElementById("bk_btn").disabled = false;
	console.log(i1);
	console.log(j1);
	var flag = 0;
	if(i1 == 1  && j1 == dimension.length-1)
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
	i1++;
	j1++;
	if(i1==dimension.length-k1)
	{
		i1=1;
		k1++;
		j1=1;
		j1=j1+k1;

	}
	
		
// console.log(i1);
// console.log(j1);
}
function backshow()
{
		j1--;
		if(i1==dimension.length-k1)
	{
		i1=1+dimension.length-k1;
		j1=1+dimension.length-k1;
		k1--;
		j1=j1+k1;

	}
	var select1 = document.getElementById("id"+(i1)+(j1));
	var select2 = document.getElementsByClassName("step"+i1+j1);
	var select3 = document.getElementById("common");
	console.log(i1);
	console.log(j1);
	console.log(k1);
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
		j1=change;

	}

}
</script>
</html>
