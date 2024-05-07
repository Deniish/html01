<html>
<head>
	<title>Json with Ajax</title>
	<script type="text/javascript" src="jquery-3.7.1.min.js"></script>
</head>
<body>
	<input type="button" id="btnget" value="Get All Data"><br>
	 <!-- Enter name of student NAME to be searched
	<input type="txt" id="txtSearch"><br>  -->
	<h1 align="center">Getting Data through Ajax Using Json</h1>
	<table id="tblData" border="1" width="50%" align="center"></table>
	<script type="text/javascript">
		$("#btnget").click(function(){
			/*$("#txtSearch").keyup(function(){
				Searchstr=$("#txtSearch").val();*/
				$.ajax({
					url:"student.json",
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
							// }
						}
						$("#tblData").html(row);
						
					}
				});
			/*});*/		
		});
	</script>
</body>
</html>