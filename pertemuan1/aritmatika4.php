<html>
    <head></head>

    <body>
        <form method="GET" action="aritmatika4.php">
            <input type="number" name="bil1"
                <?php 
                    if (isset($_GET['bil1'])) {
                        echo 'value="'.$_GET['bil1'].'"';
                    }
                ?>
            > 
            <select name="opr">
                <option value="+"
                    <?php 
                        if (isset($_GET['opr']) && $_GET['opr']=='+') {
                            echo 'selected';
                        }
                    ?>
                >+</option>
                <option value="-"
                    <?php 
                            if (isset($_GET['opr']) && $_GET['opr']=='-') {
                                echo 'selected';
                            }
                        ?>
                >-</option>
                <option value="/" 
                    <?php 
                            if (isset($_GET['opr']) && $_GET['opr']=='/') {
                                echo 'selected';
                            }
                        ?>
                >/</option>
                <option value="x"
                    <?php 
                            if (isset($_GET['opr']) && $_GET['opr']=='x') {
                                echo 'selected';
                            }
                        ?>
                >x</option>
            </select>
            <input type="number" name="bil2"
            <?php 
                    if (isset($_GET['bil2'])) {
                        echo 'value="'.$_GET['bil2'].'"';
                    }
                ?>
            >
            <input type="submit" name="sub" value="=">
            <?php
                include 'pustaka.php';
                if (isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])) {
                  echo $rslt = operasikan($_GET['bil1'],$_GET['bil2'],$_GET['opr']);
                  $log = $_GET['history']."<br>". $_GET['bil1']." ".$_GET['opr']." ".$_GET['bil2']." = ".$rslt;
                  echo "<h2>Log Perhitungan</h2>";
                  echo $log;
                }

            ?>
            <input type="hidden" name="history"
                <?php
                    if (isset($_GET['sub'])) {
                        echo 'value="'.$log.'"';
                    }
                ?>
            >
 
        </form>
 
    </body>

</html>