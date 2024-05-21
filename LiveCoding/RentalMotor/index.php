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
        <div id="container">
            <form action="" method="post">
                <h1>RentalMotor</h1>
                <input type="text" name="nama" id="nama" class="input" placeholder="Nama..." required>
                    <br><br>
                <input type="number" name="waktu" id="waktu" class="input" placeholder="Waktu..." required>
                    <br><br>    
                <select name="jenis" class="input">
                    <option value="Scoopy">Scoopy</option>
                    <option value="Beat">Beat</option>
                    <option value="Vario">Vario</option>
                    <option value="Aerox">Aerox</option>
                </select>
                    <br><br>
                <button type="submit" name="beli">Sewa!</button>
            </form>
        </div>
        <div id="container">
            <?php
                require "Logic.php";
            ?>
        </div>
    
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
                }
                else {        document.documentElement.setAttribute('data-theme', 'light');
                    localStorage.setItem('theme', 'light');
                }    
            }

            toggleSwitch.addEventListener('change', switchTheme, false);
        </script>
    </body>
</html>