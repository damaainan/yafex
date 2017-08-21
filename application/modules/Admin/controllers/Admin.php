<?php
class AdminController extends \Yaf\Controller_Abstract
{
    /**
     * 实现多模块时视图的正确跳转
     * @doc
     * @DateTime 2017-01-22T18:02:08+0800
     */
    public function indexAction() // 地址  yafex/index.php/Admin/Admin/index
    {
        echo "fdfd";
        var_dump($this->getView()->getScriptPath()); //获取当前模板路径

        $this->getView()->setScriptPath(APPLICATION_PATH . "/application/modules/Admin/views");
        var_dump($this->getView()->getScriptPath()); //获取当前模板路径
        $this->getView()->assign("name", "后台首页");
        $this->display('index');
        // return TRUE;
    }


    /**
     * @SWG\Get(
     *     path="/Admin/Admin/testlibrary",
     *     description="测试类库的加载",
     *     operationId="testlibrary",
     *     produces={"application/json", "application/xml", "text/xml", "text/html"},
     *     @SWG\Parameter(
     *         name="tags",
     *         in="query",
     *         description="tags to filter by",
     *         required=false,
     *         type="array",
     *         @SWG\Items(type="string"),
     *         collectionFormat="csv"
     *     ),
     *     @SWG\Parameter(
     *         name="limit",
     *         in="query",
     *         description="maximum number of results to return",
     *         required=false,
     *         type="integer",
     *         format="int32"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="pet response",
     *         @SWG\Schema(type="object",ref="#/definitions/Pet"),
     *     ),
     *     @SWG\Response(
     *         response="default",
     *         description="unexpected error",
     *         @SWG\Schema(
     *             ref="#/definitions/ErrorModel"
     *         )
     *     )
     * )
     */
    public function testlibraryAction()
    {
        // echo "fdfd";
        \Yaf\Loader::import("Tool/Http.php");
        echo Tool_Http::getName();
    }

}
