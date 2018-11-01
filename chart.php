<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sabeetha Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
  <script src="https://www.amcharts.com/lib/3/serial.js"></script>
  <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
  <script src="https://www.amcharts.com/lib/3/pie.js"></script>   
</head>
<style>
.header
{
  width:100%;
  height:500px !important;
}
#chartdiv1
{
  width: 100%;
  height: 100%;
  border: 10px solid #2A4863;
  border-radius: 20px;
  /*background: transparent;*/
}
body
{
  background: url(background.jpg);
}
input[type=button]
{
  padding: 5px;
  text-align: center;
  color: white;
  background-color:#2A4863;
  margin-top: 47px;
  margin-left: 201px; 
}
</style>
<body>
<div class="header">
<h1 style="text-align: center;background-color:#2A4863;height: 117px;padding: 35px;color: white;">CHART REPRESENTATION OF CUSTOMERS</h1>
<input type="button" onclick="goBack()" name="goback" value="Go Back"></button>
<script>
function goBack()
{
  window.history.back();
}
</script>
</div>
<div class="col-lg-6 col-xs-12 col-sm-12" style="margin-top: -339px;background: transparent;margin-left: 358px;">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-bar-chart font-dark hide"></i>
                      <span class="caption-subject font-dark bold uppercase"></span>   
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <div id="chartdiv1" class="display-none" style="display: block;">                   
                    </div>
                  </div>
                </div>                  
</div>
<script type="text/javascript">
 $(document).ready(function(){
  $.ajax({
     dataType: "json",
     url: "chartdatafrombackend.php",
     method: "GET",
     success: datadiagram
    });
});
    
function datadiagram(data){
     console.log(data);
  var chartData=[];
for(i=0;i<data.length;i++)
     {
    chartData.push({"firstname":data[i].firstname,"y":parseInt(data[i].y)});
      } 
 Highcharts.chart('chartdiv1', {

  //  colors: ['#ADD8E6', '#E6ACD7', '#B2B2B2', '#D0D050', 'green', 'skyblue',
  //   '#FF9655', '#FFF263', '#6AF9C4'
  // ],     
 chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        backgroundColor: 'transparent',
        type: 'pie'   
    },
  credits:
  {
    enabled: false
  },

title: {
        text: '<b><span style="text-transform:capitalize;text-align:center;color:#2A4863;">Data in the form of highchart:</span></b>'
    },
  
 tooltip: {
        enabled: false,
        split: false,
        pointFormat:'{point.firstname}:<b>{point.percentage:.1f}%</b>'
    },
plotOptions: {
        pie: {
            size:200,
            allowPointSelect: false,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b><span style="text-transform:capitalize;">{point.firstname}</span></b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name:'firstname',
        colorByPoint: true,
        data:chartData
    }]
});
}  
</script>
</body>
</html>




