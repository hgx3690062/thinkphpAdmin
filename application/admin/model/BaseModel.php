<?php


namespace app\admin\model;

use app\common\exception\ErrorException;
use think\model\concern\SoftDelete;
use think\Model;

class BaseModel extends Model
{
    use SoftDelete;
    protected $deleteTime = 'delete_time';
    /**
     * 查询一条信息
     * @param $where
     * @param string $field
     * @return array|\PDOStatement|string|Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function whereFind($where,$field='*'){
        try {
           $result =  $this->where($where)->field($field)->find();
        }catch (\Exception $e){
          throw new ErrorException(API_ERROR,$e->getMessage());
        }
        return $result;
    }
}