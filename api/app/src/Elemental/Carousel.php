<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextField;

class CarouselBlock extends BaseElement {
    private static $table_name = "Carousel";
    private static $singular_name = "Carousel";
    private static $plural_name = 'Carousels';
    private static $description = 'Carousels';
    private static $icon = 'font-icon-menu-files';
    private static $db = [
        'Title' => 'Text',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'Carousel title'),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
