<?php
    include("../Controller/MemberController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Member</title>
</head>

<body>
    <h1>Chi tiết thành viên</h1>
    <?php
        $member = MemberController::getMember($_GET['id']);
        echo "<p> FULLNAME: ".$member['fullname']."</p>";
        echo "<p> EMAIL: ".$member['email']."</p>";
        echo "<p> PHONE: ".$member['phone']."</p>";
        echo "<p> LOCAL: ".$member['local']."</p>";
        
    ?>
    <p><a href="./MemberList_Page.php">Back</a></p>
</body>

</html>