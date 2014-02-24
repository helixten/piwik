<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik
 * @package Updates
 */

namespace Piwik\Updates;

use Piwik\Updates;

/**
 * @package Updates
 */
class Updates_1_5_rc6 extends Updates
{
    static function update()
    {
        try {
            \Piwik\Plugin\Manager::getInstance()->activatePlugin('PrivacyManager');
        } catch (\Exception $e) {
        }
    }
}

