<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Export</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        label {
            display: block;
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <label for="dateRange">Select Date Range:</label>
    <input type="text" id="dateRange" readonly>
    
    <label>Quick Date Range:</label>
    <input type="radio" name="quickRange" value="today"> Today
    <input type="radio" name="quickRange" value="yesterday"> Yesterday
    <input type="radio" name="quickRange" value="last7days"> Last 7 Days
    <input type="radio" name="quickRange" value="last14days"> Last 14 Days
    <input type="radio" name="quickRange" value="last28days"> Last 28 Days
    <input type="radio" name="quickRange" value="thismonth"> This Month
    <input type="radio" name="quickRange" value="thisquarter"> This Quarter
    <input type="radio" name="quickRange" value="custom"> Custom

    <button id="exportButton">Export Data</button>

    <script>
        $(function() {
            $("#dateRange").datepicker();

            $("input[name='quickRange']").change(function() {
                var today = new Date();
                var endDate = today;
                var startDate;

                switch ($(this).val()) {
                    case 'today':
                        startDate = today;
                        break;
                    case 'yesterday':
                        startDate = new Date(today);
                        startDate.setDate(today.getDate() - 1);
                        break;
                    case 'last7days':
                        startDate = new Date(today);
                        startDate.setDate(today.getDate() - 6);
                        break;
                    case 'last14days':
                        startDate = new Date(today);
                        startDate.setDate(today.getDate() - 13);
                        break;
                    case 'last28days':
                        startDate = new Date(today);
                        startDate.setDate(today.getDate() - 27);
                        break;
                    case 'thismonth':
                        startDate = new Date(today.getFullYear(), today.getMonth(), 1);
                        break;
                    case 'thisquarter':
                        startDate = new Date(today.getFullYear(), Math.floor(today.getMonth() / 3) * 3, 1);
                        break;
                    case 'custom':
                        // You can implement custom date range logic here
                        break;
                }

                $("#dateRange").datepicker("setDate", startDate);
            });

            $("#exportButton").click(function() {
                var startDate = $("#dateRange").datepicker("getDate");
                var endDate = new Date(startDate);
                endDate.setDate(startDate.getDate() + 1); // Assuming export for a single day

                // Call your backend export API here, passing startDate and endDate
                // Example using AJAX:
                // $.ajax({
                //     url: 'export.php',
                //     type: 'POST',
                //     data: { startDate: startDate.toISOString(), endDate: endDate.toISOString() },
                //     success: function(response) {
                //         // Handle the response
                //     }
                // });
            });
        });
    </script>
</body>
</html>
