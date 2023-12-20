<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class IsMacArgumentValueResolver implements ArgumentValueResolverInterface
{
  public function supports(Request $request, ArgumentMetadata $argument)
  {
    return $argument->getName() === 'isMac' && $request->attributes->has('_isMac');
  }

  public function resolve(Request $request, ArgumentMetadata $argument)
  {
    yield $request->attributes->has('_isMac');
  }
}