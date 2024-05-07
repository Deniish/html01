<html>
	<head>
		<title></title>
		<script type="text/javascript" src="jq.js"></script>
	</head>
	<body>
		<a href="site1.html">Home</a>
		<a href="login.html">Login</a>
		<a href="register.html">Register</a>
		<a href="booking.html">Booking</a>

		<h1>Booking</h1>
		<input type="button" id="btnGet" value="Get Data" >

		<table id="movies">
			<tr>
				<th>Movie ID</th>
				<th>Movie Name</th>
				<th>Category</th>
			</tr>
		</table>


		<script type="text/javascript">
			$("#btnGet").click(function(){
				$.ajax({
					url:"movies.xml",
					success:function(res){
						 $(res).find("movie").each(function(){
						 	row="";

						 	row="<tr> <td>"+$(this).find("movieid").text()+"</td>  <td>"+$(this).find("moviename").text()+"</td>  <td> "+$(this).find("category").text()+"</td> </tr>";

						 	$("#movies").append(row);
						 });
					}
				});
			});


		</script>
	</body>
</html>