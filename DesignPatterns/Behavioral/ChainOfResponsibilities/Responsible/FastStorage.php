<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

require_once __DIR__ . '/../Handler.php';
require_once __DIR__ . '/../Request.php';

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Request;

/**
 * FastStorage类
 */
class FastStorage extends Handler
{
    /**
     * @var array
     */
    protected $data = array();

    /**
     * @param array $data
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    protected function processing(Request $req)
    {
        if ('get' === $req->verb) {
            if (array_key_exists($req->key, $this->data)) {
                $req->response = $this->data[$req->key];
                return true;
            }
        }

        return false;
    }
}