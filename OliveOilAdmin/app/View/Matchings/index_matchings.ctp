<?php

$servername = "localhost";
$username = "root";
$password = "rWOG3OBEWJ2RoUr0E2LA";
$dbname = "cakephp";

$link = mysqli_connect("localhost", "root", "rWOG3OBEWJ2RoUr0E2LA", "cakephp");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$dropmerges = "DROP TABLE if exists merges;";
mysqli_query($link,$dropmerges);
$droptemp = "DROP TABLE if exists temp;";
mysqli_query($link,$droptemp);
$createmerges = "CREATE TABLE merges (
    M_Id int(10) NOT NULL AUTO_INCREMENT,
    demand_id int(10),
    offer_id int(10),
    round_id int(10),
     PRIMARY KEY (M_Id)
    );";
mysqli_query($link,$createmerges);
$createtemp = "CREATE TABLE temp (
    M_Id int(10) NOT NULL AUTO_INCREMENT,
    demand_id int(10),
    offer_id int(10),
    round_id int(10),
     PRIMARY KEY (M_Id)
    );";
mysqli_query($link,$createtemp);
    
$first_step = "INSERT INTO `temp`(`demand_id`, `offer_id`) 
SELECT demands.id as demand_id, offers.id as offer_id FROM offers, demands where demands.product_id=offers.product_id; ";
mysqli_query($link,$first_step);
//mysqli_multi_query($link, $first_step);

$second_step = "SELECT demand_id, offer_id, @round_id:=@round_id+1 from temp, (SELECT @round_id:=0) r ORDER BY (@round_id % 3);";

$result =mysqli_query($link,$second_step);
//print_r($result);

if ($result =mysqli_query($link,$second_step))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    //print_r($row);
    
    $third_step = "INSERT INTO merges(demand_id, offer_id, round_id) 
	 VALUES ($row[0], $row[1],$row[2])";
	 mysqli_query($link,$third_step);
    }
  // Free result set
  mysqli_free_result($result);
}

$query1 = "SELECT demand_id, offer_id,round_id from merges";
$result =mysqli_query($link,$query1);

?>
<div class="Matchings result">
	<h2>My matchings results</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<th>Country index</th>
	<th>Elaiourgeio index</th>
	<th>Series num</th>
<?php

    
    while ($row=mysqli_fetch_row($result)) {
     echo "<tr>";
	  echo "	<td> ".$row["0"]."</td>";
	  echo "	<td> ".$row["1"]."</td>";
	  echo "	<td> ".$row["2"]."</td>";					 
	  echo "</tr>";		 
              
	}
mysqli_free_result($result);

/* close connection */
mysqli_close($link);
?>

	</table>
	</div>
</div>