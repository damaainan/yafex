<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>作者列表</title>
    <link rel="stylesheet" type="text/css" href="<{#APPLICATION_PATH#}>/public/bootstrap/css/bootstrap.min.css">
    <script src="<{#APPLICATION_PATH#}>/public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<ul class="list-group">
    <{foreach from=$rst item=value}>
        <li class="list-group-item"><a href="http://<{$smarty.server.SERVER_NAME}>/index.php/weibo/weibolist?name=<{$value.author}>"> <{$value.author}></a></li>
    <{/foreach}>
    </ul>
    </div>
</body>
</html>
