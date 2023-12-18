<?php

namespace App\Pages;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;

use Page;

class AboutPage extends Page {
    private static $table_name = 'About';
    private static $db = [
        'Title' => 'Varchar',
    ];

    private static $many_many = [
        'Logos' => Image::class,
    ];

    private static $owns = [
        'Logos'
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            UploadField::create('Logos', 'Partner logos')->setIsMultiUpload(true)->setAllowedExtensions(array('jpg','jpeg','gif', 'png'))->setAllowedMaxFileNumber(10),
        ]);

        return $fields;
    }
}