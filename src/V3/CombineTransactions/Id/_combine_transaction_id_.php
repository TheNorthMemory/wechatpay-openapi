<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CombineTransactions\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _combine_transaction_id_
{
    /**
     * 个人收款交易通过微信支付订单号查单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/personal-collections/query-by-wx-trade-no.html
     */
    public function get(array $options = [
        'combine_transaction_id' => '1217752501201407033233368018',
    ]): ResponseInterface;

    /**
     * 个人收款交易通过微信支付订单号查单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/personal-collections/query-by-wx-trade-no.html#async
     */
    public function getAsync(array $options = [
        'combine_transaction_id' => '1217752501201407033233368018',
    ]): PromiseInterface;
}
