<?php 
  $equity1 = implode(',',$this->array->e1);
  $equity2 = implode(',',$this->array->e2);
  $daily = implode(',',$this->array->d1);
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>PHP Test</title>
    <meta name="description" content="This is a PHP tets">
    <meta name="author" content="QuantConnect">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <style type="text/css">
        .content {
            width: 500px;
            overflow: hidden;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            padding: 50px 25px 150px 25px;
        }

        .content h1 {
            padding: 50px 0;
            text-align: center;
        }

        body {
            background-color: white;
        }
    </style>
</head>

<body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<center>
<h1>Equity</h1>
    <div id="Equity1"></div>
    <div id="Equity2"></div>
<h1>Daily Performance</h1>
    <div id="Daily"></div>
</center>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script>
    google.charts.load('current', {packages: ['corechart', 'line']});
    google.charts.setOnLoadCallback(Equity1);
    google.charts.setOnLoadCallback(Equity2);
    google.charts.setOnLoadCallback(Daily);

function Equity1() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Results1.json');

      data.addRows([
        <?php echo $equity1; ?>
      ]);

      var options = {
        hAxis: {
          title: 'x'
        },
        vAxis: {
          title: 'y'
        },
        series: {
          1: {curveType: 'function'}
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('Equity1'));
      chart.draw(data, options);
    }

function Equity2() {
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'X');
  data.addColumn('number', 'Results2.json');

  data.addRows([
    <?php echo $equity2; ?>
  ]);

  var options = {
    hAxis: {
      title: 'x'
    },
    vAxis: {
      title: 'y'
    },
    series: {
      1: {curveType: 'function'}
    }
  };

  var chart = new google.visualization.LineChart(document.getElementById('Equity2'));
  chart.draw(data, options);
}

function Daily() {
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'X');
  data.addColumn('number', 'Results1.json');
  data.addColumn('number', 'Results2.json');

  data.addRows([
      <?php echo $daily;?>
    ]);

  var options = {
    hAxis: {
      title: 'x'
    },
    vAxis: {
      title: 'y'
    },
    series: {
      1: {curveType: 'function'}
    }
  };

  var chart = new google.visualization.LineChart(document.getElementById('Daily'));
  chart.draw(data, options);
}
</script>

</body>
</html>