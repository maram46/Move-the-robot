<?php


$database = mysqli_connect('localhost', 'root', '', 'control');

echo " <br/> movment in DB:  <br/> ";
if ($database->connect_error)
    die("Connection failed: " . $database->connect_error);

$sql = "SELECT id, motor FROM control";
$result = $database->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - " . $row["motor"] . "<br>";
    }
} else {
    echo "0 results";
}

if (isset($_POST['button1'])) {
    $mysql = ("insert into control (motor) values ('F')");

    if ($database->query($mysql) === TRUE) {
        echo "<br/> Data has been added 'Forwards' ";
    } else {
        echo "ERROR: " . $mysql . "<br>" . $database->error;
    }
}

if (isset($_POST['button2'])) {
    $mysql = ("insert into control (motor) values ('L')");

    if ($database->query($mysql) === TRUE) {
        echo "<br/> Data has been added 'Left' ";
    } else {
        echo "ERROR: " . $mysql . "<br>" . $database->error;
    }
}

if (isset($_POST['button3'])) {
    $mysql = ("insert into control (motor) values ('S')");

    if ($database->query($mysql) === TRUE) {
        echo "<br/> Data has been added 'Stop' ";
    } else {
        echo "ERROR: " . $mysql . "<br>" . $database->error;
    }
}

if (isset($_POST['button4'])) {
    $mysql = ("insert into control (motor) values ('R')");

    if ($database->query($mysql) === TRUE) {
        echo "<br/> Data has been added 'Right' ";
    } else {
        echo "ERROR: " . $mysql . "<br>" . $database->error;
    }
}

if (isset($_POST['button5'])) {
    $mysql = ("insert into control (motor) values ('B')");

    if ($database->query($mysql) === TRUE) {
        echo "<br/> Data has been added 'Backwards' ";
    } else {
        echo "ERROR: " . $mysql . "<br>" . $database->error;
    }

    $database->close();
}
