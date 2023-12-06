<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3>Quarterly Employed</h3>
                </div>
                <div class="card-block">
                    <div id="performance1" style="height: 270px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3>Quarterly Employed</h3>
                </div>
                <div class="card-block">
                    <p>
                    The this report is in par with the initial employed. No deviations were detected.                         
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3>Quarterly Employed</h3>
                </div>
                <div class="card-block">
                    <div id="performance2" style="height: 270px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3>Visits Stats</h3>
                </div>
                <div class="card-block">
                    <p>
                    The this report is in par with the initial employed. No deviations were detected. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3>Quarterly Employed</h3>
                </div>
                <div class="card-block">
                    <div id="performance3" style="height: 270px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3>Budget Stats</h3>
                </div>
                <div class="card-block">
                    <p>
                        The this report is in par with the initial employed. No deviations were detected. 
                        
                    </p>
                </div>
            </div>
        </div>
    </div>  
</div>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        var performance = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67],
            visits = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7],
            budget = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];

        $("#performance1").shieldChart({
            primaryHeader: {
                text: "Quarterly Performance"
            },
            dataSeries: [{
                seriesType: "area",
                collectionAlias: "Q Data",
                data: performance
            }]
        });

        $("#performance2").shieldChart({
            primaryHeader: {
                text: "Visitors"
            },
            dataSeries: [{
                seriesType: "bar",
                collectionAlias: "Visits",
                data: visits
            }]
        });

        $("#performance3").shieldChart({
            primaryHeader: {
                text: "Budget"
            },
            dataSeries: [{
                seriesType: "line",
                collectionAlias: "Budget",
                data: budget
            }]
        });
    });
</script>