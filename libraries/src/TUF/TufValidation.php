<?php
/**
 * Joomla! Content Management System
 *
 * @copyright  (C) 2022 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\TUF;

use Joomla\Plugin\System\Webauthn\Helper\Joomla;

\defined('JPATH_PLATFORM') or die;

/**
 * @since  __DEPLOY_VERSION__
 */
class TufValidation
{
	public function __construct($extensionId, $params)
	{

	}

	public function getValidUpdate()
	{
		return json_decode('{
            "description": "Joomla! 4.1 CMS",
            "downloads": {
              "downloadsource": [
                {
                  "url": "https://github.com/joomla/joomla-cms/releases/download/4.1.0/Joomla_4.1.0-Stable-Update_Package.zip",
                  "format": "zip",
                  "type": "full"
                },
                {
                  "url": "https://update.joomla.org/releases/4.1.0/Joomla_4.1.0-Stable-Update_Package.zip",
                  "format": "zip",
                  "type": "full"
                }
              ],
              "downloadurl": {
                "url": "https://downloads.joomla.org/cms/joomla4/4-1-0/Joomla_4.1.0-Stable-Update_Package.zip",
                "format": "zip",
                "type": "full"
              }
            },
            "element": "joomla",
            "infourl": {
              "url": "https://www.joomla.org/announcements/release-news/5855-joomla-4-1-0-stable-new-standards-in-accessible-website-design.html",
              "title": "Joomla 4.1.0 Release"
            },
            "maintainer": "Joomla! Production Department",
            "maintainerurl": "https://www.joomla.org",
            "name": "Joomla! 4.1",
            "php_minimum": "7.2.5",
            "section": "STS",
            "sha256": "2df84d3e5cc11f7ceec6848c3cea47962994c0dd0f12bcd745d30044a60437be",
            "sha384": "81dcedf0adaf356c75b7a144ccf02c5760f683f9913b95ab8adc83169813acc0a11d411309c3d562c66bc7b2e3a38b77",
            "sha512": "5d516078343f6d850ec095ffbad24d0fbd956090a40435a6fb8f66831408d603109f0c9634df9c3aca14202004d690a17a4b27fb26c7799e27d56dca190f808f",
            "supported_databases": {
              "mariadb": "10.1",
              "mysql": "5.6",
              "postgresql": "11.0",
              "self-closing": "true"
            },
            "tags": {
              "tag": "stable"
            },
            "targetplatform": {
              "name": "joomla",
              "self-closing": "true",
              "version": "4.[01]"
            },
            "type": "file",
            "version": "4.1.0"
        }');
	}
}
