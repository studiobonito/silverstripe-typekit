<?php namespace StudioBonito\SilverStripe\TypeKit\TemplateGlobalProviders;

use Injector;

/**
 * Provide $TypeKit global template variable for inserting TypeKit javascript.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class TypeKitTemplateGlobalProvider implements \TemplateGlobalProvider
{
    public static function get_template_global_variables()
    {
        return array(
            'TypeKit' => array(
                'method'  => 'getTypeKitScript',
                'casting' => 'HTMLText'
            )
        );
    }

    public static function getTypeKitScript()
    {
        $siteConfigService = Injector::inst()->get('SiteConfig');

        $siteConfig = $siteConfigService->current_site_config();

        return "<script type=\"text/javascript\" src=\"//use.typekit.net/{$siteConfig->TypeKitID}.js\"></script>
            <script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>";
    }
}
