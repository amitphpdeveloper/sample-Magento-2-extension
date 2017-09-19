<?php

/**
 * Team Magento ProductList
 *
 * @category   Team Magento
 * @package    ProductList
 * @author     Team magento <amitlrajdev@gmail.com>
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

namespace Tm\ProductList\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    /**
     * System configuration values
     *
     * @var array
     */
    protected $_config;

    /**
     * Store manager interface
     *
     */
    protected $_storeManager;

    /**
     * Product interface
     *
     */
    protected $_productFactory;

    /**
     * Initialize
     *
     * @param Magento\Framework\App\Helper\Context $context
     * @param Magento\Catalog\Model\ProductFactory $productFactory
     * @param Magento\Store\Model\StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(
    \Magento\Framework\App\Helper\Context $context, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, array $data = []
    ) {
        $this->_productFactory = $productFactory;
        $this->_storeManager = $storeManager;
        parent::__construct($context, $data);
    }

   

}
