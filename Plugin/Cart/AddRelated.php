<?php 
namespace Konatsu\PreattyMessages\Plugin\Cart;

use Magento\Checkout\Controller\Cart\Add;
 
class AddRelated
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
    public function afterExecute(\Magento\Checkout\Controller\Cart\Add $subject,
        \Magento\Checkout\Controller\Cart\Add $result,
        \Closure $proceed
    )
    {
        $cart = $this->cart;

        $test = $subject;
        $test2 = $result;

        $efgw =123;
        die($subject->getResponse()->representJson()); 
        return $result;
    }
}
