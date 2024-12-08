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
     * @link https://wechatpay.im/openapi/v3/pay-devices/printers/%7Bdevice_id%7D/print-orders/%7Bprint_order_no%7D
     */
    public function get(array $options = [
        'device_id' => 'WINCIE*EIXHRB',
        'print_order_no' => 'wx8888888888888888',
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/printers/%7Bdevice_id%7D/print-orders/%7Bprint_order_no%7D
     */
    public function getAsync(array $options = [
        'device_id' => 'WINCIE*EIXHRB',
        'print_order_no' => 'wx8888888888888888',
    ]): PromiseInterface;
}
