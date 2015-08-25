<?php

	Class UserModel extends RelationModel{

		protected $_link=array(
			
 		   'profile'=>array(
      	     	  'mapping_type'  => HAS_ONE,
       			 'class_name'    => 'profile',
       			 'foreign_key'   => 'user_id',
       			 // 'as_fields' => 'email,nickname',
        ),
			'dept'=> array(
				'mapping_type'=> BELONGS_TO,
				'mapping_name'=>'Dept',
				'class_name'=>'Dept',
				'foreign_key'=>'dept_id',
				),

			'card'=> array(
				'mapping_type'=> HAS_MANY,
				'mapping_name'=>'card',
				'class_name'=>'card',
				'foreign_key'=>'user_id',
				),

			'group'=> array(
				'mapping_type'=> MANY_TO_MANY,
				'mapping_name'=>'group',
				'class_name'=>'group',
				'foreign_key'=>'user_id',
				'relation_foreign_key'=>'group_id',
				'relation_table'=>'think_user_group',
				),
			);
	}
?>