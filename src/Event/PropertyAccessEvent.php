<?php
namespace ITBMedia\FortnoxBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class PropertyAccessEvent extends Event
{
    const NAME = "itbmedia_annotation.access_event";
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

    public function __construct(object $object)
    {
        $this->object = $object;
    }
}