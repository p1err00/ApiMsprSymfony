<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Coupon;

class CouponFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i<=10; $i++){
            $coupon = new Coupon();

            $coupon->setToken(123)
                    ->setNumberOfCoupon(10)
                    ->setLinkQrcode("https://www.google.fr");
            $manager->persist($coupon);
        }

        $manager->flush();
    }
}
