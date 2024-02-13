<?php

namespace Axytos\KaufAufRechnung\Core\Abstractions\Model;

abstract class AxytosOrderCheckoutAction
{
    const COMPLETE_CHECKOUT = 'COMPLETE_CHECKOUT';
    const CHANGE_PAYMENT_METHOD = 'CHANGE_PAYMENT_METHOD';
}
