<?php
namespace App\Service;

use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCondition;

class CartService extends Cart {

    public function __construct() {
        //Initialize Cart
        $config = [
            'format_numbers' => true,
            'decimals' => 2,
            'dec_point' => '.',
            'thousands_sep' => ',',
        ]; 
        parent::__construct(app('session'), app('events'), 'default', 'cart', $config);
    }

    public function addShipping($amount){    
        // add condition to only apply on totals, not in subtotal
        $condition = new CartCondition(array(
            'name' => 'Delivery ₦750',
            'type' => 'shipping',
            'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
            'value' => '+'.$amount,
            'order' => 1 // the order of calculation of cart base conditions. The bigger the later to be applied.
        ));
        
        $this->condition($condition);
    }

    public function addTax(){       
        $condition2 = new CartCondition(array(
            'name' => 'VAT 7.5%',
            'type' => 'tax',
            'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
            'value' => '7.5%',
            'order' => 1 // the order of calculation of cart base conditions. The bigger the later to be applied.
        ));
        $this->condition($condition2);
    }
}