<?php #starts PHP code block

require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

echo Validate("\ \ / < bold > % $ testing ");
#ends PHP code block ?>
