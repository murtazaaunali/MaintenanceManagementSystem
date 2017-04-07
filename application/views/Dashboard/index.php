<div class="row-fluid">
    <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
            <h5>Number of Work Order Completed</h5>
        </div>
        <div class="widget-content" >
            <div class="row-fluid">
                <div class="span9">
                    <canvas id="myChart"></canvas>
                    <script>
                        var ctx = document.getElementById("myChart");
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                xLabels: ["Mar 15", "Mar 16", "Mar 17", "Mar 18", "Mar 19", "Mar 20"],
                                yLabels: "No of WOs completed",
                                datasets: [{
                                        label: '# of Votes',
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
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 2,
                                        fill: false,
                                        borderCapStyle: 'butt',
                                        borderDash: [],
                                        borderDashOffset: 0.0,
                                        borderJoinStyle: 'miter',
                                        pointBorderColor: "rgba(75,192,192,1)",
                                        pointBackgroundColor: "#fff",
                                        pointBorderWidth: 1,
                                        pointHoverRadius: 5,
                                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                        pointHoverBorderColor: "rgba(220,220,220,1)",
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
                <div class="span3">
                    <ul class="site-stats">
                        <li class="bg_lh"><i class="icon-user"></i> <strong>2</strong> <small>Open</small></li>
                        <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>On Hold</small></li>
                        <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>In Progress</small></li>
                        <li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong> <small>Closed</small></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
                <h5>Number of Work Order Completed</h5>
            </div>
            <div class="widget-content" >
                <div class="row-fluid">
                    <div class="span12">
                        <canvas id="myChart"></canvas>
                        <script>
                            var ctx = document.getElementById("myChart");
                            var myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    xLabels: ["Mar 15", "Mar 16", "Mar 17", "Mar 18", "Mar 19", "Mar 20"],
                                    yLabels: "No of WOs completed",
                                    datasets: [{
                                            label: '# of Votes',
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
                                                'rgba(255,99,132,1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ],
                                            borderWidth: 2,
                                            fill: false,
                                            borderCapStyle: 'butt',
                                            borderDash: [],
                                            borderDashOffset: 0.0,
                                            borderJoinStyle: 'miter',
                                            pointBorderColor: "rgba(75,192,192,1)",
                                            pointBackgroundColor: "#fff",
                                            pointBorderWidth: 1,
                                            pointHoverRadius: 5,
                                            pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                            pointHoverBorderColor: "rgba(220,220,220,1)",
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
                    <div class="span3">
                        <ul class="site-stats">
                            <li class="bg_lh"><i class="icon-user"></i> <strong>2</strong> <small>Open</small></li>
                            <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>On Hold</small></li>
                            <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>In Progress</small></li>
                            <li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong> <small>Closed</small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>