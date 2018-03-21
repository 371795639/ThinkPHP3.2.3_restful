<?php
namespace Home\Controller;
use Think\Controller\RestController;
class UserController extends RestController {

    /**
     * 读取用户信息
     */
    Public function read_get_json(){
        echo "read_get_json";
    }
    Public function read_get_xml(){
        echo "read_get_xml";
    }
    //官方文档中未直接说明的地方：如果去掉上面的read_get_xml()，访问locahost/user/1.xml时，系统将自动访问以下read_xml()方法。
    Public function read_xml(){
        echo "read_xml";
    }
    Public function read_post_json(){
        echo "read_post_json";
    }
    Public function read_post_xml(){
        echo "read_post_xml";
    }
    /**
     * 登录认证
    @param username 用户名
    @param password 密码
    @return 成功：{"code":200,"msg":"登录成功"}
    @return 失败：{"code":401,"msg":"用户名或密码错误！"}
     */
    Public function login(){
        switch ($this->_method){
            case 'get':
                break;
            case 'put':
                break;
            case 'post':
                $data['uname'] =I('post.username');
                $data['pwd']   =I('post.password');
                $result=M('user')->where($data)->find();
                if(false == $result) {
                    $value['code']    =401;
                    $value['msg'] ='用户名或密码错误！';
                    $this->response($value,'json');
                }else {
                    if($result['pwd'] != I('post.password')) {
                        $value['code']    =401;
                        $value['msg'] ='用户名或密码错误！';
                        $this->response($value,'json');
                    }
                    $value['code']=200;
                    $value['msg']="登录成功！";
                }
                $this->response($value,'json');
                break;
        }
    }
    /**
     * 新用户注册
    @param username 用户名
    @param password 密码
    @return 成功：{"code":200,"msg","注册成功！"}
    @return 失败1：{"code":403,"msg","用户名已被抢注,请换一个试试！"}
    @return 失败2：{"code":500,"msg","注册似乎遇到问题！"}
     */
    Public function reg(){
        switch ($this->_method){
            case 'get':
                break;
            case 'put':
                break;
            case 'post':
                $userModel = M('user');
                $data['uname'] =I('post.username');
                //是否被抢注
                $FinduserModel = $userModel->getFieldByuname($data['uname'],"id");
                if($FinduserModel){
                    $value['code']=403;
                    $value['msg']="用户名已被抢注,请换一个试试！";
                    $this->response($value,'json');
                }
                $data['pwd']   =I('post.password');
                $data['ctime'] =time();
                $data['ltime'] =time();
                $result=$userModel->add($data);
                if($result){
                    $value['code'] =200;
                    $value['msg']  ="注册成功!";
                }else{
                    $value['code'] =500;
                    $value['msg']  ="注册遇到问题！";
                }
                $this->response($value,'json');
                break;
        }
    }

}