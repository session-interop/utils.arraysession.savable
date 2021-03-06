<?php

namespace Interop\Session\Utils\ArraySession;

use Interop\Session\Utils\ArraySession\ArraySession as Session;


class SavableSession  extends Session implements \Iterator {

    protected $position = 0;

    function rewind() {
       reset($this->storage);
    }

    function current() {
        return current($this->storage);
    }

    function key() {
        return key($this->storage);
    }

    function next() {
        next($this->storage);
    }

    function valid() {
        return key($this->storage) !== null;
    }
}
