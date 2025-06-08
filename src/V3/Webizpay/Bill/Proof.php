<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Bill;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Proof
{
    /**
     * 申请企业商户企业支付出资凭证(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/bill/proof
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'start_date' => '2025-04-23',
            'end_date' => '2025-04-23',
            'entity_name' => '某某科技有限公司',
            'out_operation_id' => 'operation12345678',
        ],
    ]): ResponseInterface;

    /**
     * 申请企业商户企业支付出资凭证(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/bill/proof
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'start_date' => '2025-04-23',
            'end_date' => '2025-04-23',
            'entity_name' => '某某科技有限公司',
            'out_operation_id' => 'operation12345678',
        ],
    ]): PromiseInterface;
}
