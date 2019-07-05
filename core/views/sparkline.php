<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gustavo
 * Date: 1/16/2019
 * Time: 6:07 PM
 */

$results = [];
$dp = [];

$results[] = [
    'name' => 'result1.json',
    'sparkline' => $this->array->e1
];

$results[] = [
    'name' => 'result2.json',
    'sparkline' => $this->array->e2
];

$dp[] = [
    'name' => 'result1.json',
    'sparkline' => $this->array->d1
];

$dp[] = [
    'name' => 'result2.json',
    'sparkline' => $this->array->d2
];

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
            background-color: lightgray;
        }
    </style>
</head>

<body>
<div class="content">
    <h1>Equity</h1>
    <?php foreach ($results as $result) { ?>
        <p>
            <center><?= $result['name'] ?>: <span class="inlinesparkline"><?= join(',', $result['sparkline']) ?></span></center>
        </p>
    <?php } ?>
</div>
<div class="content">
    <h1>Daily Performance</h1>
    <?php foreach ($dp as $result) { ?>
        <p>
        <center><?= $result['name'] ?>: <span class="inlinesparkline"><?= join(',', $result['sparkline']) ?></span></center>
        </p>
    <?php } ?>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="js/sparkline.js"></script>
<script type="text/javascript">
    $(function () {
        $('.inlinesparkline').sparkline();
    });
</script>

</body>
</html>