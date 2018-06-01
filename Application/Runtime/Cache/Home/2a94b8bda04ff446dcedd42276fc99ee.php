<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>测试</title>
    <style type="text/css">
        div{
            margin-top:30px;
        }
    </style>
</head>
<body>
<div align="center">
    <p align="center">测试get</p>
    <a href="/thinkphp_3.2.3_restful/users/?&method_type=get">get提交json</a>
    <a href="/thinkphp_3.2.3_restful/users/1,2111,3,4,5,,,?&method_type=delete">delete提交json</a>
</div>
<div align="center">
    <p align="center">测试post</p>
    <form method="post" name="" action="/thinkphp_3.2.3_restful/users/1">
        <input id="uname" name="username" value="afonso">
        <input id="pwd" name="password" value="123456">
        <input id="method_type" name="method_type" value="put">
        <input type="submit" value="put提交json"/>
    </form>
    <form method="post" name="" action="/thinkphp_3.2.3_restful/users/1">
        <input id="username" name="username" value="afonso">
        <input id="password" name="password" value="123456">
        <input id="method_type2" name="method_type" value="post">
        <input type="submit" value="post提交json"/>
    </form>
</div>
</body>
</html>