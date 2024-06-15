<?php  include 'connection.php';

$empid = $_GET['empid'];

if (isset($empid)) {
    $sql = "SELECT * FROM payment_method WHERE id = '$empid'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $row1 = $row["id"];
        $row2 = $row["payment_method"];
       

//Insert Data to another table
            $sql2 = "INSERT INTO payment_method2 (user)
            VALUES ($row2)";
            if (mysqli_multi_query($conn, $sql2)) {
                echo "New records created successfully";
            } else {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
            }
        echo "id: " . $row["id"]. " - Name: " . $row["payment_method"]. " " . $row["payment_method"]. "<br>";
    }
} else {
    echo "0 results";
}

    $select  = " SELECT * FROM payment_method2 WHERE id = '$empid'";
    $result = $conn->query($select);
    echo '<table class="table table-bordered">';
    while($row = $result->fetch_object()){
        echo '<tr>'
            .'<td>'.$row->id.'</td>'
            .'<td>'.$row->payment_method2.'</td>'
        
            .'</tr>';
    }
    echo '</table>';


}     
?>     