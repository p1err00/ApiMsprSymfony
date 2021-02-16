<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Coupon;

class CouponController extends AbstractController
{
    /**
     * @Route("/coupon", name="coupon")
     */
    public function getAllCoupon(){
        $repo = $this->getDoctrine()->getRepository(Coupon::class);

        $coupons = $repo->findAll();
        return $this->render('coupon/index.html.twig', [
            'controller_name' => 'CouponController',
            'coupons' => $coupons
        ]);
    }

    /**
     * @Route("/coupon/{id}", name="getCoupon")
     */
    public function getCoupon($id){

        $repo = $this->getDoctrine()->getRepository(Coupon::class);

        $coupon = $repo->find($id);
        return $this->render('coupon/indexAlone.html.twig', [
            'coupon' => $coupon
        ]);

    }

    /**
     * @Route("/coupon/delete/{id}", name="deleteCoupon")
     */
    public function deleteCoupon(){

    }
    
}
