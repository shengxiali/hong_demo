<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>管理员管理</title>
	<?php $this->load->view('admin/common/header') ?>
</head>
<body>
	<?php $this->load->view('admin/common/top_left_nav') ?>
	<!--<?php var_dump($list);?>-->
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
                    <form action="" method="post"></form>
				</div>
                <div class="col-xs-12">
					<div class="table-responsive">
						<div class="table-header"><div class="col-xs-11">菜单管理</div><a href="/admin/menu/add" class="btn btn-info btn-sm">添加</a></div>
						<div class="dataTables_wrapper form-inline no-footer">
							<table class="table table-striped table-bordered table-hover dataTable no-footer" id="table-list" role="grid" aria-describedby="sample-table-2_info">
								<thead>
									<tr>										 
										<th><input class="ace" type="checkbox" id="checkall"><span class="lbl"></span></th>
										<th>ID</th>
										<th>菜单名称</th>
										<th>排序</th>
										<th>说明</th>
										<th>菜单链接</th>
										<th>状态</th>
										<th>创建日期</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody> 
								<?php  foreach($list as $val ){?>
									<tr>
										<td><input class="ace" type="checkbox" name="ids[]" /><span class="lbl"></span></td>
										<td><?php echo $val->m_id?></td>
										<td><?php echo $val->m_name?></td>
										<td><?php echo $val->m_sort?></td>
										<td>
											<?php echo $val->m_account?>
										</td>
										<td><?php echo $val->m_url?></td>
										<td><span class="label <?php echo $val->m_status=='2' ? 'label-danger' :''?>"><?php echo $val->m_status?></span></td>
										<td><?php echo date($val->m_createTime)?></td>
										<td>
											<div class="visible-md visible-lg visible-sm visible-xs action-buttons">
												<a href="/admin/menu/edit/?id=<?php echo $val->m_id?>" class="green">
													<i class="icon-pencil bigger-130"></i>
												</a>
												<a href="javascript:;" class="red trash-row" data-id="<?php echo $val->m_id?>">
													<i class="icon-trash bigger-130"></i>
												</a>
											</div>
										</td>
									</tr> 
								<?php }?>
								</tbody>
							</table>
							<?php echo $page; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php $this->load->view('admin/common/footer');?>
</body>
</html>
