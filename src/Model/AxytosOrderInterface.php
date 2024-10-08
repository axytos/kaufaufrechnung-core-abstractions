<?php

namespace Axytos\KaufAufRechnung\Core\Abstractions\Model;

interface AxytosOrderInterface
{
    /**
     * @param string $eventName
     *
     * @phpstan-param \Axytos\KaufAufRechnung\Core\Abstractions\Model\AxytosOrderEvents::* $eventName
     *
     * @param callable $eventListener
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
     * @return void
     */
    public function checkout();

    // ========================================================
    // sync

    /**
     * @return void
     */
    public function sync();
}
