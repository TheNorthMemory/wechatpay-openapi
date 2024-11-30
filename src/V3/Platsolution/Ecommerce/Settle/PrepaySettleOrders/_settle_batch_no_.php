<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\Settle\PrepaySettleOrders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _settle_batch_no_
{
    /**
     * 个人收款-查询批量结算信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/personal-collections/get-prepay-settle-orders.html
     */
    public function get(array $options = [
        'settle_batch_no' => '123685544886666',
    ]): ResponseInterface;

    /**
     * 个人收款-查询批量结算信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/personal-collections/get-prepay-settle-orders.html#async
     */
    public function getAsync(array $options = [
        'settle_batch_no' => '123685544886666',
    ]): PromiseInterface;
}
