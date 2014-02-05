<?php

namespace Scope;

class Guard
{
    protected $handler   = null;
    protected $dismissed = false;

    function __construct($handler)
    {
        if (!$handler)
            throw new \InvalidArgumentException('Handler is not specified');
        if (!is_callable($handler))
            throw new \Exception('Handler is not callable');

        $this->handler = $handler;
    }

    public function dismiss($dismiss = true)
    {
        $this->dismissed = $dismiss;
    }

    function __destruct()
    {
        $handler = $this->handler;
        if (!$this->dismissed) $handler();
    }
}
