<?php
$conn = new mysqli("localhost", "root", "","atividade");
if ($conn -> connect_error) {
 echo "Error: ". $conn->connect_error;
}
