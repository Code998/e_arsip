<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>Homepage</title>
	  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	  <link rel="stylesheet" href="assets/css/infinite.css">
	</head>
	<body>

		<select id="type">
		    <option value="item0">--Select an Item--</option>
		    <option value="item1">item1</option>
		    <option value="item2">item2</option>
		    <option value="item3">item3</option>
		</select>

		<select id="size">
		    <option value="">-- select one -- </option>
		</select>
	
		 <!-- JavaScript -->
	    <script src="node_modules/jquery/dist/jquery.min.js"></script>
	    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	    <script>
	    	$(document).ready(function () {
			    $("#type").change(function () {
			        var val = $(this).val();
			        if (val == "item1") {
			            $("#size").html("<option value='test'>item1: test 1</option><option value='test2'>item1: test 2</option>");
			        } else if (val == "item2") {
			            $("#size").html("<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>");
			        } else if (val == "item3") {
			            $("#size").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
			        } else if (val == "item0") {
			            $("#size").html("<option value=''>--select one--</option>");
			        }
			    });
			});
		</script>
  </body>
</html>