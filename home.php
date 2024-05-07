<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" conten="width=device-width,initial-scale=1">
	<title>E-commerce website</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist"></link>
	<script type="text/javascript" src="jquery-3.7.1.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="box.css">
</head>
<body style="background-color: powderblue;">
	<h1>Navigator Bar<br></h1>
	<h3><nav  style="background-color: lavender; width: 200px; height: 100px; place-content: center;  display: grid;">
		<ul>
			<li ><a  class="a-1" href="register.html" >REGISTER</a></li>
			<li ><a  class="a-1" href="login.html">LOGIN</a></li>
			<li ><a  class="a-1" href="home.php">HOME</a></li>
			<li ><a  class="a-1" href="contact.html">CONTACT</a></li>
		</ul>
	</nav></h3>
	<input type="button" class="btn" value="Show All Data"><br>
	 <!-- Enter name of student NAME to be searched
	<input type="txt" id="txtSearch"><br>  -->
	<h1 align="center">Getting Data through Ajax Using Json</h1>
	<table id="tblData" border="1" width="50%" align="center"></table>
	<script type="text/javascript">
		$(".btn").click(function(){
		/*	$("#txtSearch").keyup(function(){
				Searchstr=$("#txtSearch").val();*/
				$.ajax({
					url:"student1.json",
					dataType:'json',
					success:function(x){
						row="<tr> <th>Sid</th> <th>Sname</th> <th>Percentage</th> </tr>";
						for(i=0;i<x.length;i++)
						{
							/*if(x[i].Sname.includes(Searchstr))
							{*/
								row+="<tr>";
									row+="<td>";
										row+=x[i].Sid;
									row+="</td>";
						

									row+="<td>";
										row+=x[i].Sname;
									row+="</td>";


									row+="<td>";
										row+=x[i].Percentage;
									row+="</td>";
								row+="</tr>";
							/*}*/
						}
						$("#tblData").html(row);
						
					}
				});		
			// });
		});
	</script>
		
</body>
</html>