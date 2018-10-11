<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/11
 * Time: 17:04
 */

namespace app\admin\controller;

use think\Collection;
use Util\data\Sysdb;

class Test extends Collection
{
    public function index()
    {
        $this->db = new Sysdb();
        $res = $this->db->table('admin')->field('id,username')->where(array('id' => 1))->item();
        print_r($res);
    }
}