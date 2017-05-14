<!DOCTYPE html>
<html>
    <head>
        <title>Election stuff!</title>
    </head>
    <body>
        <h1>General election stats here!</h1>
        <?php


require "database.php";
// echo phpinfo();
try {
    $db = new Database();

    // $conn = new PDO("mysql:host=$hostname;dbname=election", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected";
    $sql  = 'SELECT forename, surname, votes, constituency_name FROM `candidates` WHERE `forename`="David" ORDER BY ABS(votes) DESC';
    // $result = $conn->query($sql);
    $result = $db->query($sql);

    echo "<table>";
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>".$row["forename"]."</td>";
        echo "<td>".$row["surname"]."</td>";
        echo "<td>".$row["votes"]."</td>";
        echo "<tr/>";
    }
    echo "</table>";
}
catch (PDOException $e) {
    echo "connection failed: ".$e->getMessage();
}
finally {
    $conn = null;
}


         ?>
    </body>
</html>
