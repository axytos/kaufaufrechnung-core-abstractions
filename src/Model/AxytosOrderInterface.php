<?php

namespace Axytos\KaufAufRechnung\Core\Abstractions\Model;

interface AxytosOrderInterface
{
    /**
     * @param string   $eventName
     * @param callable $eventListener
     *
     * @phpstan-param \Axytos\KaufAufRechnung\Core\Abstractions\Model\AxytosOrderEvents::* $eventName
     *
     * @return void
     */
    public function subscribeEventListener($eventName, $eventListener);

    // ========================================================
    // checkout

    /**
     * @return string
     *
     * @phpstan-return \Axytos\KaufAufRechnung\Core\Abstractions\Model\AxytosOrderCheckoutAction::*
     */
    public function getOrderCheckoutAction();

    /**
     * @param bool $skipPrecheck
     *
     * @return void
     */
    public function checkout($skipPrecheck);

    // ========================================================
    // sync

    /**
     * @return void
     */
    public function sync();
}
