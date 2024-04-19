<html>
    <body>
        <h1>Tìm sách</h1>
        <form action="index.php" Method="GET" >
            Từ khóa : <input type="text" name="txtTukhoa"/>
            <input type="submit" value="Tìm"/>
        </form>
        <?php
            $sTukhoa = $_REQUEST["txtTukhoa"];
            if (isset($sTukhoa))
            {
                print "Từ khóa tìm sách là : $sTukhoa";
                echo "<br>Kết quả tìm là : ";
                $sach = array(
                    array("id" => 1, "ten" => "None", "mo_ta" => "Phong"),
                    array("id" => 2, "ten" => "None", "mo_ta" => "21011415"),
                    array("id" => 3, "ten" => "No None", "mo_ta" => "Mô tả")
                );
                $ketqua = array_filter($sach, function($item) use ($sTukhoa) {
                    return strpos(strtolower($item['ten']), strtolower($sTukhoa)) !== false;
                });
                echo "<ul>";
                foreach ($ketqua as $s) {
                    echo "<li>{$s['ten']}: {$s['mo_ta']}</li>";
                }
                echo "</ul>";
            }
        ?>
    </body>
</html>
