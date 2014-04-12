<?php
  

	class IndexAction extends CommonAction {
		
		// 显示主页面
		public function index(){

		   $this->show();
		}
		
		public function do_login(){
			$conn=mysql_connect("localhost:3306","root","koala19920716");//建立与SQL Server数据库的连接
            mysql_query("set names 'utf8'"); 
            mysql_select_db("dzsw",$conn);   //选择数据库
			if($_SESSION['verify'] != md5($_POST['code'])) {
                 echo '0';
              }else{    
			 $username=$_POST['username'];
             $pwd=$_POST['pwd'];
			 
			 $model=new Model();
			 $password=md5($pwd);
			// echo $password."<br>";
			 $condition['username']=$username;
			 $condition['password']=$password;
			 $sql="select * from sw_member where username='".$username."'";
			//$user_arr=$model->query('select * from member where username=%s and password=%s',$username,$password);
			$user=mysql_query($sql);
			$num=mysql_num_rows($user);
			 $rw=mysql_fetch_array($user);
			//echo $rw['username'];
			if($user&&$num)
            {
				//echo $rw['password'];
               if($rw['password']==$password)
            {
            //$user_arr=$user->select();
			//$count = count($user_arr);
			///dump($user_arr)."<br>";
			//if($count){
				$ip= get_client_ip();
				$date['login_time']=date('Y-m-d',time());
				$data['login_ip']=$ip;
				$user = M("member"); 
				$user->where($condition)->save($data);
				$_SESSION['admin']=$username; 
				//echo   $_SESSION['admin'];
				if($_POST['me'])
				{
					//echo $_POST['me'];
					cookie('username','value',3600*24); // 指定cookie保存时间
				}
				echo '3';
			}
			else{
				echo '2';
			}
			}
			else{
				echo '1';
				}
           }			
		}
			
		public function logout()
		{
			session('[destroy]'); // 销毁session
			cookie('username',null);//Cookie删除
			$this->display("Index:login");

		}
		public function login()
		{
			$this->show();

		}
	}
?>