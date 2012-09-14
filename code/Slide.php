<?php
	class Slide extends DataObject {
		static $db = array(
			'SlideNum' => 'Int',
			'Content' => 'HTMLText',
			'DataX' => 'Int',
			'DataY' => 'Int',
			'DataZ' => 'Int',
			'Scale' => 'Int',
			'DataRotate' => 'Int',
			'DataRotateX' => 'Int',
			'DataRotateY' => 'Int',
			'Big' =>  'Boolean',
			'Tiny' =>  'Boolean',
			'SlideBox' =>  'Boolean'
			
		);

		static $defaults = array(
			'Content' => '',
			'DataX' => '0',
			'DataY' => '0',
			'DataZ' => '0',
			'Scale' => '1',
			'DataRotate' => '0',
			'DataRotateX' => '0',
			'DataRotateY' => '0',
			'Big' =>  '0',
			'Tiny' =>  '0',
			'SlideBox' =>  '0'
		);

		static $has_one = array(
			'ImpressPage' => 'ImpressPage'
		);	

		static $summary_fields = array(
			'SlideNum' => 'Slide Number',
      		'Content' => 'Content',
			'DataX' => 'Position-x (left)',
			'DataY' => 'Position-y (top)',
			'DataZ' => 'Position-z (stack order)',
			'Scale' => 'Scale (1 - infinate)',
			'DataRotate' => 'Rotate (0-360)',
			'DataRotateX' => 'Rotate x-axis (0-360)',
			'DataRotateY' => 'Rotate y-axis (0-360)',
			'Big' =>  'Big',
			'Tiny' =>  'Tiny',
			'SlideBox' =>  'Slide Box',
			'SlideNum' => 'Slide Number'
  		 );


		/*public function getCMSFields(){
			$fields = parent::getCMSFields();

			$position = ToggleCompositeField::create('Position', 'Position',
				newArrayList(
					new TextField("DataX", $this->fieldLabel('DataX')),
					new TextField("DataY", $this->fieldLabel('DataY')),
					new TextField("DataZ", $this->fieldLabel('DataZ'))
				)
			)->setHeadingLevel(4);

			$fields->addFieldToTab("Root.Main", $position); 

			return $fields;
		} */



	}