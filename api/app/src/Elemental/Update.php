<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextField;

class UpdateBlock extends BaseElement {
    private static $table_name = "Update";
    private static $singular_name = "Update";
    private static $plural_name = 'Updates';
    private static $description = 'Update';
    private static $icon = 'font-icon-menu-files';
    private static $db = [
        'Title' => 'Text',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'Update title'),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
