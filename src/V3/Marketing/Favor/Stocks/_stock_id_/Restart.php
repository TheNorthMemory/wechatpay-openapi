<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Restart
{
    /**
     * 重启代金券批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_14.shtml
     */
    public function post(array $options = [
        'stock_id' => '',
        'json' => [
            'stock_creator_mchid' => '8956000',
        ],
    ]): ResponseInterface;

    /**
     * 重启代金券批次(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_14.shtml#async
     */
    public function postAsync(array $options = [
        'stock_id' => '',
        'json' => [
            'stock_creator_mchid' => '8956000',
        ],
    ]): PromiseInterface;
}
