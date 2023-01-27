<?php
namespace ITBMedia\FortnoxBundle\Conversion;

use Doctrine\Common\Annotations\Reader;
use ITBMedia\FortnoxBundle\Annotation\View;

class ViewConverter
{
    private Reader $reader;
    private string $annotationClass = View::class;

    /**
     */
    public function __construct(Reader $reader) {
        $this->reader = $reader;
    }

    public function convert($originalObject)
    {
        $convertedObject = new \stdClass;
        $reflectionObject = new \ReflectionObject($originalObject);

        foreach($reflectionObject->getProperties() as $reflectionProperty)
        {
            $annotation = $this->reader->getPropertyAnnotation($reflectionProperty, $this->annotationClass);
            if($annotation !== null)
            {
                print_r($annotation);
                die;
            }
        }
    }
}