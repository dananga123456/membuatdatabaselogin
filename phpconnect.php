<html>
<head>
<title></title>
</head>
<body>
<?php
//connecting string
$cn=mysql_connect("localhost","root","dblg")    
//membuat query
mysql_query($cn,"DELETE FROM nama_table WHERE id=x")//hapus

    
?>
</body>
</html>