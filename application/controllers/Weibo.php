<?php 
class WeiboController extends \Yaf\Controller_Abstract {

    public function weibolistAction(){
        $name=$this->getRequest()->get("name");
        $model=new WeiboModel();
        if(!$name)
            $name="*";
        $rst=$model->base($name);
        $this->getView()->assign("rst", $rst);
        $this->display('weibolist');
        // $this->getView()->display('index/weibolist.phtml');
        // return TRUE;
    }

    public function weibotagsAction(){
        $model=new WeiboModel();
        $rst=$model->allTags();

        // var_dump($rst);
        // echo 222;
        $this->getView()->assign("rst", $rst);
        $this->display('weibotags');//输出模板的方式
    }

}