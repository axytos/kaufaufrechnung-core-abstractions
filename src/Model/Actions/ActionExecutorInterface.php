<?php

namespace Axytos\KaufAufRechnung\Core\Abstractions\Model\Actions;

interface ActionExecutorInterface
{
    /**
     * @param string                   $clientSecret
     * @param string                   $action
     * @param array<string,mixed>|null $parameters
     *
     * @return ActionResultInterface
     */
    public function executeAction($clientSecret, $action, $parameters = null);
}
