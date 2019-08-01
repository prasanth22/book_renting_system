<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    function getStates(value) {
        $.post("search2.php", {name:value},function(data)
            $("#results").html(data);
        }); 
    }
</script>
</head>
<input type="text" onkeyup="getStates(this.value)"/>
<br>
<div id="results"></div>
<body>
</body>
</html>