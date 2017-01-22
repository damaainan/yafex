<{extends file="file:include/base.tpl"}>
<!-- 引入其他文件夹文件方式 -->
<{block name="title"}>测试页<{/block}>
<{block name="content"}>
	<!-- <{$book}> -->
	<{foreach from=$rst item=value}>
        <li class="list-group-item"> ****<{$value.name}></li>
    <{/foreach}>
    <{foreach from=$smarty.server item=value key=key}>
<{$key}> * * <{$value}><br/>
     <{/foreach}>
     
	
<{/block}>


