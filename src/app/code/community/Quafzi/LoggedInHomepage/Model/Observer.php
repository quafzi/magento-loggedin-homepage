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
class Quafzi_LoggedInHomepage_Model_Observer
{
    /**
     * Set different homepage for logged-in customers
     */
    public function replaceHomepageForLoggedInCustomers()
    {
        if (Mage::helper('customer')->isLoggedIn()
            && Mage::helper('quafzi_loggedinhomepage')->enabled()
        ) {
            Mage::app()->getStore()->setConfig(
                Mage_Cms_Helper_Page::XML_PATH_HOME_PAGE,
                Mage::helper('quafzi_loggedinhomepage')->getLoggedInHomepage()
            );
        }
    }
}
