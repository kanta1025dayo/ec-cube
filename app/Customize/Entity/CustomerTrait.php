<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerTrait
{
    /**
     * @var string|null
     * @ORM\Column(type="string", length=14, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": false,
     *          "label": "携帯電話番号",
     *          "attr": {"placeholder": "例：09000000000"}
     *     })
     */
    private $mobile_number;

    /**
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->mobile_number;
    }

    /**
     * @param string|null $mobile_number
     * @return CustomerTrait
     */
    public function setMobileNumber($mobile_number)
    {
        $this->mobile_number = $mobile_number;
        return $this;
    }
}