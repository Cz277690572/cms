<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {
	
	public function __construct() {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct();
    }

    /**
     * 获取排行数据
     */
    public function getRank() {
    	$conds['status'] = 1;
    	$news = D('Admin/News')->getRank($conds,5);
    	return $news;
    }

    public function error($message = '') {
        $message = $message ? $message : '系统发生错误';
        $this->assign('message', $message);
        $this->display('Index/error');

    }
}