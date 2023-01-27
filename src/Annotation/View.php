<?php
namespace ITBMedia\FortnoxBundle\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY","METHOD","ANNOTATION"})
 */
final class View
{
    private array $views;

    /**
     */
    public function __construct(array $views) {
        $this->views = $views;
    }

	/**
	 * @return array
	 */
	public function getViews(): array {
		return $this->views;
	}
	
	/**
	 * @param array $views 
	 * @return self
	 */
	public function setViews(array $views): self {
		$this->views = $views;
		return $this;
	}
}