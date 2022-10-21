<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>jQuery Ajax Example</title>

    <link href="../../assets/styles.css" rel="stylesheet" />

    <style>
      
        #chart {
      max-width: 650px;
      margin: 35px auto;
    }
      
    </style>


    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    

    <script>
      // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
      // Based on https://gist.github.com/blixt/f17b47c62508be59987b
      var _seed = 42;
      Math.random = function() {
        _seed = _seed * 16807 % 2147483647;
        return (_seed - 1) / 2147483646;
      };
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>

  <body>
     <div id="chart"></div>

    <script>
      
        var options = {
          series: [],
          chart: {
          height: 350,
          type: 'bar',
        },
        dataLabels: {
          enabled: false
        },
        title: {
          text: 'Ajax Example',
        },
        noData: {
          text: 'Loading...'
        },
        xaxis: {
          type: 'category',
          tickPlacement: 'on',
          range: 2,
          labels: {
            rotate: -45,
            rotateAlways: true
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();


      function getFeed() {
          $.ajax({
              url: 'data.php',
              type: 'GET',
              success: function(respone) {
                  chart.updateSeries([{
                  name: 'Sales',
                  data: JSON.parse(response[1]) 
                }])
                  console.log(respone)
              }
          });
      }

      $(document).ready(function() {
          setInterval(getFeed, 1000);
      });
      
    </script>

    
  </body>
</html>