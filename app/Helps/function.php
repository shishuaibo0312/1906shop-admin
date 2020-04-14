<?php

//测试
function aaa(){
    echo "111";
}

//递归   admin的公共文件
function list_level($res,$parent_id=0,$level=0){

    static $array = array();

    foreach ($res as $k => $v) {

        if($parent_id == $v->parent_id){

            $v->level = $level;

            $array[] = $v;

            list_level($res,$v->tid,$level+1);
        }
    }
    return $array;
}

//顶级分类下的商品
function getres4($res4,$parent_id){
    static $tid=[];
    $tid[$parent_id]=$parent_id;
    foreach($res4 as $k=>$v){
        if($v['parent_id']==$parent_id){
            $tid[$v['tid']]=$v['tid'];
            getres4($res4,$v['tid']);
        }
    }
    return $tid;

}





?>