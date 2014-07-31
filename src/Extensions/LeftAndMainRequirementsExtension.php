<?php namespace StudioBonito\SilverStripe\TypeKit\Extensions;

use Requirements;
use SiteConfig;

/**
 * Include the TinyMCE TypeKit plugin with the CMS configured TypeKit ID.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class LeftAndMainRequirementsExtension extends \LeftAndMainExtension
{
    public function init()
    {
        $siteConfig = SiteConfig::current_site_config();

        $vars = array('TypeKitID' => $siteConfig->TypeKitID);

        Requirements::javascriptTemplate(TYPEKIT_DIR . '/assets/js/tinymce.typekit.js', $vars);
    }
}