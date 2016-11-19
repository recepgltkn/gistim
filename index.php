<meta charset="utf8"/>
<head>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<div id="balik" > <img src=./img/balik.png width='50'heigt='50'> </div>
<div id="kus">    <img src=./img/kus.png width='50' height="50"heigt='50'></div>
      

<script>
$("#balik").click(function()  {  $("#icerik").html("<img src=./img/balik.png width='300'heigt='250'> ");   });
$("#kus").click(function()  {  $("#icerik").html("<img src=./img/kus.png width='300'heigt='250'> ");   });

</script>

<div style="border:medium; width:400px;height:400px" id="icerik"></div>
