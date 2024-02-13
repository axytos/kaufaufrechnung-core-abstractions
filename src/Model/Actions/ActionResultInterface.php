<?php

namespace Axytos\KaufAufRechnung\Core\Abstractions\Model\Actions;

use JsonSerializable;

interface ActionResultInterface extends JsonSerializable
{
    /**
     * @return string
     */
    public function getResultCode();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Abstractions\Model\Actions\ActionResultMessageInterface[]
     */
    public function getResult();

    /**
     * @return int
     */
    public function getHttpStatusCode();
}
