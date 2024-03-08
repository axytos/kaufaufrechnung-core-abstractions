<?php

namespace Axytos\KaufAufRechnung\Core\Abstractions\Model;

abstract class AxytosOrderEvents
{
    const CHECKOUT_BEFORE_CHECK = 'CHECKOUT_BEFORE_CHECK';
    const CHECKOUT_AFTER_REJECTED = 'CHECKOUT_AFTER_REJECTED';
    const CHECKOUT_AFTER_ACCEPTED = 'CHECKOUT_AFTER_ACCEPTED';
    const CHECKOUT_AFTER_CONFIRMED = 'CHECKOUT_AFTER_CONFIRMED';
    const CHECKOUT_AFTER_FAILED = 'CHECKOUT_AFTER_FAILED';
}