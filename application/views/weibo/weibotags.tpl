<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>作者列表</title>
</head>
<body>
    <{foreach from=$rst item=value}>
        <a href="http://<{$smarty.server.SERVER_NAME}>/index.php/weibo/weibolist?name=<{$value.author}>"> <{$value.author}></a><br>
    <{/foreach}>
</body>
</html>
