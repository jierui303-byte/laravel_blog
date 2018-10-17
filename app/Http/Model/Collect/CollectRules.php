<?php

namespace App\Http\Model\Collect;

use Illuminate\Database\Eloquent\Model;
use DB;


class CollectRules extends Model
{
    protected $table = 'collect_rules';
    protected $primaryKey = 'collect_id';
    public $timestamps = false;
    protected $guarded = [];


    public function tree()
    {
        $data = $this->get();
        return $data;
    }

    //获取所有的采集任务列表
    public function getAllRules()
    {
        //获取所有的顶级分类ID及其分类名称 只获取开启的 1为开启 0为关闭
        $data = (new CollectRules())->where('collect_is_open', '1')->get();
        return $data;
    }


    //laravel使用原生sql查询语句 pdo
    public function yuanShengSql()
    {
        //laravel使用原生sql查询语句 pdo
        $seos = DB::select('select * from blog_article where art_id = :id', [':id'=>1]);

        //插入数据
        DB::insert('insert into users (id, name, email, password) values (?, ?, ? , ? )',
            [1, 'Laravel','laravel@test.com','123']);

        //更新
        $affected = DB::update('update users set name="LaravelAcademy" where name = ?', ['Academy']);
        echo $affected;

        //删除
        $deleted = DB::delete('delete from users');
        echo $deleted;

        //通用语句
        DB::statement('drop table users');

        //监听查询事件
        DB::listen(function($sql, $bindings, $time) {
            echo 'SQL语句执行：'.$sql.'，参数：'.json_encode($bindings).',耗时：'.$time.'ms';
        });

        //数据库事务  http://blog.csdn.net/fationyyk/article/details/50856730
        DB::transaction(function () {
            DB::table('users')->update(['id' => 1]);
            DB::table('posts')->delete();
        });

        return $seos;
    }


}
