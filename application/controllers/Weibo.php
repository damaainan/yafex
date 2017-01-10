<?php 
class WeiboController extends Yaf_Controller_Abstract {

    public function weibolistAction(){
        $name=$this->getRequest()->get("name");
        $model=new WeiboModel();
        if(!$name)
            $name="*";
        $rst=$model->base($name);
        $this->getView()->assign("rst", $rst);
        // $this->getView()->display('index/weibolist.phtml');
        // return TRUE;
    }

    public function weibotagsAction(){
        $model=new WeiboModel();
        $rst=$model->allTags();
        $this->getView()->assign("rst", $rst);
    }

}