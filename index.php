<html>
 <head>
   <title>Hello World</title>
 </head>
 <body>
<?php
// current time
echo date('h:i:s') . "\n";
// sleep for 10 seconds
$delay_sec = getenv('DELAY_SEC');
// sleep(delay_sec);
sleep(10);
// wake up !
echo date('h:i:s') . "\n";
?>
 </body>
</html>
