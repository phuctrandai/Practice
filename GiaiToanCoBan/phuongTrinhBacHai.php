<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Toán học cơ bản</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="./CSS/style.css">
    </head>
    <body>
        <?php
            $_SESSION['page'] = 3;
            include_once './index.php';
            
            $valueA = $valueB = $valueC = $pt = $result = "";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $valueA = (int)$_POST['valueA'];
                $valueB = (int)$_POST['valueB'];
                $valueC = (int)$_POST['valueC'];
                
                $pt = "Phương trình:   ".$valueA."x<sup>2</sup> + (".$valueB.")x + (".$valueC.") = 0";
                
                if($valueA == 0 && $valueB == 0 && $valueC == 0) {
                    $result = "Có vô số nghiệm !";
                }
                else if($valueA == 0 && $valueB == 0) {
                    $result = "Vô nghiệm !";
                }
                else if($valueA == 0) {
                    $result = "Có nghiệm: x = ".(-$valueC / $valueB);
                }
                else {
                    $delta = $valueB * $valueB - 4 * $valueA * $valueC;

                    if($delta < 0) {
                        $result = "Vô nghiệm !";
                    }
                    else if($delta == 0) {
                        $result = "Có nghiệm: x = ".(-$valueB / (2*$valueA));
                    }
                    else {
                        $result = " Có nghiệm: x<sub>1</sub> = ".(-$valueB - sqrt($delta))/($valueA * 2)." và x<sub>2</sub> = ".(-$valueB + sqrt($delta))/($valueA * 2);
                    }
                }
            }
        ?>
        
        <div id="content">
            <h1>Bài toán giải phương trình bậc hai</h1>
            <div id="main">
                <form method="POST" action="phuongTrinhBacHai.php">
                    <label for="valueA">Hệ số a:</label>
                    <input type="text" name="valueA" value="<?php echo $valueA; ?>" class="form-control"/><br/>
                    
                    <label for="valueB">Hệ số b:</label>
                    <input type="text" name="valueB" value="<?php echo $valueB; ?>" class="form-control"/><br/>
                    
                    <label for="valueC">Hệ số c:</label>
                    <input type="text" name="valueC" value="<?php echo $valueC; ?>" class="form-control"/><br/>
                    
                    <input type="submit" name="checkButton" value="Giải" class="btn btn-danger">
                </form>
                <br>
                <label id="pt"><?php echo $pt; ?></label><br/>
                <label id="result"><?php echo $result; ?></label>
            </div>
        </div>
    </body>
</html>
