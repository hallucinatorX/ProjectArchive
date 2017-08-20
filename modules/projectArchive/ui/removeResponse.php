<?php
$Key=$_GET['key'];
$PId=$_GET['pid'];

if (strlen($Key)>0) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "based";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql="SELECT tbl_user.Email FROM tbl_user INNER JOIN pms_student_project ON tbl_user.ID=pms_student_project.student_id WHERE pms_student_project.project_id='$PId'
    AND tbl_user.Email LIKE '%$Key%'";

    $hint="";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($res=$result->fetch_assoc()){
            if($hint==""){
                $hint='<a href="?id='.$PId.'&ruid='.$res['Email'].'" style="color: darkred" onclick="return confirm(\'sure to remove !\');">'.$res['Email'].'</a>';

            }else{
                $hint=$hint.'<br /><a href="?id='.$PId.'&ruid='.$res['Email'].'" style="color: darkred" onclick="return confirm(\'sure to remove !\');">'.$res['Email'].'</a>';

            }
        }
    }
    if($hint==""){
        echo '<p style="color: darkred">No Student Found</p>';
    }else{
        echo $hint;
    }

    $conn->close();
}
?>

