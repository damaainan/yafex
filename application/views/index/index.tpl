<{extends file="file:include/base.tpl"}>
<!-- 引入其他文件夹文件方式 -->
<{block name="title"}>首页<{/block}>
<{block name="content"}>

<{$content}>, " I am ", <{$name}>;
<br/>
<a href="http://www.yaf1.com/index.php/weibo/weibotags">微博作者列表</a>
<br/>
<a href="http://www.yaf1.com/index.php/Index/getinfosbybook?book=一刻文集">测试页</a>

<{/block}>