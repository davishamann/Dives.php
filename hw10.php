<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw10.css"> 
</head>
<body>
<form action="hw10.php" method="post">
<h1> Select Dive: </h1>
<input type="radio" name="dive" value="Roatan">Roatan <br>
<input type="radio" name="dive" value="Bonaire">Bonaire<br>
<input type="radio" name="dive" value="Grand Cayman">Grand Cayman <br>
<input type="radio" name="dive" value="Key Largo">Key Largo <br>
<input type="radio" name="dive" value="Key West">Key West <br>
<input type="radio" name="dive" value="Aruba">Aruba <br>
<input type="radio" name="dive" value="Queensland">Queensland <br>
<input type="radio" name="dive" value="Kailua Kona">Kailua Kona <br>
<input type="radio" name="dive" value="Belize">Belize <br>
<input type="radio" name="dive" value="Bali">Bali <br>
<input type="radio" name="dive" value="Cozumel">Cozumel <br>
<input type="submit" name="submit" value="Submit"/>

</form>

<?

$radio=$_POST['dive'];

if (isset($_POST['submit'])){
    print"<section id=dive>";
print"<h1> Summary for $radio : </h1>";
print"</section>";  
    print '<table>';
    print '<tr>';
    print '<th> Dive Type </th>';
    print '<th> Duration </th>';
    print '<th> Depth </th>';
    print '</tr>';
$dives=file("dives.txt");

foreach($dives as $row){
    $fields = explode(',',$row);
    
    if($radio==$fields[0]){
        print "<tr>";
        print "<td> $fields[1] </td><br>";
        print "<td> $fields[2] </td><br>";
        print "<td> $fields[3] </td><br>";
        print "</tr>";
        $count++;
        $total+=$fields[2];
    }  
}   
print '</table>';
print"<section>";
print"Total Dives: $count <br>";
print "Total Time Under at $radio: $total";

}    
print"</section>";

?>
</body>
</html>