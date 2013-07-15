<?php
/**
 * Catalog category
 *
 * @category   Magefast
 * @package    Magefast_FixUrlCategory
 * @author     
 */
class Magefast_FixUrlCategory_Model_Category extends Mage_Catalog_Model_Category
{

    /**
     * Format URL key from name or defined key
     *
     * @param string $str
     * @return string
     */
    public function formatUrlKey($str)
    {
		$str = Mage::helper('fixurlcategory')->format($str); //new, like for product
        //$str = Mage::helper('core')->removeAccents($str); //old
        $urlKey = preg_replace('#[^0-9a-z]+#i', '-', $str);
        $urlKey = strtolower($urlKey);
        $urlKey = trim($urlKey, '-');
        return $urlKey;
    }



}
