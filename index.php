<!DOCSTYLE html>
<html>
<title>Whois</title>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style.css">
<head>

</style>
<body>
<div class=c1>
<h3><a href=/>Home</a></h3>
<h2>Whois</h2>

<?php
echo "
<form action=index.php method=get>
<input autofocus type=search name=w value=$_GET[w]>
<input type=submit value=Search>
</form>
";

if(isset($_GET['w'])){

	$command = "whois --verbose '$_GET[w]'";

	$output = shell_exec($command);

	echo "<pre>$output</pre>";

}else{
	echo "Type domain or ip address";
}

?>
</div>
</body>
</html>

