<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="switch">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
        </label>
    </div>
    <form action="" method="post">
        <div style="display:flex;">
            <label for="liter">Masukan Jumlah Liter</label>
            <input type="number" name="liter" id="liter">
        </div>
        <div style="display:flex;">
            <label for="">Pilih jenis bahan bakar</label>
            <select name="jenis" id="">
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">Shell V-Power Nitro</option>
                <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                <option value="SVPowerNitro">Shell V-Power Premium</option>
            </select>
        </div>
        <button type="submit" name="beli">beli</button>
    </form>

    <?php
    require "Logic.php";

    $logic = new Pembelian();
    $logic->setHarga(10000, 15000, 20000, 25000);

    if (isset($_POST['beli'])) {
        $logic->JenisYangDipilih = $_POST['jenis'];
        $logic->TotalPerLiter = $_POST['liter'];
        $logic->totalharga();
        $logic->cetakbukti();
    }
    ?>

    <script>
        const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        const currentTheme = localStorage.getItem('theme');

        if (currentTheme) {
            document.documentElement.setAttribute('data-theme', currentTheme);

            if (currentTheme === 'dark') {
                toggleSwitch.checked = true;
            }
        }

        function switchTheme(e) {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
            }
        }

        toggleSwitch.addEventListener('change', switchTheme, false);
    </script>
</body>

</html>