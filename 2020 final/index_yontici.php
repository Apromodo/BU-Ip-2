<?php

include "connection.php";
?>

<div>
    <table class="table">
        <thead>
        <tr>
            <th>
               Sicil
            </th>
            <th>
                Tarih
            </th>
    <th>
                Saat
            </th>
            <th>
                Onay
            </th>
        </tr>
        </thead>
        <tbody>
    <tr>
            <?php
            $mysqli;
            $sql="select * from izinler";
            $result=mysqli_query($mysqli,$sql);

            while ($row=mysqli_fetch_assoc($result)) {
                echo "<td>".$row["sicil"]."</td>";
                echo "<td>".$row["tarih"]."</td>";
                echo "<td>".$row["saat"]."</td>";
                echo "<td>".$row["onay"]."</td>";
            }
            mysqli_close($mysqli);

            ?>
     </tr>
    <a href="logout.php">sistemden çık</a>
        </tbody>
    </table>
</div>
