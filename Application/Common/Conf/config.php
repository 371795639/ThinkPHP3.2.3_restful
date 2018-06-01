<?php
return array(
	//'配置项'=>'配置值'
    'URL_ROUTER_ON'   => true,
    'URL_ROUTE_RULES'=>array(

        // 携带id参数
        array('users/:id','users/get_delete','',array('ext'=>'','method'=>'get')),//获取|删除指定用户
        array('users/:id','users/add_update','',array('ext'=>'','method'=>'post')),//新增|更新指定用户

        // 不携带id参数
        array('users','users/get_delete','',array('ext'=>'','method'=>'get')),//列举所有用户
        array('users','users/add_update','',array('ext'=>'','method'=>'post')),//新增一个用户

    ),
);