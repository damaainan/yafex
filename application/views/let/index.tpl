<{extends file="file:include/base.tpl"}>
<!-- 引入其他文件夹文件方式 -->
<{block name="title"}>Let 测试页<{/block}>
<{block name="content"}>
  <ul class="list-group">
  <!-- <{$rst['qihao']}> -->
  <{foreach key=key item=item from=$rst}>
  <li class="list-group-item"><{$key}>: <{$item}></li>
 <{/foreach}>
 </ul>
<{/block}>  