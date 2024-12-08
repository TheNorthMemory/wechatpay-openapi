<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Start
{
    /**
     * 激活代金券批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/start
     */
    public function post(array $options = [
        'stock_id' => '',
        'json' => [
            'stock_creator_mchid' => '8956000',
        ],
    ]): ResponseInterface;

    /**
     * 激活代金券批次(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/start
     */
    public function postAsync(array $options = [
        'stock_id' => '',
        'json' => [
            'stock_creator_mchid' => '8956000',
        ],
    ]): PromiseInterface;
}
