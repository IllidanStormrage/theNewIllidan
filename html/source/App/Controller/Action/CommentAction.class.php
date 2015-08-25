<?php
	/**
	 * 共用类
	 */
	Class CommentAction extends Action{

		/**
		 * 默认继承类，检查登陆与否
		 */
		public function _initialize(){
			$user=session('account');
			if(empty($user))
			$this->redirect('Login/index');
		}
	}
?>