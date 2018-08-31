<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show password </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h4 class="text-center mt-5">Show PAssword</h4>
				<div class="mt-5">
					<input type="password" id="password" class="form-control" placeholder="Enter Your Password">
					<label for="" class="mt-5">Show and Hide Password</label><br>
					<input type="checkbox"  id="checkbox" >
				</div>
			</div>
			<div class="col-md-4 "></div>
		</div>
	</div>
	<script src="js/jquery.min.js" type="text/javascript" ></script>
	<script>
		jQuery(document).ready(function($) {
			$(document).on('click', '#checkbox', function(event) {
				var type=$('#password').attr('type');
				if(type=='password'){
					$('#password').attr('type','text');
					var type=$('#password').attr('type');
					
				}else{
					$('#password').attr('type','password');
					var type=$('#password').attr('type');
				}
				
			});
		});
	</script>
</body>
</html>