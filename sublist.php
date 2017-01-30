<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php

include("database.php");
?>

<div class="container">
   <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i></h4>
                    </div>
                    <div class="panel-body">
                       <?php
                       
echo "<h3> Select Subject to Give Quiz </h3>";
$rs=mysql_query("select * from mst_subject");
echo "<table align=center>";
                                  
  while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
?>                     
                      
                    </div>
                </div>
            </div>
    </div>
    
  
</body>
</html>
