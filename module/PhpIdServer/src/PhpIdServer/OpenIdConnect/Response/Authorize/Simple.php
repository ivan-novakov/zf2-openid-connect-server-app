<?php

namespace PhpIdServer\OpenIdConnect\Response\Authorize;

use PhpIdServer\OpenIdConnect\Response\Exception;


class Simple extends AbstractAuthorizeResponse
{


    public function setAuthorizationCode($code)
    {
        $this->addField(Field::CODE, $code);
    }


    public function setState($state)
    {
        $this->addField(Field::STATE, $state);
    }


    protected function constructRedirectUri()
    {
        if (NULL === $this->redirectLocation) {
            throw new Exception\NoRedirectLocationException();
        }
        
        if (! $this->isField(Field::CODE)) {
            throw new Exception\MissingFieldException(Field::CODE);
        }
        
        $uri = \Zend\Uri\UriFactory::factory($this->redirectLocation);
        $uri->setQuery($this->getFields());
        $uri->normalize();
        
        return $uri->toString();
    }
}