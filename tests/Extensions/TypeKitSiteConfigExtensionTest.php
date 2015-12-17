<?php namespace StudioBonito\SilverStripe\TypeKit\Tests\Extensions;

use FieldList;
use StudioBonito\SilverStripe\TypeKit\Extensions\TypeKitSiteConfigExtension;
use Tab;
use TabSet;

/**
 * Single sentence description.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class TypeKitSiteConfigExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testUpdateCMSFields()
    {
        $extension = new TypeKitSiteConfigExtension();

        $fields = new FieldList();
        $fields->push(new TabSet('Root', new Tab('Main')));

        $extension->updateCMSFields($fields);

        $this->assertNotNull($fields->dataFieldByName('TypeKitID'));
    }
}
