<html>

<head>
    <title>AZCom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php include("datas.php") ?>
        <div class="menu">
            <a href="index.php">Beranda</a>|<a href="katalog.php">Katalog</a>
        </div>
        <div class="content">
            <form action="" method="POST">
                pilih katalog:
                <select name=" katalog">
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                </select>
                <input type="submit" value="check" name="tombol">
                <hr>
                <table border="1" cellpadding="3" cellpadding="0" widht='300'>
                    <tr>
                        <td>No</td>
                        <td>Namaproduk</td>
                        <td>jenis</td>
                    </tr>
                    <?php
                    if (isset($_POST['tombol'])) {
                        $katalog = $_POST["katalog"];
                        if ($katalog == "hardware") {
                            $hardware = array("Monitor", "CPU", "Keyboard", "Mouse");
                            $no = 1;
                            foreach ($hardware as $hw) {
                                echo "<tr> <td>" . $no . "</td> <td>" . $hw . "</td> <td> Hardware </td> </tr>";
                                $no++;
                            }
                        } else if ($katalog == "software") {
                            $software = array("Windows", "Linux OS", "MAC OS");
                            $no = 1;
                            foreach ($software as $sw) {
                                echo "<tr> <td>" . $no . "</td> <td>" . $sw . "</td> <td> Software </td> </tr>";
                                $no++;
                            }
                        }
                    }

                    ?>
                </table>
            </form>


            Selamat datang ditoko <b>AZCom Komputer</b>
        </div>
        <?php include("data.php") ?>
    </div>
</body>

</html>