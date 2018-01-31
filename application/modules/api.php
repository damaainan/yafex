<?php

/**
 * @SWG\Swagger(
 *     basePath="/index.php",
 *     host="www.yaftest.com",
 *     schemes={"http"},
 *     produces={"application/json"},
 *     consumes={"application/json"},
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="第一种测试-多模块",
 *         description="Api 文档 ",
 *         termsOfService="http://swagger.io/terms/",
 *         @SWG\Contact(name="yafex"),
 *         @SWG\License(name="MIT")
 *     ),
 *     @SWG\Definition(
 *         definition="ErrorModel",
 *         type="object",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */