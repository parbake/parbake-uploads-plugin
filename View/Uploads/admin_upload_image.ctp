<?php 
echo $this->Form->create(
	'Upload', 
	array(
        'id'=>'UploadForm',
		'url'=>$this->here,
		'role'=>'form',
		'inputDefaults'=>array(
			'div'=>array(
				'class'=>'form-group'
			),
			'class'=>'form-control',
			'required'=>false
		),
        "enctype"=>"multipart/form-data"
	)
);

echo $this->Form->input('upload', array(
    'type'=>'file'
));

echo $this->Form->input('description', array(
    'rows'=>2
));

echo $this->Form->submit(
	 __d('uploads', 'Submit'),     
	 array(
         'id'=>'SubmitUploadForm',
		 'div'=>array(
			 'class'=>'form-group'
		 ),
		 'class'=>'btn btn-default'
	 )
 ); 
echo $this->Form->end();
?>