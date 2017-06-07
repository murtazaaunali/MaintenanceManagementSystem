<div class="row-fluid">
    <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
            <h5>Number of Work Order Completed</h5>
        </div>
        <div class="widget-content" >
            <div class="row-fluid">
                <div class="span12">
                    <canvas id="chart_workorder_completed"></canvas>
                    <script>
                        var chart_workorder_completed = document.getElementById("chart_workorder_completed");
                        var Chart1 = new Chart(chart_workorder_completed, {
                            type: 'line',
                            data: {
                                xLabels: <?php echo json_encode($week); ?>,
                                yLabels: "No of WOs completed",
                                datasets: [{
                                        label: '# of Work Order(s)',
                                        data: <?php echo json_encode($workorders_this_week); ?>,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(238,88,74,1)'

                                        ],
                                        borderWidth: 2,
                                        fill: false,
                                        borderCapStyle: 'butt',
                                        borderDash: [],
                                        borderDashOffset: 0.0,
                                        borderJoinStyle: 'miter',
                                        pointBorderColor: "rgba(238,88,74,1)",
                                        pointBackgroundColor: "#fff",
                                        pointBorderWidth: 1,
                                        pointHoverRadius: 5,
                                        pointHoverBackgroundColor: "rgba(39,173,116,1)",
                                        pointHoverBorderColor: "rgba(39,173,116,1)",
                                        pointHoverBorderWidth: 2,
                                        pointRadius: 1,
                                        pointHitRadius: 10,
                                        spanGaps: false,
                                    }],
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <div class="widget-box">
            <div class="widget-title bg_lg">
                <h5>Open</h5>
                <span>All Time</span>
            </div>
            <div class="widget-content" >
                <div class="row-fluid">
                    <div class="span12"><h2 class="text-center"><?php echo $number_open_workorders; ?></h2><p class="text-center">Work order(s)</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="span3">
        <div class="widget-box">
            <div class="widget-title bg_lg">
                <h5>On Hold</h5>
                <span>All Time</span>
            </div>
            <div class="widget-content" >
                <div class="row-fluid">
                    <div class="span12">
                        <h2 class="text-center"><?php echo $number_hold_workorders; ?></h2>
                        <p class="text-center">Work order(s)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="span3">
        <div class="widget-box">
            <div class="widget-title bg_lg">
                <h5>Closed</h5>
                <span>All Time</span>
            </div>
            <div class="widget-content" >
                <div class="row-fluid">
                    <div class="span12"><h2 class="text-center"><?php echo $number_closed_workorders; ?></h2><p class="text-center">Work order(s)</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="span3">
        <div class="widget-box">
            <div class="widget-title bg_lg">
                <h5>Completed</h5>
                <span>All Time</span>
            </div>
            <div class="widget-content" >
                <div class="row-fluid">
                    <div class="span12"><h2 class="text-center"><?php echo $number_completed_workorders; ?></h2><p class="text-center">Work order(s)</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span6">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
                    <h5>Number of Work Orders Completed by User</h5>
                </div>
                <div class="widget-content" >
                    <div class="row-fluid">
                        <div class="span12">
                            <?php echo json_encode($week); ?>
                            <canvas id="workorders_by_users"></canvas>
                            <script>
                                var workorders_by_users = document.getElementById("workorders_by_users");
                                var Chart2 = new Chart(workorders_by_users, {
                                    type: 'bar',
                                    data: {
                                        xLabels: [
                                        ],
                                        yLabels: "No of WOs completed",
                                        datasets: [{
                                                label: '# of Work Order(s)',
                                                data: [12, 19, 3, 5, 2, 3],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(238,88,74,1)'

                                                ],
                                                borderWidth: 2,
                                                fill: false,
                                                borderCapStyle: 'butt',
                                                borderDash: [],
                                                borderDashOffset: 0.0,
                                                borderJoinStyle: 'miter',
                                                pointBorderColor: "rgba(238,88,74,1)",
                                                pointBackgroundColor: "#fff",
                                                pointBorderWidth: 1,
                                                pointHoverRadius: 5,
                                                pointHoverBackgroundColor: "rgba(39,173,116,1)",
                                                pointHoverBorderColor: "rgba(39,173,116,1)",
                                                pointHoverBorderWidth: 2,
                                                pointRadius: 1,
                                                pointHitRadius: 10,
                                                spanGaps: false,
                                            }],
                                    },
                                    options: {
                                        responsive: true,
                                        scales: {
                                            yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
                    <h5>Number of Work Order Completed</h5>
                </div>
                <div class="widget-content" >
                    <div class="row-fluid">
                        <div class="span12">
                            <?php echo json_encode($week); ?>
                            <canvas id="myChart"></canvas>
                            <script>
                                var ctx = document.getElementById("myChart");
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        xLabels: [
                                        ],
                                        yLabels: "No of WOs completed",
                                        datasets: [{
                                                label: '# of Work Order(s)',
                                                data: [12, 19, 3, 5, 2, 3],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(238,88,74,1)'

                                                ],
                                                borderWidth: 2,
                                                fill: false,
                                                borderCapStyle: 'butt',
                                                borderDash: [],
                                                borderDashOffset: 0.0,
                                                borderJoinStyle: 'miter',
                                                pointBorderColor: "rgba(238,88,74,1)",
                                                pointBackgroundColor: "#fff",
                                                pointBorderWidth: 1,
                                                pointHoverRadius: 5,
                                                pointHoverBackgroundColor: "rgba(39,173,116,1)",
                                                pointHoverBorderColor: "rgba(39,173,116,1)",
                                                pointHoverBorderWidth: 2,
                                                pointRadius: 1,
                                                pointHitRadius: 10,
                                                spanGaps: false,
                                            }],
                                    },
                                    options: {
                                        responsive: true,
                                        scales: {
                                            yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>