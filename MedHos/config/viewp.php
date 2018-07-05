<?php
require 'dbconfig.php';
$q = intval($_GET['q']);
//$sql="SELECT * FROM patient where patientid= '".$q."'";
$sql="SELECT * FROM patient";
$result = mysqli_query($conn,$sql);

echo "<table class='table'>
<tr>
<th>Patient id</th>
<th>dob</th>
<th>national id</th>
<th>surname</th>
<th>firstname</th>
<th>othername</th>
<th>phone</th>
<th>email</th>
<th>address</th>
<th>Date added</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['patientid'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['nationalid'] . "</td>";
    echo "<td>" . $row['surname'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['othername'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['emailadress'] . "</td>";
    echo "<td>" . $row['address'] . "</td>"; 
    echo "<td>" . $row['datecreated'] . "</td>";
    echo "</tr>";
    
}

echo "</table>";



mysqli_close($conn);
?>