<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Billcommentsp;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Batchquerycomment
{
    /**
     * 拉取订单评价数据(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxa/wxa_api.php?chapter=9_17&index=11
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'begin_time' => '20170724000000',
            'end_time' => '20170725000000',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 拉取订单评价数据(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxa/wxa_api.php?chapter=9_17&index=11#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'begin_time' => '20170724000000',
            'end_time' => '20170725000000',
        ],
        'security' => true,
    ]): PromiseInterface;
}
