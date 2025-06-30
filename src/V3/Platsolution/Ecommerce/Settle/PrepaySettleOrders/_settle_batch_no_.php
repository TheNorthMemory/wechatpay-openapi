<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\Settle\PrepaySettleOrders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _settle_batch_no_\ApplyAbnormalSettle $applyAbnormalSettle
 */
interface _settle_batch_no_
{
    /**
     * 个人收款-查询批量结算信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/settle/prepay-settle-orders/%7Bsettle_batch_no%7D
     */
    public function get(array $options = [
        'settle_batch_no' => '123685544886666',
    ]): ResponseInterface;

    /**
     * 个人收款-查询批量结算信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/settle/prepay-settle-orders/%7Bsettle_batch_no%7D
     */
    public function getAsync(array $options = [
        'settle_batch_no' => '123685544886666',
    ]): PromiseInterface;
}
