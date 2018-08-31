
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daynamic Feild add And Operation </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-6">
				<form name="add_name" id="add_name" method="POST">
					<table class="mt-5" id="add_dynamic_field">
						<tr>
							<td><input type="text"  name="text[]" id="name" class="form-control" placeholder="Enter Your Text"></td>
							<td><button class="btn btn-success" id="add" name="add">Add</button></td>
						</tr>
					</table>
					<button type="submit" class="btn btn-info mt-5"  name="submit" id="submit">Submit</button>
				</form>
			</div>
			<div class="col-md-4 "></div>
		</div>
	</div>
	<script src="js/jquery.min.js" type="text/javascript" ></script>
	<script>
		jQuery(document).ready(function($) {
			var i=1;
			$(document).on('click', '#add', function(event) {
				event.preventDefault();
				i++;
				$('#add_dynamic_field').append('<tr id="row'+i+'"><td><input type="text"  name="text[]" id="name" class="form-control mt-2" placeholder="Enter Your Text'+i+'"></td><td><button class="btn btn-danger mt-2 remove" id="'+i+'"name="remove">_</button></td></tr>');
			});

			$(document).on('click', '.remove', function(event) {
				event.preventDefault();
				var button_id=$(this).attr('id');
				$('#row'+button_id+'').remove();
			});

			// $('#submit').click(function(event) {
			// 	event.preventDefault();
			// 	$.ajax({
			// 		url:'adddaynamicvalue.php',
			// 		type:"POST",
			// 		data:$('#add_name').serialize(),
			// 		success:function(data){
			// 			console.log(data);
			// 		}

			// 	});
				
			// });
			
		});
	</script>
</body>
</html>