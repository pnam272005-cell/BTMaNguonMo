<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng cửu chương</title>
</head>

<body>

<h2>BẢNG CỬU CHƯƠNG TỪ 1 ĐẾN 10</h2>

<table border="1" cellpadding="10">
    <tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>";

            echo "<b>Bảng cửu chương $i</b><br><br>";

            for ($j = 1; $j <= 10; $j++) {
                echo "$i x $j = " . ($i * $j) . "<br>";
            }

            echo "</td>";
        }
        ?>
    </tr>
</table>

</body>
</html>