<?php include('header.php')?>
<div class="container mt-3 mb-3 border border-1 rounded-3 bg-light col-6 shadow-lg">
	<h1 class="text-center">Edit article</h1>
	<!-- <?php echo $article->id;?> -->
	<?php echo form_open('Admin/updatearticle/');?>
	<!-- <?php echo form_hidden('articleid',$article->id); ?> -->
	  <div class="mb-3">
	    <label for="article_title" class="form-label">Article Title:</label>	    
	    <?php echo form_input(['class'=>'form-control','name'=>'article_title','id'=>'article_title','placeholder'=>'Enter article_title','value'=>set_value('article_title',$article->article_title)]);?><!-- for the value set in value attribute 'value'=>set_value('article_title') -->
	    <div class="text-danger"><?php echo form_error('article_title');?></div>
	  </div>
	  <div class="mb-3">
	    <label for="article_body" class="form-label">Article Body:</label>
	    <?php echo form_textarea(['class'=>'form-control','name'=>'article_body','id'=>'article_body','placeholder'=>'Enter article_body','value'=>set_value('article_body',$article->article_body)]);?>
	    <div class="text-danger"><?php echo form_error('article_body');?></div>
	  </div>
	  <div class="d-flex gap-2 col-3 mx-auto mb-3">
  		<?php echo form_submit(['class'=>'btn btn-primary','value'=>'Edit'],$article->id);?>
  		<?php echo form_reset(['class'=>'btn btn-primary','value'=>'Reset']);?>
  		<?php echo anchor('Admin/welcome','Back','class="link-class btn btn-primary"');?> 
	  </div>	 
	   <!-- <?php echo validation_errors();?> -->
</div>
<?php include('footer.php')?>