<?php

class Yar_Server
{
    protected $_executor;

    /**
     * Yar_Server constructor.
     * @param object $obj an Object, all public methods of its will be registered as RPC services.
     * return Yar_Server
     */
    final public function __construct($obj)
    {
    }

    /**
     * Start a RPC HTTP server, and ready for accpet RPC requests.
     */
    public function handle()
    {
    }
}

class Yar_Client
{
    protected $_protocol;
    protected $_uri;
    protected $_options;
    protected $_running;

    /** Issue a call to remote RPC method.
     * @param $method
     * @param $parameters
     */
    public function __call($method, $parameters)
    {
    }

    /** Create a Yar_Client to a Yar_Server.
     * Yar_client constructor.
     * @param string $url Yar Server URL.
     */
    final public function __construct($url)
    {
    }

    /**  Set calling contexts
     * @param int $name it can be: YAR_OPT_PACKAGER, YAR_OPT_PERSISTENT (Need server support), YAR_OPT_TIMEOUT, YAR_OPT_CONNECT_TIMEOUT
     * @param mixed $value
     */
    public function setOpt($name, $value)
    {
    }
}

class Yar_Concurrent_Client
{

    /* Properties */
    static $_callstack;
    static $_callback;
    static $_error_callback;

    /**
     * @param string $uri The RPC server URI(http, tc
     * @param string $method Service name(aka the method name)
     * @param array $parameters Parameters
     * @param callable $callback A function callback, which will be called while the response return.
     */
    public static function call($uri, $method, $parameters, $callback)
    {
    }

    /** Send all calls
     * @param callable $callback If this callback is set, then Yar will call this callback after all calls are sent and before any response return, with a $callinfo NULL.
     * Then, if user didn't specify callback when registering concurrent call, this callback will be used to handle response, otherwise, the callback specified while registering will be used.
     * @param callable $error_callback If this callback is set, then Yar will call this callback while error occurred.
     */
    public static function loop(callable $callback, callable $error_callback)
    {
    }

    /**
     *  Clean all registered calls
     */
    public static function reset()
    {
    }
}

class Yar_Server_Exception extends Exception
{
    /* Properties */
    protected $_type;

    /**
     *   The getType purpose
     */
    public function getType()
    {
    }
}

class Yar_Client_Exception extends Exception
{
    /* Properties */
    protected $_type;

    /**
     *   The getType purpose
     */
    public function getType()
    {
    }
}