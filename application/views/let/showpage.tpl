<{extends file="file:include/base.tpl"}>
<!-- 引入其他文件夹文件方式 -->
<{block name="title"}>Let 测试页<{/block}>
<{block name="script"}>
    <script src="../../public/bootstrap-table/bootstrap-table.js"></script>
    <script src="../../public/bootstrap-table/locale/bootstrap-table-zh-CN.js"></script>
    <link rel="stylesheet" type="text/css" href="../../public/bootstrap-table/bootstrap-table.css">
<{/block}>
<{block name="content"}>
<table id="table"></table>
<script type="text/javascript">
    $('#table').bootstrapTable({
    columns: [{
        field: 'id',
        title: 'Item ID'
    }, {
        field: 'name',
        title: 'Item Name'
    }, {
        field: 'price',
        title: 'Item Price'
    }],
    data: [{
        id: 1,
        name: 'Item 1',
        price: '$1'
    }, {
        id: 2,
        name: 'Item 2',
        price: '$2'
    }]
});
</script>
<{/block}>  