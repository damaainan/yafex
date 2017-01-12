<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<{$book}>
	<{foreach from=$rst item=value}>
        <li class="list-group-item"> ****<{$value.name}></li>
    <{/foreach}>
    <{foreach from=$smarty.server item=value key=key}>
<{$key}> * * <{$value}><br/>
     <{/foreach}>
     
	
</body>
</html>


