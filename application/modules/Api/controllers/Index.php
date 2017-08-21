<?php


class IndexController extends \Yaf\Controller_Abstract
{

     // /** 
     // * @SWG\Get(
     // *     path="/Api/Index/test",
     // *     description="方法描述",
     // *     operationId="test",
     // *     produces={"application/json", "application/xml", "text/xml", "text/html"},
     // *     @SWG\Parameter(
     // *         name="参数1",
     // *         in="query",
     // *         description="参数1描述",
     // *         required=false,
     // *         type="array",
     // *         @SWG\Items(type="string"),
     // *         collectionFormat="csv"
     // *     ),
     // *     @SWG\Parameter(
     // *         name="参数2",
     // *         in="query",
     // *         description="参数2描述",
     // *         required=false,
     // *         type="integer",
     // *         format="int32"
     // *     ),
     // *     @SWG\Response(
     // *         response=200,
     // *         description="响应",
     // *         @SWG\Schema(
     // *             type="array",
     // *             @SWG\Items(ref="#/definitions/Pet")  //这里有 差异    @SWG\Schema(type="object",ref="#/definitions/Pet"), 即可
     // *                                                  // 没有 @SWG\Items
     // *         ),
     // *     ),
     // *     @SWG\Response(
     // *         response="default",
     // *         description="unexpected error",
     // *         @SWG\Schema(
     // *             ref="#/definitions/ErrorModel"
     // *         )
     // *     )
     // * )
     // */
   
    
    /**
     * @SWG\Get(
     *     path="/Api/Index/test",
     *     description="方法描述",
     *     operationId="test",
     *     @SWG\Parameter(
     *         description="参数1描述",
     *         format="int64",
     *         in="path",
     *         name="参数1",
     *         required=true,
     *         type="integer"
     *     ),
     *     produces={
     *         "application/json",
     *         "application/xml",
     *         "text/html",
     *         "text/xml"
     *     },
     *     @SWG\Response(
     *         response=200,
     *         description="pet response",
     *         @SWG\Schema(ref="#/definitions/Pet")
     *     ),
     *     @SWG\Response(
     *         response="default",
     *         description="unexpected error",
     *         @SWG\Schema(ref="#/definitions/ErrorModel")
     *     )
     * )
     */
    public function testAction()
    {
        // echo "API test";
        $request = new \Yaf\Request\Simple();
        var_dump($request);
    }
}