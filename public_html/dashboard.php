<?php
require '../config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>





</head>
<body>
    <h1>Admin Dashboard</h1>
    <a href="logout.php">Logout</a>
    <p>Hi, here's all the data from the lennox database:</p>

    <?php
   $query = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'";
   $result = pg_query($conn, $query);

   if (!$result) {
       echo "An error occurred while fetching table names.";
       exit;
   }

   $tables = pg_fetch_all($result);

   if ($tables) {
       foreach ($tables as $table) {
           $table_name = $table['table_name'];
           echo "<h2>Table: $table_name</h2>";

           $query = "SELECT * FROM \"$table_name\"";
           $result = pg_query($conn, $query);

           if (!$result) {
               echo "An error occurred while fetching data from the $table_name table.";
               continue;
           }
           $rows = pg_fetch_all($result);

           if ($rows) {
               echo "<table><thead><tr>";
               foreach (array_keys($rows[0]) as $column) {
                   echo "<th>$column</th>";
               }
               echo "</tr></thead><tbody>";
               foreach ($rows as $row) {
                   echo "<tr>";
                   foreach ($row as $value) {
                       echo "<td>$value</td>";
                   }
                   echo "</tr>";
               }

               echo "</tbody></table>";
           } else {
               echo "<p>No data available in this table.</p>";
           }
       }
   } else {
       echo "<p>No tables found in the database.</p>";
   }

   // Close the database connection
   pg_close($conn);
   ?>
   






    

</body>
</html>