<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DZSW后台管理平台</title>
</head>
 <script type="text/javascript">
       var APP = "__APP__";
	   var IMG = "__IMG__";
	   var GAME_PHOTO = "__GAME_PHOTO__";
    </script>
<script type="text/javascript" src="__JS__/jquery.js"></script>
<script type="text/javascript" src="__JS__/login_admin.js"></script>

<link rel="stylesheet" type="text/css" href="__CSS__/login.css"/>
<body>
 <div class="main">
     <div id="logo">DZSW</div>
     <div class="modal hide fade" id="login-win">
              <div class="modal-body">
                    <table class="modal-form">
                      <form action="__APP__/Login/do_login" method="post"  class="form-horizontal" name="user_login">
                       <tr>
                        <td  class="control-group">
                           <label for="username" class="control-label">用户名:</label></td>
                        <td class="controls">
                            <input type="text" name="username" id="username" placeholder="用户名"  /></td>
                         <td><p class="help-inline" id="username-warning" style="color:#F00;"></p></td>
                       </tr>
                       <tr>  
                        <td class="control-group">
                          <label for="pwd" class="control-label">密码:</label></td>
                         <td class="controls">
                          <input type="password" name="pwd" id="pwd" placeholder="密码" /></td>
                         <td><p class="help-inline" id="pwd-warning" style="color:#F00;"></p></td>
                         </tr>
                     
                        <tr>
                        <td class="control-group">
                          <label for="code" class="control-label">验证码:</label></td>
                         <td class="controls">
                          <input type="text" name="code" id="code" placeholder="验证码" /></td><td><img src="__APP__/Public/code" alt="" onclick='this.src=this.src+"?"+Math.random()' onmousemove="show('点击验证码刷新')"></td>
                         <td><p class="help-inline" id="code-warning" style="color:#F00;"></p></td>
                         </tr>
                        <tr><td></td>
                        <td class="control-group" style="margin-left:100px;">
                           <p id="login_warning" style="color:#F00;"></p>
                        </td>
                        </tr>
                        <tr><td></td>
                         <td class="modal-footer">
                    <button type="button"  class="btn btn-primary" id="login-win-close-btn">取消</button>
                    <button type="button" class="btn btn-primary" id="login-sub-btn">确定登陆</button>
                    <input name="me" type="radio" value="1" />记住我
                         </td></tr>
              </form>  
    </table>
    
</body>
</html>