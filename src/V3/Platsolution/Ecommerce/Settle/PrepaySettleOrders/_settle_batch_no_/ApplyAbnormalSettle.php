<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\Settle\PrepaySettleOrders\_settle_batch_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ApplyAbnormalSettle
{
    /**
     * 个人收款-申请异常结算批次单处理(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/settle/prepay-settle-orders/%7Bsettle_batch_no%7D/apply-abnormal-settle
     */
    public function post(array $options = [
        'settle_batch_no' => '123685544886666',
        'json' => [
            'individual_auth_id' => '256322110225',
            'out_abnormal_settle_batch_no' => '1236698745558870',
            'abnormal_settle_type' => 'TRANSFER_TO_ORIGINAL_RECEIVE_USER',
            'description' => 'xx结算失败，转付至原用户',
        ],
    ]): ResponseInterface;

    /**
     * 个人收款-申请异常结算批次单处理(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/settle/prepay-settle-orders/%7Bsettle_batch_no%7D/apply-abnormal-settle
     */
    public function postAsync(array $options = [
        'settle_batch_no' => '123685544886666',
        'json' => [
            'individual_auth_id' => '256322110225',
            'out_abnormal_settle_batch_no' => '1236698745558870',
            'abnormal_settle_type' => 'TRANSFER_TO_ORIGINAL_RECEIVE_USER',
            'description' => 'xx结算失败，转付至原用户',
        ],
    ]): PromiseInterface;
}
