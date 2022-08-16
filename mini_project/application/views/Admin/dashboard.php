<?php include('header1.php')?>


<div class="container p-4">
	<div class="d-grid gap-2 col-3 mx-auto mb-3">
		<?php echo anchor('Admin/adduser','Add article','class="link-class btn btn-primary"');?>
	</div>
</div>


<div class="container bg-light">
	<?php if ($msg = $this->session->flashdata('msg')):
		$msg_class = $this->session->flashdata('msg_class')
		?>
	<?php echo $msg;?>
<?php endif;?>
<nav aria-label="Page navigation example">
<ul class="pagination">
	<?php echo $this->pagination->create_links();?>
</ul>
</nav>
	<div class="table">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Article Title</th>
					<th>Article Body</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php if($article): ?>
					<?php foreach($article as $art): ?>				
						<tr>
							<td><?php echo $art->id;?></td>
							<td><?php echo $art->article_title;?></td>
							<td><?php echo $art->article_body;?></td>
							<td><!-- <a href="#" class="btn btn-primary">Edit</a> -->
								
								
								<?= 
								form_open('admin/editdata');?>
								<?= form_hidden('id',$art->id);?>
								<?=
								form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-success']);?>
								<?= form_close();
								?>								
							</td>
							<td><!-- <a href="#" class="btn btn-primary">Delete</a> -->
							
								<?php $hidden = form_hidden('id',$art->id);?>
								
								<?= 
								form_open('admin/deletedata');?>
								<?= form_hidden('id',$art->id);?>
								<?=
								form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']);?>
								<?= form_close();
								?>								
							</td>
						</tr>
					<?php endforeach; ?>
					<?php else:?>
						<tr>
							<td colspan="3">No data available</td>
						</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>

<?php include('footer.php')?>