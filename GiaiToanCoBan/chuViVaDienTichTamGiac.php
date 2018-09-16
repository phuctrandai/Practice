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
            $_SESSION['page'] = 4;
            include_once './index.php';
            
            $valueA = $valueB = $valueC = $chuVi = $dienTich = "";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $valueA = (int)$_POST['valueA'];
                $valueB = (int)$_POST['valueB'];
                $valueC = (int)$_POST['valueC'];
                
                if($valueA <= 0 || $valueB <= 0 || $valueC <= 0) {
                    $chuVi = "Không phải tam giác !";
                }
                else {
                    $chuVi = ($valueA + $valueB + $valueC);
                    $dienTich = "Diện tích S = ".(sqrt($chuVi * ($chuVi - $valueA) * ($chuVi - $valueB) * ($chuVi - $valueC)));
                    $chuVi = "Chu vi P = ".$chuVi;
                }
            }
        ?>
        <div id="content">
            <h1 class="mb-2 mr-sm-2">Bài toán tìm chu vi & diện tích tam giác</h1>
            <div id="main">
                <form method="POST" action="chuViVaDienTichTamGiac.php">
                    <label for="valueA">Độ dài cạnh thứ nhất:</label>
                    <input type="text" name="valueA" value="<?php echo $valueA; ?>" class="form-control"/><br/>
                    
                    <label for="valueB">Độ dài cạnh thứ hai:</label>
                    <input type="text" name="valueB" value="<?php echo $valueB; ?>" class="form-control"/><br/>
                    
                    <label for="valueC">Độ dài cạnh thứ ba:</label>
                    <input type="text" name="valueC" value="<?php echo $valueC; ?>" class="form-control"/><br/>
                    
                    <input type="submit" name="checkButton" value="Tính" class="btn btn-primary">
                </form>
                <br>
                <label id="result"><?php echo $chuVi; ?></label><br>
                <label id="result"><?php echo $dienTich; ?></label>
            </div>
        </div>
    </body>
</html>
