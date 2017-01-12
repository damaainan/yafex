<{extends file="file:include/base.tpl"}>
<!-- 引入其他文件夹文件方式 -->
<{block name="title"}>作者列表<{/block}>
<{block name="content"}>
 <ul class="list-group">
	    <{foreach from=$rst item=value}>
	        <li class="list-group-item"><a href="http://<{$smarty.server.HTTP_HOST}><{$smarty.server.SCRIPT_NAME}>/weibo/weibolist?name=<{$value.author}>"> <{$value.author}></a></li>
	    <{/foreach}>
</ul>
<{/block}>  