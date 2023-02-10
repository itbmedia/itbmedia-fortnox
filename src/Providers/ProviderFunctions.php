<?php
namespace ITBMedia\FortnoxBundle\Providers;
use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;

class ProviderFunctions implements ExpressionFunctionProviderInterface
{
    public function getFunctions()
    {
        return [
            new ExpressionFunction('empty', function($value){
                return sprintf('(is_string(%1$s) && empty(%1$s))', $value);
            },
            function(array $variables, $value){
                if(!is_string($value))
                {
                    return false;
                } else{
                    return empty($value);
                }
            }),
        ];
    }
}