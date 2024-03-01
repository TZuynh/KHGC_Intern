<?php
 include("../Controller/MemberController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <h1>Danh sách thành viên</h1>
    <table border = 1>
        <thead>
            <tr>
                <th>ID</th>
                <th>FULLNAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>LOCAL</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $list = MemberController::getAllMembers();
                foreach ($list as $member) {
                    echo "
                    <tr>
                        <td>
                            <p>".$member['id']."</p>
                        </td>
                        <td>
                            <p>".$member['fullname']."</p>
                        </td>
                        <td>
                            <p>".$member['email']."</p>
                        </td>
                        <td>
                            <p>".$member['phone']."</p>
                        </td>
                        <td>
                            <p>".$member['local']."</p>
                        </td>
                        <td>
                            <p><a href='./MemberDetail_Page.php?id=".$member['id']."'>Chi tiết thành viên</a></p>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>

    </table>
    <br>
    
</body>

</html>