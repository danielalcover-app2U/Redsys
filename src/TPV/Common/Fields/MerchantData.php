<?php

namespace app2u_articstudio\redsys\TPV\Common\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\Field;

abstract class MerchantData extends Field
{
  
  public static function getKey()
  {
    return 'merchant_data';
  }

  protected function normalize()
  {
    if ($this->isValid())
    {
      $this->normalized = $this->value;
    }
    else
    {
      $this->normalized = null;
    }
  }

  protected function validate()
  {
    $this->valid = (is_string($this->value) && !empty($this->value));
  }
  
}