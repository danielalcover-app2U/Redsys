<?php

namespace app2u_articstudio\redsys\TPV\Webservice\Fields;

use app2u_articstudio\redsys\TPV\Common\Fields\CVV as AbstractCVV;

class CVV extends AbstractCVV
{
  
  public static function getOutputKey()
  {
    return 'DS_MERCHANT_CVV2';
  }
  
}