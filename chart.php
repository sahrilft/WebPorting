<html lang="en">
   <head> 
      <title>Chart.js - Dynamically Update Chart Via Ajax Requests</title> 
   </head> 
   <body translate="no"> 
      <div style="width:50%;"> 
         <canvas id="mycanvas"></canvas> 
      </div> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script>
        function getFeed() {
          $.ajax({
              url: 'data.php',
              type: 'POST',
              success: function(data) {
                  console.log(data);
              }
          });
      }

      $(document).ready(function() {
          setInterval(getFeed, 5000);
      });
      </script>  
   </body>
</html>