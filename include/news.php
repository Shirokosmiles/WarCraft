<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		    echo "<div class='header__news-item'>
                <div class='header__news-item-border'>
                    <img class='border-icon-top' src='template/indra/images/border-icon-top.png' alt='border icon top'>
                </div>
                <a href='$row[link]' target='_blank' class='header__news-item-img'>
                    <img src='$row[images]' alt='WELCOME TO THE COZY ABODE OF KELTIR'>
                </a>
                <div class='header__news-item-date'>
                    $row[date]
                </div>
                <div class='header__news-item-title'>
                    $row[text]
                </div>
                
            </div>";
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>