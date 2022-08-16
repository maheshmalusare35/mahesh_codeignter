<?php 
$config =[
	'add_article_rules'=>
	[
		[
			'field'=>'article_title',
			'label'=>'Article Title',
			'rules'=>'required|is_unique[admin_project.article_title]'
		],
		[
			'field'=>'article_body',
			'label'=>'Article Body',
			'rules'=>'required'
		]
	],
];
?>