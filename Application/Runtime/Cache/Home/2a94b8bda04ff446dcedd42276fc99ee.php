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
    <a href="/thinkphp_3.2.3_restful/user/1&method_type=get.json">get提交json</a>
    <a href="/thinkphp_3.2.3_restful/user/1&method_type=delete.json">delete提交json</a>
</div>
<div align="center">
    <p align="center">测试post</p>
    <form method="post" name="" action="/thinkphp_3.2.3_restful/user/1.json">
        <input id="uname" name="username" value="afonso">
        <input id="pwd" name="password" value="123456">
        <input id="method_type" name="method_type" value="put">
        <input type="submit" value="put提交json"/>
    </form>
    <form method="post" name="" action="/thinkphp_3.2.3_restful/user/1.json">
        <input id="username" name="username" value="afonso">
        <input id="password" name="password" value="123456">
        <input id="method_type2" name="method_type" value="post">
        <input type="submit" value="post提交json"/>
    </form>
</div>
</body>
</html>