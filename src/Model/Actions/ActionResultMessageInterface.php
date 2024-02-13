<?php

namespace Axytos\KaufAufRechnung\Core\Abstractions\Model\Actions;

use JsonSerializable;

interface ActionResultMessageInterface extends JsonSerializable
{
    /**
     * @return string
     */
    public function getMessage();

    /**
     * @return string|null
     */
    public function getDetails();
}
