<?php

class ImpressPage extends SiteTree {
	static $has_many = array(
		'Slides' => 'Slide'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$config = GridFieldConfig::create()->addComponents(
			new GridFieldButtonRow('after'),
			new GridFieldAddNewButton('buttons-after-left'),
			new GridFieldAddExistingAutocompleter('buttons-after-left'),
			new GridFieldToolbarHeader(),
			new GridFieldSortableHeader(),
			new GridFieldFilterHeader(),
			new GridFieldDataColumns(),
			new GridFieldEditButton(),
			new GridFieldDeleteAction(),
			$pagination = new GridFieldPaginator($itemsPerPage),
			new GridFieldDetailForm(),
			new GridFieldSortableRows('SlideNum')
		);




	//	GridFieldConfig_RelationEditor::create();

	/*	$config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(
			'Slide.Content'=> 'Slide' // Retrieve from a has-one relationship
		));*/
		
		$slidesField = new GridField(
			'Slides', // Field name
			'Slides', // Field title
			$this->Slides()->sort('SlideNum'),
			$config
		);

		$slides = new CompositeField(
			new LiteralField('SlidesHeading', '<p>&nbsp;</p>'),
			$slidesField,
			new LiteralField('SlidesHeading', '<p>&nbsp;</p>')
			);

		$fields->removeFieldFromTab("Root.Main","Content");		
			 
		// Create a tab named "Students" and add our field to it
		//$fields->insertBefore($slides, 'Metadata');
		$fields->addFieldToTab("Root.Slides", $slides);  

		return $fields;
	}

	public function getSortedSlides() { 
   		$sortedSlides = $this->Slides(); 
   		$sortedSlides->sort('SlideNum'); 
   		return $sortedSlides; 
	}


}


class ImpressPage_Controller extends ContentController {
 

 	public function init() {
		parent::init();

		if(Director::fileExists(project() . "/css/impress.css")) {
        	Requirements::css(project() . "/css/impress.css");
      	}else{
         	Requirements::css("ss-impress/css/impress.css");
      	}

      	if(Director::fileExists(project() . "/css/impress-layout.css")) {
        	Requirements::css(project() . "/css/impress-layout.css");
      	}else{
         	Requirements::css("ss-impress/css/impress-layout.css");
      	}



      	Requirements::javascript("ss-impress/javascript/thirdparty/impress/js/impress.js");
	}

 
}