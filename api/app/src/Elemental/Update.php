<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class UpdateBlock extends BaseElement {
    private static $table_name = "Update";
    private static $singular_name = "Update";
    private static $plural_name = 'Updates';
    private static $description = 'Updates';
    private static $icon = 'font-icon-plus-circled';
    private static $db = [
        'Title' => 'Text',
        'Content' => 'HTMLText',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'Update title'),
            HTMLEditorField::create('Content', 'Content for section'),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
