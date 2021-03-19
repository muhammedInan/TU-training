<?php 

namespace Core\Exception;

class RouteException extends \Exception
{
  public function __construct($message, $code = 404)
  {
    parent::__construct($message, $code);
  }
  
  public function __toString()
  {
    return $this->message;
  }


}