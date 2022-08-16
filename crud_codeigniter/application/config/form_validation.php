<?php
$config = 
	[
		'add_user_data'=>
		[
			[
				'field'=>'firstname',
				'label'=>'First Name',
				'rules'=>'required|alpha'
			],
			[
				'field'=>'lastname',
				'label'=>'Last Name',
				'rules'=>'required|alpha'
			],
			[
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'required|valid_email|is_unique[users.email]'
			],
			[
				'field'=>'contact_no',
				'label'=>'Contact no',
				'rules'=>'required|numeric|exact_length[10]|is_unique[users.contact_no]'
			]
		],
		'update_user_data'=>
		[
			[
				'field'=>'firstname',
				'label'=>'First Name',
				'rules'=>'required|alpha'
			],
			[
				'field'=>'lastname',
				'label'=>'Last Name',
				'rules'=>'required|alpha'
			],
			[
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'required|valid_email'
			],
			[
				'field'=>'contact_no',
				'label'=>'Contact no',
				'rules'=>'required|numeric|exact_length[10]'
			]
		],
	];
?>