<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
            </div>
            <div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php 
            $tongdm=count($listthongke);
            $i=1;
            foreach ($listthongke as $thongke) {
                extract($thongke);
                if($i==$tongdm) $dauphay=""; else $dauphay=",";
                echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
                $i+=1;
            }
            ?>
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'Thống kê sản phẩm theo danh mục',
            'width': 1110,
            'height': 800
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
        </div>
    </div>