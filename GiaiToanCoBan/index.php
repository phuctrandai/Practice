
    <div class="bg-dark" style="width:100%; height: 50px; position: fixed; z-index: 10;">
        <p style="color:#fff; font-weight: bold; padding: 15px 15px;">Toán học cơ bản</p>
    </div>
    <nav class="navbar bg-dark" id="menu">
        <ul class="navbar-nav">
            <li class="nav-item <?php if($_SESSION["page"] == 1){ echo "activeLink";} else { echo "";}?>">
                <a class="nav-link" href="soNguyenTo.php">Số nguyên tố</a>
            </li>
            <li class="nav-item <?php if($_SESSION["page"] == 2){ echo "activeLink";} else { echo "";}?>">
                <a class="nav-link" href="phuongTrinhBacNhat.php">Phương trình bậc nhất</a>
            </li>
            <li class="nav-item <?php if($_SESSION["page"] == 3){ echo "activeLink";} else { echo "";}?>">
                <a class="nav-link" href="phuongTrinhBacHai.php">Phương trình bậc hai</a>
            </li>
            <li class="nav-item <?php if($_SESSION["page"] == 4){ echo "activeLink";} else { echo "";}?>">
                <a class="nav-link" href="chuViVaDienTichTamGiac.php">Chu vi và diện tích tam giác</a>
            </li>
            <li class="nav-item <?php if($_SESSION["page"] == 5){ echo "activeLink";} else { echo "";}?>">
                <a class="nav-link" href="giaiThua.php">Giai thừa</a>
            </li>
        </ul>
    </nav>
