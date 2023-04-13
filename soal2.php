<?php
require('db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hobi</title>
</head>

<body>
    <div class="form">
        <h2>Data Hobi</h2>
        <table width="100%">
            <thead>
                <tr>
                    <th><strong>No</strong></th>
                    <th><strong>Hobi</strong></th>
                    <th><strong>Jumlah Person</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                $sel_query = "select hobi.hobi, count(hobi) as jumlah_person from hobi
                left join person ON hobi.person_id = person.id group by hobi.hobi
                order by count(hobi) desc ;";
                $result = mysqli_query($con, $sel_query);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row["hobi"]; ?></td>
                        <td><?php echo $row["jumlah_person"]; ?></td>
                    </tr>
                <?php $count++;
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>