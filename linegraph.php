<!DOCTYPE html>
<html>
  <head>
    <title>ChartJS - LineGraph</title>
    <style>
      .chart-container {
        width: 640px;
        height: auto;
      }
    </style>
  </head>
  <body>
    <div class="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>
    
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/linegraph.js"></script>

    <script>
    $(document).ready(function(){
      $.ajax({
        include : "followersdata.php",
        type : "GET",
        success : function(data){
          console.log(data);
    
          var postedtime = [];
          var facebook_follower = [];

    
          for(var i in data) {
            postedtime.push("Posted Date " + data[i].postedtime);
            facebook_follower.push(data[i].donor_ID);
          }
    
          var chartdata = {
            labels: postedtime,
            datasets: [
              {
                label: "donor_ID",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(59, 89, 152, 0.75)",
                borderColor: "rgba(59, 89, 152, 1)",
                pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
                pointHoverBorderColor: "rgba(59, 89, 152, 1)",
                data: facebook_follower
              },
            ]
          };
    
          var ctx = $("#mycanvas");
    
          var LineGraph = new Chart(ctx, {
            type: 'line',
            data: chartdata
          });
        },
        error : function(data) {
    
        }
      });
    });

</script>
  </body>
</html>