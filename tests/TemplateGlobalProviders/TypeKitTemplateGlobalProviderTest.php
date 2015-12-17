<?php namespace StudioBonito\SilverStripe\TypeKit\Tests\TemplateGlobalProviders;

use Injector;
use Mockery as m;
use StudioBonito\SilverStripe\TypeKit\TemplateGlobalProviders\TypeKitTemplateGlobalProvider;

/**
 * Single sentence description.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class TypeKitTemplateGlobalProviderTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testGetTemplateGlobalVariables()
    {
        $templateProvider = new TypeKitTemplateGlobalProvider();

        $variables = $templateProvider->get_template_global_variables();

        $this->assertArrayHasKey('TypeKit', $variables);
    }

    public function testGetGoogleAnalyticsScript()
    {
        $mockConfig = m::mock('StdClass');
        $mockConfig->TypeKitID = 'abb1cde';

        $mockSiteConfig = m::mock('SiteConfig')
            ->shouldReceive('current_site_config')
            ->once()
            ->andReturn($mockConfig)
            ->getMock();

        Injector::inst()->registerService($mockSiteConfig, 'SiteConfig');

        $templateProvider = new TypeKitTemplateGlobalProvider();

        $script = $templateProvider->getTypeKitScript();

        $this->assertRegExp('/abb1cde/', $script);
    }
}
