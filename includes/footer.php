<?php

 $sql_insert = "INSERT INTO cust (Customer, Progress, Started, Status, Completed, DMS, VitalNet, Voyence, GPS, Action, DataExtraction, Netbrain, GTAC, CiscoPrime, BigData, ACS) VALUES ('$Customer','0','--/--/--','Not Started','--/--/--','No','No','No','No','No','No','No','No','No','No','No')";

mysqli_query($Conn, $sql_insert);

header ("Location: ../index.php?dbinsert=success");

