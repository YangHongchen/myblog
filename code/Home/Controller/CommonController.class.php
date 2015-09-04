<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 基础工具类，其他控制器都继承自该类
 */
class CommonController extends Controller {
	/**
	 * 构造函数
	 */
    public function __construct() {
    	$this->checkLogin();
    }

    /**
     * 检查登录状态
     * @return [type] [description]
     */
    public function checkLogin() {
    	echo "<p style='color:#f60;'>检查登录状态！</p>";
    	echo "<pre>";
    	print_r($_SESSION);
    	
    }

    /**
     * 权限验证
     * @return [type] [description]
     */
    public function checkRight() {
    	echo "检查权限！";
    }
    
    /**
     * 更具权限设置菜单展示情况
     */
    public function setMenu() {
    	echo "设置菜单!";
    }
}