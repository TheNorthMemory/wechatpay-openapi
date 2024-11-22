<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _contract_id_
{
    /**
     * 签约查询接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html
     */
    public function get(array $options = [
        'contract_id' => 'CI8CD208Z7e9906f89',
        'query' => [
            'appid' => 'wx8888888888',
        ],
    ]): ResponseInterface;

    /**
     * 签约查询接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html#async
     */
    public function getAsync(array $options = [
        'contract_id' => 'CI8CD208Z7e9906f89',
        'query' => [
            'appid' => 'wx8888888888',
        ],
    ]): PromiseInterface;
}
