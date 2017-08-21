<{extends file="file:include/base.tpl"}>
<!-- 引入其他文件夹文件方式 -->
<{block name="title"}>首页<{/block}>
<{block name="content"}>

" I am ", <{$name}>;
<br/>
<a href="http://<{$smarty['server']['HTTP_HOST']}><{$smarty['server']['REQUEST_URI']}>/weibo/weibotags">微博作者列表</a>
<br/>
<a href="http://<{$smarty['server']['HTTP_HOST']}><{$smarty['server']['REQUEST_URI']}>/lottery/index">lottery</a>
<br/>
<a href="http://<{$smarty['server']['HTTP_HOST']}><{$smarty['server']['REQUEST_URI']}>/Index/getinfosbybook?book=一刻文集">测试页</a>

<!-- <{$smarty['server']['HTTP_HOST']}> -->
<hr/>
 <{foreach from=$smarty.server item=value key=key}>
<{$key}> * * <{$value}><br/>
     <{/foreach}>

<{/block}>