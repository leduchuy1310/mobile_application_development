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
                    url : "bai1.php",
                    type : "post",
                    dataType:"text",
                    data : {
                        lat : $('#lat').val(),
						long: $('#long').val()
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
  <div class="col-xs-4  col-md-4"></div>
  <div class="col-xs-4  col-md-4">
  
  <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Lat</label>
    <input type="number" class="form-control" id="lat" value="10.881784">
  </div>
  <div class="form-group">
    <label for="pwd">Long:</label>
    <input type="number" class="form-control" id="long" value="106.804496">
  </div>
 
  <button type="button" class="btn btn-default center-block" onclick="load_ajax()">Check</button>

    
    
 
</form>
  <div id="result" class="text-center"></div>
  </div>
  <div class="col-xs-4  col-md-4"></div>
  
</div>



</body>
</html>
