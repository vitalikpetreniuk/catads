<?php
$year = $_REQUEST['year'];
$month = $_REQUEST['month'];
$monthIndex = $_REQUEST['monthIndex'];
$j = file_get_contents( '../json/data.json' ); // в примере все файлы в корне
$data = json_decode($j);
//print_r($data -> Январь[0]);
$year_cont = $data -> $year;
$month_cont = $year_cont[0] -> $month;
empty($month_cont) ? exit() : true;
echo '<input type="hidden" id="currentMonth" value="'.$month.'"></input>';
echo '<input type="hidden" id="currentYear" value="'.$year.'"></input>';
echo '<div class="row table-row top-row">
        <div class="col table-col top-col">День</div>
        <div class="col table-col top-col">Клики</div>
        <div class="col table-col top-col">Показы</div>
        <div class="col table-col top-col">CPC</div>
        <div class="col table-col top-col">CPM</div>
        <div class="col table-col top-col">Стоимость</div>
    </div>';
foreach ($month_cont as $day) {
    echo '<div class="row table-row">';
    foreach ($day as $key=>$value) {
        ?>
        <div class="col table-col top-row"><?=$value?></div>
        <?php
    }
    echo '</div>';
}
?>