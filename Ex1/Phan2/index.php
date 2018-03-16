<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script >
            function load_ajax(){
				$('#result').html("");
                $.ajax({
                    url : "bai2.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        latA : $('#latA').val(),
						longA: $('#longA').val(),
						 latB : $('#latB').val(),
						longB: $('#longB').val()
                    },
                    success : function (result){
                        $('#result').html(result);
                    }
                });
            }
        </script>

</head>

<body>
<div class="row">
  <div class="col-xs-3  col-md-3"></div>
  <div class="col-xs-3  col-md-3">
  
  <form >
  <div class="form-group">
    <label for="email">Lat A:</label>
    <input type="number" class="form-control" id="latA" value="10.881784">
  </div>
  <div class="form-group">
    <label for="pwd">Long A:</label>
    <input type="number" class="form-control" id="longA" value="106.804496">
  </div>
	  </div>
	  </form>  
<div class="col-xs-3  col-md-3">
  
  <form >
  <div class="form-group">
    <label for="email">Lat B:</label>
    <input type="number" class="form-control" id="latB" value="10.881784">
  </div>
  <div class="form-group">
    <label for="pwd">Long B:</label>
    <input type="number" class="form-control" id="longB" value="106.804496">
  </div>
	</form>
	  </div>

    
    
 
</form>
  <div class="col-xs-3  col-md-3"></div>
  </div>
  
  


  <div>
  	<button type="button" class="center btn btn-default center-block" onclick="load_ajax()">Result</button>
<div id="result" class="text-center"></div>
  </div>

</body>
</html>
