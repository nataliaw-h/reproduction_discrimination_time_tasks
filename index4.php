<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="mystyle.css">
    <title>Eksperyment</title>

<style>
@media only screen and (max-width: 991px) {

    section {
        z-index: 999;
        margin: 0 auto;
        background: green;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 75%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-size: 40px;
    }

    section2 {
        z-index:999;
        margin: 0 auto;
        background: green;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-size: 80px;

    }

    button {
        font-size: 60px;
    }
     
    #end{
        font-size: 50px;
    }



}

@media only screen and (min-width: 992px) {

    section {
        z-index: 999;
        margin: 0 auto;
        background: green;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 70%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-size: 20px;
    }

    section2 {
        z-index:999;
        margin: 0 auto;
        background: green;
        color: white;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-size: 50px;
    }

    button {
        font-size: 20px;
    }
    #end{
        font-size: 20px;
    }
}
</style>
</head>

<body>	

<footer>
    <p>&copy 2022 Natalia Woropay-Hordziejewicz | email: <a href="mailto:nataliaworopay@gmail.com"><font color = "green"> nataliaworopay@gmail.com</font></a></p>
</footer>

<div id="6">
    <section2>
        <center>Dziękujemy za udział w badaniu!</center>
        <center><p id="end">Zamknij przeglądarkę</p></center>
    </section2>
</div>

<script>
    document.getElementById('6').style.visibility='visible';
</script>

<?php

$id = $_GET['id'];
$w1 = $_GET['w1'];
$w2 = $_GET['w2'];
$w3 = $_GET['w3'];
$w4 = $_GET['w4'];
$w5 = $_GET['w5'];
$w6 = $_GET['w6'];
$w7 = $_GET['w7'];
$w8 = $_GET['w8'];
$w9 = $_GET['w9'];
$w10 = $_GET['w10'];
$w11 = $_GET['w11'];
$w12 = $_GET['w12'];
$w13 = $_GET['w13'];
$w14 = $_GET['w14'];
$w15 = $_GET['w15'];
$w16 = $_GET['w16'];
$w17 = $_GET['w17'];
$w18 = $_GET['w18'];
$w19 = $_GET['w19'];
$w20 = $_GET['w20'];
$w21 = $_GET['w21'];
$w22 = $_GET['w22'];
$w23 = $_GET['w23'];
$w24 = $_GET['w24'];
$w25 = $_GET['w25'];
$w26 = $_GET['w26'];
$w27 = $_GET['w27'];
$w28 = $_GET['w28'];
$w29 = $_GET['w29'];
$w30 = $_GET['w30'];

$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO wynik2 (id, w1, w2, w3, w4, w5, w6, w7, w8, w9, w10, w11, w12, w13, w14, w15, w16, w17, w18, w19, w20, w21, w22, w23, w24, w25, w26, w27, w28, w29, w30)
VALUES ('$id', '$w1', '$w2', '$w3', '$w4', '$w5', '$w6', '$w7', '$w8', '$w9', '$w10', '$w11', '$w12', '$w13', '$w14', '$w15', '$w16', '$w17', '$w18', '$w19', '$w20', '$w21', '$w22', '$w23', '$w24', '$w25', '$w26', '$w27', '$w28', '$w29', '$w30')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  echo "";
} //else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();
?>

</body>
</html>
  
