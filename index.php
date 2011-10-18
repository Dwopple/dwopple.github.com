<?php

require_once('database.php');
$Db = new MySqlDb('/tmp/mysql/laurel.sock', 'miranda', 'fk5oFTHB', 'laurel');




?>
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <title>untitled</title>
</head>
<body>
<pre>
<?php print_r($results); ?>
</pre>
</body>
</html>