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
            $_SESSION['page'] = 5;
            include_once './index.php';
            
            $valueA = $result = "";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $valueA = (int)$_POST['valueA'];
                $result = 1;
                for($i = 1 ; $i <= $valueA; $i++) {
                    $result *= $i;      
                }
                $result = "Kết quả: ".$result;
            }
        ?>
        
        <div id="content">
            <h1 class="mb-2 mr-sm-2">Bài toán tìm giai thừa của một số</h1>
            <div id="main">
                <form method="POST" action="giaiThua.php" class="form-inline">
                    <input type="text" name="valueA" value="<?php echo $valueA; ?>" placeholder="Nhập số cần tìm giai thừa..." class="form-control mb-2 mr-sm-2"/><br/>
                                        
                    <input type="submit" name="checkButton" value="Tính" class="btn btn-primary mr-sm-2 mb-2">
                </form>
                <br>
                <label id="result"><?php echo $result; ?></label>
            </div>
        </div>
    </body>
</html>
