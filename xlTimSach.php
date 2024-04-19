<html>
    <body>
        <?php
            $sTukhoa = $_REQUEST["txtTukhoa"];
            $sach = array(
                array("id" => 1, "ten" => "None", "mo_ta" => "Phong"),
                array("id" => 2, "ten" => "None", "mo_ta" => "21011415"),
                array("id" => 3, "ten" => "No None", "mo_ta" => "Mô tả")
            );
            $ketqua = array_filter($sach, function($item) use ($sTukhoa) {
                return strpos(strtolower($item['ten']), strtolower($sTukhoa)) !== false;
            });
        ?>
        <h1>Tìm sách</h1>
        Từ khóa tìm sách là : <?php echo $sTukhoa; ?>
        <br />
        Kết quả tìm là :
        <ul>
            <?php foreach ($ketqua as $s) : ?>
                <li><?php echo $s['ten']; ?>: <?php echo $s['mo_ta']; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

