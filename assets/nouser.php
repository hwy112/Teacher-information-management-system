<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php session_start();
	//判断是否登录
	if($_SESSION['teacherid']){

	}
	else{
		Header("Location: login.php");
	}
	?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>教师信息管理系统</title>
	<!-- CSS文件引入-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    
    <!-- FontAwesome Styles-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom Styles-->
    <link href="css/custom-styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/jPages.css"/>
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="js/Lightweight-Chart/cssCharts.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
    <!--/. 大容器  -->
    <div id="wrapper">
    	<!--/. 顶部导航栏  -->
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.php"><i class="large material-icons">insert_chart</i> <strong>教师管理系统</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>John Doe</b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<ul id="dropdown1" class="dropdown-content">

		<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
		</li>
		</ul>
		
	   <!--/. 顶部导航栏  -->
	   <!--/. 左侧导航栏  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="waves-effect waves-dark" href="index.php"><i class="fa fa-dashboard"></i> 教师基础信息管理</a>
                    </li>
                    <li>
                        <a href="Teaching-information.php" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> 教学信息管理</a>
                    </li>
					<li>
                        <a href="Teaching-performance.php" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> 教学业绩管理</a>
                    </li>
                    <li>
                        <a href="score.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> 评分管理</a>
                    </li>
                    
                    <li>
                        <a href="Scientific-achievements.php" class="waves-effect waves-dark"><i class="fa fa-table"></i> 科研成果管理</a>
                    </li>
                    <li>
                        <a href="information-analysis.php" class="waves-effect waves-dark"><i class="fa fa-table"></i> 综合信息分析</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" id="System-setting" class="waves-effect waves-dark"><i class="fa fa-edit"></i> 系统管理<span class="fa arrow"></span> </a>
                         <ul class="nav nav-second-level">
                            <!--<li>
                                <a href="System-setting.html" class="waves-effect waves-dark">系统初始化设置</a>
                            </li>-->
                            <li>
                                <a href="User-setting.php" class="waves-effect waves-dark">系统用户管理</a>
                            </li>
                            <li>
                                <a href="Announcement-management.php" class="waves-effect waves-dark">公告发布管理</a>
                            </li>
                            <li>
                                <a href="Resources-sharing.php" class="waves-effect waves-dark">教学资源共享</a>
                            </li>
                         </ul>
                    </li>                  
                </ul>

            </div>

        </nav>
        <!-- /. 左侧导航栏  -->
        <!--/. 主内容容器    -->
        	<!--/. 主内容头部  -->
		<div id="page-wrapper">
				<!--/. 公告  -->
			<div>
	          <marquee direction="left" align="bottom" height="25" width="100%" 
	          	       style="margin-top: 10px;" onmouseout="this.start()" onmouseover="this.stop()" 
	          		   scrollamount="2" scrolldelay="1"><img src="img/laba.gif" height="20px" /> 
	          				&nbsp;&nbsp;水平滚动字幕内容</marquee>
			</div>
			    <!--/. 公告  -->
		  <div class="header"> 
                        <h1 class="page-header">
                            系统管理
                        </h1>															
		</div>
		    <!--/. 主内容头部  -->
			<!--/. 主内容  -->
            <div id="page-inner">
            <div >
            	<div class="col-sm-3">
            		<button class="btn btn-info add" type="button" data-toggle="modal" data-target="#myModal">添加信息</button>
            		</div>
            		<!--/. 添加信息模态框  -->
            		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">添加评分信息</h4>
					      </div>
					      <div class="modal-body">
					        <form action="" method="" <!--改-->>
					        <div ><label>任课班级：</label>	<input type="text" name="class-no" id="class-no" class="form-control" /></div>
					        <div ><label>课程：</label>	<input type="date" name="course" id="course"  class="form-control"/></div>
					        <div ><label>学生评分：</label>	<input type="text" name="student-score" id="student-score" class="form-control" /></div>
					        <div ><label>老师评分：</label>	<input type="text" name="teacher-score" id="teacher-score" class="form-control" /></div>	
				            
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					        <button type="button" class="btn btn-primary" >确定</button>
					      </div>
					      </form>
					    </div>
					  </div>
					</div>
            	    <!--/. 添加信息模态框  -->
            	    <!--/. 搜索信息  -->
            	<div class="search">
            		<form class="form-inline" role="form" action="" method=""><!--改-->
            			<div class="form-group search">           		
            			<input type="text" class="form-control" placeholder="请输入你的查询条件"/>
            			<button class="btn btn-info " class="form-control" type="button">搜索</button>
            			</div >
            		</form>
            	</div>
            	<!--/. 搜索信息  -->
            </div>
                <!--/. 显示信息的表格  -->
             <table class="table table-striped table-hover table-bordered  dataTable no-footer" id="dataTables-example">
			   <thead>
			     <tr>
			       <th>任课班级</th>
			       <th>课程</th>
			       <th>学生评分</th>
			       <th>毕业院校</th>
			       <th>老师评分</th>
			       <th>删除</th>
			       <th>修改</th>
			     </tr>
			   </thead>
			   <tbody id="itemContainer">
			     <tr>
			       <td>表格单元格</td>
			       <td>表格单元格</td>
			       <td>表格单元格</td>
			       <td>表格单元格</td>
			       <td>表格单元格</td>
			       <td><button class="btn btn-info " type="button" id="delete">删除</button></td>
			       <td><button class="btn btn-info " type="button">修改</button></td>
			     </tr>			     
			   </tbody>
			 </table>
			 <div class="holder"></div>
			<footer><p>Copyright &copy; 2017.Company name All rights reserved.</p>
				
        
				</footer>
            <!--/. 网页脚部  -->
            </div>
            <!-- /. 主内容容器  -->
        </div>
        
    </div>
    <!-- /. 大容器  -->
    <!-- 脚本导入-->
    <!-- jQuery Js -->
    <script src="js/jquery-3.2.1.min.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
	
	<script src="materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="js/jquery.metisMenu.js"></script>

	
	
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	
	 <script src="js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="js/custom-scripts.js"></script> 
    <script src="js/my.js"></script>
    <script src="js/jPages.js"></script>

</body>

</html>