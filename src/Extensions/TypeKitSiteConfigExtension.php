<?php namespace StudioBonito\SilverStripe\TypeKit\Extensions;

use FieldList;
use FormField;
use TextField;

/**
 * Add configuration option to SiteConfig for setting the TypeKit ID.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class TypeKitSiteConfigExtension extends \DataExtension
{
    /**
     * List of database fields. {@link DataObject::$db}
     *
     * @var array
     */
    private static $db = array(
        'TypeKitID' => 'Varchar(32)',
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            'Root.Services.TypeKit',
            TextField::create(
                'TypeKitID',
                _t('TypeKitSiteConfigExtension.TYPEKITID', FormField::name_to_label('TypeKitID'))
            )
        );
    }
}
