<?php

require_once('MySqlDb.php');
$Db = new MySqlDb('localhost:/tmp/mysql/laurel.sock', 'miranda', 'fk5oFTHB', 'laurel');

$Db->where('id', 34);
$Db->delete('posts');



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