<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundsToOversea\Transactions\_transaction_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Available_abroad_amounts
{
    /**
     * 查询订单剩余可出境余额(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_10_1.shtml
     */
    public function get(array $options = [
        'transaction_id' => '4208450740201411110007820472',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单剩余可出境余额(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_10_1.shtml#async
     */
    public function getAsync(array $options = [
        'transaction_id' => '4208450740201411110007820472',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
