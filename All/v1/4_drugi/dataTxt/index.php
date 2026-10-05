<html>
    <head>
        <meta charset="UTF-8">
        <title>Table</title>
    </head>
    <body>
        <form method="post">
            Разделител: <input type="text" name="trim">
            <input type="submit" value="ОК">
        </form>

        <?php
        $divide = trim($_POST['trim']);
        if (empty($divide)) {
            echo "Моля въведете разделител!!!";
        } else {
            $result = file('data.txt');
            $result1 = file('data.txt');
            ?>
            <table border="1">
                <!-- comment<tr>
                <?php
                // foreach ($result as $v) {
                //       $col = explode($divide, $v);
                //    } foreach ($col as $v => $cell) {
                //        echo "<td> $v </td>";
                //    }
                ?>
                </tr> -->
                <tr>
                    <?php
                    foreach ($result1 as $value) {
                        $columns = explode($divide, $value);
                        //    echo '1 <pre>' . print_r($columns, true) . '</pre>';
                        //  echo '<tr>';
                        foreach ($columns as $v1 => $vv) {
                            echo '<td>' . $vv . '</td>';
                        }
                        echo '</tr>';
                    }
                    ?>

            </table>
            <?php
        }
        ?>
    </body>
</html>        