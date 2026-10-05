<?php
include "config.php";
?>
<div class="container">
    <form method='post' action='download_csv.php'>
        <input type='submit' value='export' name='export'>

        <table border='1' style='border-collapse:collapse;'>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>                
                <th>Email</th>
            </tr>
            <?php
            $query = "SELECT * FROM users ORDER BY id asc";
            $result = mysqli_query($con, $query);
            $user_arr = array ();

            while ($row = mysqli_fetch_array($result))
            {
                $id = $row['id'];
                $user_name = $row['username'];
                $name = $row['name'];
                $email = $row['email'];
                $user_arr[] = array ($id, $user_name, $name, $email);
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $user_name; ?></td>
                    <td><?php echo $name; ?></td>                    
                    <td><?php echo $email; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        $serialize_user_arr = serialize($user_arr);
        ?>
        <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
    </form>
</div>