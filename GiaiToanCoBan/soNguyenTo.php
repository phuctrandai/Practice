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
            $_SESSION['page'] = 1;
            include_once './index.php';
            
            $result = "";
            $checkNumber = "";
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $checkNumber = (int)$_POST['checkNumber'];
                $i = 2;
                while($i < $checkNumber) {
                    if(($checkNumber % $i) == 0) {
                        break;
                    }
                    $i++;
                }
                if($i == $checkNumber) {
                    $result = "Là số nguyên tố !";
                } else {
                    $result = "Không phải số nguyên tố !";
                }
            }
        ?>
        <div id="content">
            <h1>Bài toán kiểm tra số nguyên tố</h1>
            <div id="main">
                <form method="POST" action="soNguyenTo.php" class="form-inline">
                    <input type="text" name="checkNumber" value="<?php echo $checkNumber; ?>" class="form-control mb-2 mr-sm-2" placeholder="Nhập số cần kiểm tra...">
                    <input type="submit" name="checkButton" value="Kiểm tra" class="btn btn-primary mb-2 mr-sm-2">
                </form>
                <br>
                <label id="result"><?php echo $result; ?></label>
            </div>
        </div>
    </body>
</html>
