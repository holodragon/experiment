<html>
 <head>
   <title>Hello World</title>
 </head>
 <body>
<?php
// current time
echo "<p>"date('h:i:s')"</p>" . "\n";
// sleep for 10 seconds
$delay_sec = getenv('DELAY_SEC');
// sleep(delay_sec);
sleep(10);
// wake up !
echo "<p>"date('h:i:s')"</p>" . "\n";
?>
 </body>
</html>
