<?php
namespace ITBMedia\FortnoxBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class PropertyAccessEvent extends Event
{
    const NAME = "itbmedia_annotation.access_event";
	private $key;
    private object $object;

    /**
	 * @return object
	 */
	public function getObject(): object {
		return $this->object;
	}
	
	/**
	 * @param object $user 
	 * @return self
	 */
	public function setObject(object $object): self {
		$this->object = $object;
		return $this;
	}	
	
	/**
	 * @return mixed
	 */
	public function getKey() {
		return $this->key;
	}
	
	/**
	 * @param mixed $key 
	 * @return self
	 */
	public function setKey($key): self {
		$this->key = $key;
		return $this;
	}

    public function __construct($key ,object $object)
    {
		$this->key = $key;
        $this->object = $object;
    }
}