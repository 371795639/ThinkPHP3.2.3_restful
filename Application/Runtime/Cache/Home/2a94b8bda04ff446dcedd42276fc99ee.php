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
    <a href="/thinkphp_3.2.3_restful/user/1.json">get提交json</a>
    <a href="/thinkphp_3.2.3_restful/user/1.xml">get提交xml</a>
</div>
<div align="center">
    <p align="center">测试post</p>
    <form method="post" name="" action="/thinkphp_3.2.3_restful/user/1.json">
        <input id="uname" name="username" value="afonso">
        <input id="pwd" name="password" value="123456">
        <input type="submit" value="post提交json"/>
    </form>
    <form method="post" name="" action="/thinkphp_3.2.3_restful/user/1.xml">
        <input type="submit" value="post提交xml"/>
    </form>
</div>
</body>
</html>