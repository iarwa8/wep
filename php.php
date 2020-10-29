<?php 
// query for reading the databse
$query="SELECT * FROM students";
// check if connection to database server is workin
if(!($database = mysqli_connect("localhost","root","")))die("could not connect to database </body></html>");
// check if there is database 
if(!mysqli_select_db($database,"names")) die("could not open names database </body></html>");
// executing the query
if(!($result = mysqli_query($database,$query)))
{
    print("<p>Could not execute  query!</p>");
        die(mysqli_error($database). "</body></html>" );
}
// closing the mysqli
mysqli_close($database);
?>
<table>
<caption>Results of "Select * From students"</caption>
<?php 
// printing information from database in loop to print all the results from the query 
while($row = mysqli_fetch_row($result)){
    print("<tr>");
    foreach ($row as $key => $value)
    print("<td>$value </td>");
    print("</tr>");
}
?>