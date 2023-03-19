<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayDevices\Printers\_device_id_\PrintOrders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _print_order_no_
{
    /**
     * 查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link 服务商查询设备下的打印订单详情
     */
    public function get(array $options = [
        'device_id' => 'WINCIE*EIXHRB',
        'print_order_no' => 'wx8888888888888888',
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link 服务商查询设备下的打印订单详情#async
     */
    public function getAsync(array $options = [
        'device_id' => 'WINCIE*EIXHRB',
        'print_order_no' => 'wx8888888888888888',
    ]): PromiseInterface;
}
