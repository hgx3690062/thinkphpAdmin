<?php


namespace app\admin\model;


class User extends BaseModel
{
    protected $table = 'user_account';

    /**
     * 所有账号查询
     * @param $param
     * @param string $field
     * @return \think\Paginator
     * @throws \think\exception\DbException
     */
    public function user_account_select($param,$field='*'){
        $where = [];
        if(isset($param['account_name'])  && $param['account_name'] ){
            $where[] = ['account_name','like', '%' . $param['account_name'] . '%'];
        }
        $result = $this->where($where)->field($field)->order('id desc')->paginate($param['limit'], false, [
            'page' => array_key_exists("page", $param) ? $param['page'] : 1,
        ])->each(function($item, $key){
            $item->create_time = date('Y-m-d H:i:s',$item->create_time);
            switch ($item->status){
                case 0:
                    $item->status = '正常';
                    break;
                case 1:
                    $item->status = '禁用';
                    break;
                case 2:
                    $item->status = '已到期';
                    break;
            }
            return $item;
        });
        return $result->toArray();
    }

}