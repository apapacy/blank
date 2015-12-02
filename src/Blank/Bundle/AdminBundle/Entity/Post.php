<?php
namespace Blank\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JMS\Serializer\Annotation as Serializer;

/**
 * @ORM\Entity(repositoryClass="PostRepository")
 * @ORM\Table(name="post", indexes={@ORM\Index(name="post_payProperty", columns={"payProperty"})})
 */
class Post
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Serializer\Groups({">", "twist"})
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=64)
     * @Serializer\Groups({"list", "details"})
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $phone;

    /**
     * @ORM\Column(type="string", length=264)
     */
    protected $product;

    /**
     * @ORM\Column(type="decimal",  precision=20, scale=2)
     */
    protected $price;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    protected $dateEmail;

    /**
     * @ORM\Column(type="string", length=264)
     */
    protected $place;

    /**
     * @ORM\Column(type="string", length=264)
     */
    protected $transport;

    /**
     * @ORM\Column(type="string", length=264)
     */
    protected $payMethod;

    /**
     * @ORM\Column(type="string", length=264, nullable=true)
     */
    protected $payProperty;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="change", field={"payProperty"})
     */
    protected $datePayment;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default":false})
     */
    protected $isClosed;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="change", field={"isClosed"})
     */
    protected $dateClosing;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $memo;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Post
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Post
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Post
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set product
     *
     * @param string $product
     *
     * @return Post
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Post
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set dateEmail
     *
     * @param \DateTime $dateEmail
     *
     * @return Post
     */
    public function setDateEmail($dateEmail)
    {
        $this->dateEmail = $dateEmail;

        return $this;
    }

    /**
     * Get dateEmail
     *
     * @return \DateTime
     */
    public function getDateEmail()
    {
        return $this->dateEmail;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Post
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set transport
     *
     * @param string $transport
     *
     * @return Post
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set payMethod
     *
     * @param string $payMethod
     *
     * @return Post
     */
    public function setPayMethod($payMethod)
    {
        $this->payMethod = $payMethod;

        return $this;
    }

    /**
     * Get payMethod
     *
     * @return string
     */
    public function getPayMethod()
    {
        return $this->payMethod;
    }

    /**
     * Set payProperty
     *
     * @param string $payProperty
     *
     * @return Post
     */
    public function setPayProperty($payProperty)
    {
        $this->payProperty = $payProperty;

        return $this;
    }

    /**
     * Get payProperty
     *
     * @return string
     */
    public function getPayProperty()
    {
        return $this->payProperty;
    }

    /**
     * Set datePayment
     *
     * @param \DateTime $datePayment
     *
     * @return Post
     */
    public function setDatePayment($datePayment)
    {
        $this->datePayment = $datePayment;

        return $this;
    }

    /**
     * Get datePayment
     *
     * @return \DateTime
     */
    public function getDatePayment()
    {
        return $this->datePayment;
    }

    /**
     * Set isClosed
     *
     * @param boolean $isClosed
     *
     * @return Post
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    /**
     * Get isClosed
     *
     * @return boolean
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Set dateClosing
     *
     * @param \DateTime $dateClosing
     *
     * @return Post
     */
    public function setDateClosing($dateClosing)
    {
        $this->dateClosing = $dateClosing;

        return $this;
    }

    /**
     * Get dateClosing
     *
     * @return \DateTime
     */
    public function getDateClosing()
    {
        return $this->dateClosing;
    }

    /**
     * Set memo
     *
     * @param string $memo
     *
     * @return Post
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }
}
