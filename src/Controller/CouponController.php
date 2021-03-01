<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Coupon;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\JsonResponse;

class CouponController extends AbstractController
{
    /**
     * @Route("/coupon", name="coupon", methods={"GET"})
     */
    public function getAllCoupon(){
        $repo = $this->getDoctrine()->getRepository(Coupon::class);

        $coupons = $repo->findAll();

        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($coupons, 'json');

        $response = new Response($reports);
        $response->headers->set('Content-Type', 'application/json'); 

        return $response;
    }

    /**
     * @Route("/coupon/{id}", name="getCoupon", methods={"GET"})
     */
    public function getCoupon($id){

        $couponClass = $this->getDoctrine()->getRepository(Coupon::class);

        $coupon = $couponClass->find($id);
        
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($coupon, 'json');

        $response = new Response($reports);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }    

    /**
     * @Route("/product/{id}", name="getProduct", methods={"GET"})
     */
    public function getProduct($id){

        $productClass = $this->getDoctrine()->getRepository(Product::class);

        $product = $productClass->find($id);

        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($product, 'json');

        $response = new Response($reports);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
