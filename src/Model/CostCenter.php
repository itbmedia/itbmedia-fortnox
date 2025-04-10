<?php

namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SkipWhenEmpty;

class CostCenter implements SerializableInterface
{
    /**
     * @var string
     * @Type("string")
     * @SkipWhenEmpty()
     * @SerializedName("@url")
     */
    private ?string $url = null;

    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("Active")
     */
    private $active;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("Code")
     * @SkipWhenEmpty()
     */
    private ?string $code;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("Description")
     * @SkipWhenEmpty()
     */
    private ?string $description;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("Note")
     * @SkipWhenEmpty()
     */
    private $note;

    /**
     *
     * @SkipWhenEmpty()
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     *
     * @param string $url
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * 
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * 
     * @param bool $active 
     * @return self
     */
    public function setActive($active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     *
     * @param string $code
     * @return self
     */

    public function setCode($code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDescription()

    {
        return $this->description;
    }

    /**
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     *
     * @param string $note
     * @return self
     */
    public function setNote($note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return SerializerBuilder::create()->build()->serialize($this, 'json');
    }

    /**
     * @return CostCenter
     */
    public static function deserialize(string $data)
    {
        return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return SerializerBuilder::create()->build()->toArray($this);
    }

    /**
     * @return CostCenter
     */
    public static function fromArray(array $data)
    {
        return SerializerBuilder::create()->build()->fromArray($data, self::class);
    }
}
