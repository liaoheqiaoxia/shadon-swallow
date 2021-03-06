<?php

/*
 * PHP version 5.4
 *
 * @copyright Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link      http://www.eelly.com
 * @license   衣联网版权所有
 */
namespace Swallow\Exception;

/**
 * 逻辑异常
 *
 * 程序中的逻辑错误产生的异常
 *
 * @link     http://php.net/manual/zh/class.logicexception.php
 * @author   SpiritTeam
 * @since    2015年4月15日
 * @version  1.0
 */
class LogicException extends \LogicException
{

    /**
     * 返回参数
     * @var mixed
     */
    protected $args;

    /**
     * 构造方法
     * 
     * @param string     $message
     * @param int        $code
     * @param mixed      $args
     * @param \Exception $previous
     */
    public function __construct($message, $code = StatusCode::UNKNOW_ERROR, $args = null, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        isset($args) && $this->args = $args;
    }

    /**
     * 返回参数
     * 
     * @mixed
     */
    public function getArgs()
    {
        return $this->args;
    }
}