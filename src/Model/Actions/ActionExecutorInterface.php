<?php

namespace Axytos\KaufAufRechnung\Core\Abstractions\Model\Actions;

interface ActionExecutorInterface
{
    /**
     * @param string $clientSecret
     * @param string $action
     * @param array<string,mixed>|null $parameters
     * @return \Axytos\KaufAufRechnung\Core\Abstractions\Model\Actions\ActionResultInterface
     */
    public function executeAction($clientSecret, $action, $parameters = null);
}
