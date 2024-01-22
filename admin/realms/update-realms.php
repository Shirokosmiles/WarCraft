<? require_once '../../include/config.php'; ?>
<?php
@session_start();
if (!$_SESSION['admin']) {

    header('Location: ./');
}

?>
<? include '../../include/main.php'; ?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Редактирование реалма • <?php echo"$row[title]";?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="../assets/css/preloader.min.css"
            type="text/css" />

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style"
            rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css"
            />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet"
            type="text/css" />

        <!-- Custom Css -->
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css" />
		<script src="https://kit.fontawesome.com/803ae4140f.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
<?php include "../function/logo.php"?>


                        <!-- App Search-->

                    </div>

<?php include "../function/user.php" ?>
                </div>
            </header>

<?php include "../function/menu.php" ?>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                    justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Статистика проекта</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->

<?php include "../function/stat.php" ?>
		
<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Настройка реалма</h4>
                    </div>
                    <div class="card-body p-4">




<?php
$conn = mysqli_connect("$webdbip", "$webdbuser", "$webdbpass", "$webdb");
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $userid = mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "SELECT * FROM realms WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $name = $row["name"];
                $rate = $row["rate"];
				$icon = $row["icon"];
				$version = $row["version"];
				$description = $row["description"];
				$proffesion = $row["proffesion"];
				$gold = $row["gold"];
				$rep = $row["rep"];
				$loot = $row["loot"];
				$honor = $row["honor"];
				$class = $row["class"];
				
            }
            echo "<form method='post'>
                        <div class='row'>
                            <div class='col-lg-6'>
                                <div>
									<input type='hidden' name='id' value='$userid' />
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Название</label>
                                        <input class='form-control' type='text' name='name' value='$name'>
                                    </div>
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Иконка</label>
                                        <input class='form-control' type='text' name='icon' value='$icon' >
                                    </div>
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Описание</label>
                                        <input class='form-control' type='text' name='description' value='$description' >
                                    </div>
									<div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Профессии</label>
                                        <input class='form-control' type='text' name='proffesion' value='$proffesion' >
                                    </div>
									<div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Репутация</label>
                                        <input class='form-control' type='text' name='rep' value='$rep' >
                                    </div>
									<div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Хонор</label>
                                        <input class='form-control' type='text' name='honor' value='$honor' >
                                    </div>

                                </div>
                            </div>
                            <div class='col-lg-6'>
                                <div class='mt-3 mt-lg-0'>
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Рейт</label>
                                        <input class='form-control' type='text' name='rate' value='$rate'>
                                    </div>
                                    <div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Версия</label>
                                        <input class='form-control' type='text' name='version' value='$version'>
                                    </div>
									<div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Класс</label>
                                        <input class='form-control' type='text' name='class' value='$class'>
                                    </div>
									<div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Золото</label>
                                        <input class='form-control' type='text' name='gold' value='$gold'>
                                    </div>
									<div class='mb-3'>
                                        <label for='example-text-input' class='form-label'>Лут</label>
                                        <input class='form-control' type='text' name='loot' value='$loot'>
                                    </div>
									



                                                    </div>
                                                </div>
												<center><div class='mt-4'>
                                                                <input type='submit' class='btn btn-primary w-md'></input>
                                                            </div></center>
                                            </div>
											
											</form>";
        }
        else{
            echo "<center>Такой информации по вашему запросу не существует! <br><br>
	  <a href ='javascript:history.go(-2)' class='btn btn-primary w-md update'>Вернуться назад</a>
	   ";
        }
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
elseif (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["rate"]) && isset($_POST["icon"]) && isset($_POST["description"]) && isset($_POST["proffesion"]) && isset($_POST["gold"]) && isset($_POST["rep"]) && isset($_POST["loot"]) && isset($_POST["honor"]) && isset($_POST["class"])  ) {
      
    $userid = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
	$rate = mysqli_real_escape_string($conn, $_POST["rate"]);
    $icon = mysqli_real_escape_string($conn, $_POST["icon"]);
	$version = mysqli_real_escape_string($conn, $_POST["version"]);
	$description = mysqli_real_escape_string($conn, $_POST["description"]);
	$proffesion = mysqli_real_escape_string($conn, $_POST["proffesion"]);
	$gold = mysqli_real_escape_string($conn, $_POST["gold"]);
	$rep = mysqli_real_escape_string($conn, $_POST["rep"]);
	$loot = mysqli_real_escape_string($conn, $_POST["loot"]);
	$honor = mysqli_real_escape_string($conn, $_POST["honor"]);
	$class = mysqli_real_escape_string($conn, $_POST["class"]);
	
      
    $sql = "UPDATE realms SET name = '$name', rate = '$rate', icon = '$icon', version = '$version', description = '$description', proffesion = '$proffesion', gold = '$gold', rep = '$rep', loot = '$loot', honor = '$honor', class = '$class' WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
       echo "<center>Данные успешно были изменены! <br><br>
	  <a href ='javascript:history.go(-2)' class='btn btn-primary w-md update'>Вернуться назад</a>
	   ";
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
else{
    echo "Некорректные данные";
}
mysqli_close($conn);
?>



											
											
											
											
											
											
											
											
											
											
											
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
							

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- apexcharts -->
<script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="../assets/js/pages/dashboard.init.js"></script>

<script type="text/javascript">
    function initCounterNumber() {
            var counter = document.querySelectorAll('.counter-value');
            var speed = 250; // The lower the slower
            counter.forEach(function (counter_value) {
                function updateCount() {
                    var target = +counter_value.getAttribute('data-target');
                    var count = +counter_value.innerText;
                    var inc = target / speed;
                    if (inc < 1) {
                        inc = 1;
                    }
                    // Check if target is reached
                    if (count < target) {
                        // Add inc to count and output in counter_value
                        counter_value.innerText = (count + inc).toFixed(0);
                        // Call function every ms
                        setTimeout(updateCount, 1);
                    } else {
                        counter_value.innerText = target;
                    }
                };
                updateCount();
            });
        }

        $(document).ready( function() {
            initCounterNumber();
        });
        
    </script></div>
<? include '../../include/main.php'; ?>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script>
                            ©
                            <?php echo"$row[title]";?>
                        </div>
<?php include "../function/dev.php" ?>
                    </div>
                </div>
            </footer>

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>
        <script src="../assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="../assets/libs/pace-js/pace.min.js"></script>

        <script src="../assets/js/app.js"></script>

    </body>

</html>