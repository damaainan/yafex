<?php 
use App\Models\Weibo;
class WeiboController extends \Yaf\Controller_Abstract {

    public function weibolistAction(){
        $name=$this->getRequest()->get("name");
        // if(!$name)
        //     $name="*";
        /*
        $model=new WeiboModel();
        $rst=$model->base($name);
        */
       if(!$name){
        $rst=Weibo::select('rContent')->distinct()->get()->toArray();
       }else{
        // echo $name;
         $rst=Weibo::where("rAuthor",'=',$name)->select('rContent')->distinct()->get()->toArray();
       }

        $this->getView()->assign("rst", $rst);
        $this->display('weibolist');
        // $this->getView()->display('index/weibolist.phtml');
        // return TRUE;
    }

    public function weibotagsAction(){
        /*$model=new WeiboModel();// medoo版本
        $rst=$model->allTags();*/

        $rst=Weibo::select('rAuthor as author')->distinct()->get()->toArray();


         // var_dump($rst);
         // echo 222;
        $this->getView()->assign("rst", $rst);
        $this->display('weibotags');//输出模板的方式
    }

}