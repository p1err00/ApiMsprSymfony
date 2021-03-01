<?php
namespace App\Test\Controller;

use Doctrine\ORM\EntityManagerInterface;
use JMS\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Request;

class MailControllerTest extends WebTestCase{

    public function postMail(Request $request, SerializerInterface $serializer, EntityManagerInterface $em){

        $mail = static::createClient();
        $mail->request('POST', '/mail');
        $this->assertResponseIsSuccessful();
        $this->assertEquals(200, $mail->getResponse()->getStatusCode());
    }
}
?>