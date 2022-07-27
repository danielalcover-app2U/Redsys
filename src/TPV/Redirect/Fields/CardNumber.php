<?php

namespace app2u_articstudio\redsys\TPV\Redirect\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\CardNumber as AbstractCardNumber;

class CardNumber extends AbstractCardNumber
{
  
  public static function getOutputKey()
  {
    return 'Ds_Merchant_Pan';
  }
  
}