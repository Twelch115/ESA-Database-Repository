<?php #starts PHP code block

require '../Connection.php'; #the file will not run without Connection.PHP being linked
require '../Validation.php'; #the file will not run without Validation.PHP being linked

$sql = "SELECT * FROM `astronaut`"; #SQL statement to present all data in the astronaut table

<table>
  <tr>
    <th> ID </th>
    <th> Name </th>
    <th> No. Missions </th>
  </tr>
  <tr>
    <td> </td>
  </tr>
</table>

#ends PHP code block
?>
