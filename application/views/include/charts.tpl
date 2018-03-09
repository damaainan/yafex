<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><{block name="title"}>title<{/block}></title>
    <script src="../../public/jquery-3.1.0.min.js"></script>
    <script src="../../public/Highcharts/code/highcharts.js"></script>
    <{block name="script"}>
    <{/block}>
</head>
<body>
<!-- 暂时未用到 -->
<!-- 图表容器 DOM -->
    <div id="charts_container" style="width: 600px;height:400px;"></div>
    <{block name="content"}>
    <{/block}>  
</body>
</html>