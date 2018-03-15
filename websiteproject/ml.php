<html>
<body>
<?php
$myXMLData =
"<?xml version='1.0' encoding= 'UTF-8'?>
<note>
<to>tove</to>
<form>jani</form>
<heading>reminder</heading>
<body> dont forget me this weekend!</body>
</note>";
$xml=simplexml_load_string($myXMLData) or die ("Error: cannot create object");
print_r($xml);
?>
</body>
</html>