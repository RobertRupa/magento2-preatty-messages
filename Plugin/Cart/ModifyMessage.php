<?php 
namespace Konatsu\PreattyMessages\Plugin\Cart;

use Magento\Checkout\Controller\Cart\Add;
 
class ModifyMessage
{
    /**
     * @var \Magento\Checkout\Model\Cart
     */
    protected $cart;

    /**
     * @param \Magento\Checkout\Model\Cart $cart
     */
    public function __construct(\Magento\Checkout\Model\Cart $cart)
    {
        $this->cart = $cart;
    }

    /**
     * Disable multishipping
     *
     * @param \Magento\Framework\App\Action\Action $subject
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function aroundExecute(\Magento\Checkout\Controller\Cart\Add $subject,
    \Magento\Checkout\Controller\Cart\Add $result
    )
    {
        $cart = $this->cart;

        $test = $subject;
        $test2 = $result;

        $efgw =123;
        return $result;
    }
}
