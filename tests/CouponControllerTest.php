<?php
namespace App\Test\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CouponControllerTest extends WebTestCase {

    public function testGetAllCoupon(){

        $coupon = static::createClient();
        $coupon->request('GET', '/coupon');
        $this->assertResponseIsSuccessful();
        $this->assertEquals(200, $coupon->getResponse()->getStatusCode());

    }

    public function testGetCouponById($id){

        $coupon = static::createClient();
        $coupon->request('GET', '/coupon/1');
        $this->assertResponseIsSuccessful();
        $this->assertEquals(200, $coupon->getResponse()->getStatusCode());
    }

}
?>