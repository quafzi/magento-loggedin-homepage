<?php
/**
 * Quafzi_LoggedInHomepage
 *
 * This file is part of the Quafzi_LoggedInHomepage extension.
 * Please do not edit or add to this file if you wish to upgrade it to newer
 * versions in the future.
 *
 * @package    Quafzi_LoggedInHomepage
 * @category   Quafzi_LoggedInHomepage
 * @copyright  © 2016 by Thomas Birke <magento@netextreme.de>
 * @license    OSL
 */

/**
 * Quafzi_LoggedInHomepage_Model_Observer
 *
 * @author Thomas Birke <magento@netextreme.de>
 */
class Quafzi_LoggedInHomepage_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_LOGGEDIN_HOMEPAGE_DIFFERS = 'web/default/cms_home_page_login_dependend';
    const XML_PATH_LOGGEDIN_HOMEPAGE = 'web/default/cms_home_page_loggedin';

    public function enabled()
    {
        return (bool)(int) Mage::getStoreConfig(self::XML_PATH_LOGGEDIN_HOMEPAGE_DIFFERS);
    }

    public function getLoggedInHomepage()
    {
        return Mage::getStoreConfig(self::XML_PATH_LOGGEDIN_HOMEPAGE);
    }
}
