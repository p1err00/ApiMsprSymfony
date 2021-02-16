<?php

namespace App\Entity;

use App\Repository\CouponRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CouponRepository::class)
 */
class Coupon
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $token;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number_of_coupon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link_qrcode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToken(): ?int
    {
        return $this->token;
    }

    public function setToken(int $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getNumberOfCoupon(): ?int
    {
        return $this->number_of_coupon;
    }

    public function setNumberOfCoupon(?int $number_of_coupon): self
    {
        $this->number_of_coupon = $number_of_coupon;

        return $this;
    }

    public function getLinkQrcode(): ?string
    {
        return $this->link_qrcode;
    }

    public function setLinkQrcode(string $link_qrcode): self
    {
        $this->link_qrcode = $link_qrcode;

        return $this;
    }

}
