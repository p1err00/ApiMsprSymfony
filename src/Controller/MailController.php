<?php

namespace App\Controller;

use App\Entity\Mail as EntityMail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Mail;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager as PersistenceObjectManager;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class MailController extends AbstractController
{
    /**
     * @Route("/mail", name ="postMail", methods = {"POST"})
     */
    public function postMail(Request $request, SerializerInterface $serializer, EntityManagerInterface $em){

        $jsonRequest = $request->getContent();

        $post = $serializer->deserialize($jsonRequest, Mail::class, 'json' );

        $em->persist($post);
        $em->flush();

        return $this->json($post, 201);
    }
}
