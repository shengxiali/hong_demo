<div class="navbar navbar-default" id="navbar">
	<div class="navbar-container" id="navbar-container">
		<div class="navbar-header pull-left">
			<a href="_admin_" class="navbar-brand">
				<small>
					<i class="icon-leaf"></i>
					后台管理
				</small>
			</a><!-- /.brand -->
		</div><!-- /.navbar-header -->
		<div class="navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="/assets/avatars/user.jpg" alt="Jason's Photo" />
						<span class="user-info">
							<small>你好,</small>
							<?php echo isset($this->adminUser['truename']) &&  $this->adminUser['truename'] !=''?  $this->adminUser['truename'] :   $this->adminUser['adminuser']?>
						</span>
						<i class="icon-caret-down"></i>
					</a>
					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="#">
								<i class="icon-cog"></i>
								设置
							</a>
						</li>
						<li>
							<a href="/_admin_/admin/password">
								<i class="icon-lock "></i>
								修改密码
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="/_admin_/index/logout">
								<i class="icon-off"></i>
								退出
							</a>
						</li>
					</ul>
				</li>
			</ul><!-- /.ace-nav -->
		</div><!-- /.navbar-header -->
	</div><!-- /.container -->
</div>
<div class="main-container" id="main-container">
	<div class="main-container-inner">
	<a class="menu-toggler" id="menu-toggler" href="#">
		<span class="menu-text"></span>
	</a>
	<div id="sidebar" class="sidebar">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>
	<ul class="nav nav-list">
		<li>
			<a href="" target="_blank">
				<i class="icon-控制面板"></i>
				<span class="menu-text"> 菜单列表 </span>
			</a>
		</li>
		<li>
			<a class="dropdown-toggle" href="#">
				<i class="icon-cog"></i>
				<span class="menu-text"> 系统维护 </span>
				<b class="arrow icon-angle-down"></b>
			</a>
				<ul class="submenu">
					<li>
						<a href="">
							<i class="icon-double-angle-right"></i>
							功能权限管理
						</a>
					</li>
					<li>
						<a href="">
							<i class="icon-double-angle-right"></i>
							角色管理
						</a>
					</li>
				</ul>
			</li>

		<li class="">
			<a class="dropdown-toggle" href="#">
				<i class="icon-bar-chart "></i>
				<span class="menu-text"> 信息维护 </span>
				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu" style="display: none;">
				<li>
					<a href="menu/index">
						<i class="icon-double-angle-right"></i>
						菜单管理					
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon-double-angle-right"></i>
						信息管理					
					</a>
				</li>
			</ul>
		</li>
	</ul><!-- /.nav-list -->
	<div id="sidebar-collapse" class="sidebar-collapse">
		<i data-icon2="icon-double-angle-right" data-icon1="icon-double-angle-left" class="icon-double-angle-left"></i>
	</div>
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>
<div class="main-content">	
	<div class="breadcrumbs" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="/_admin_">主页</a>
			</li>
			<li>菜单管理</li>
			<!--<?php foreach($bread_thumb as $K=>$value){?>
				<?php if($K=='controller'){?>
					<li class="active">
					<a href="/_admin_/<?php echo $value['controller']?>/<?php echo $value['action']?>"><?php echo $value['actionname']?></a>
					</li>
				<?php }elseif($this->router->fetch_method()!=='index'){?>
					<li> <?php echo $value['actionname']?> </li>
				<?php }?>				
			<?php }?>-->
		</ul>
	</div>