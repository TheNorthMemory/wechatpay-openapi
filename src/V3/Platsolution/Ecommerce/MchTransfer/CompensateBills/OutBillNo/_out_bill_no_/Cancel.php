<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer\CompensateBills\OutBillNo\_out_bill_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 请求撤销赔付(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/compensate-bills/out-bill-no/%7Bout_bill_no%7D/cancel
     */
    public function post(array $options = [
        'out_bill_no' => 'plfk2020042013',
    ]): ResponseInterface;

    /**
     * 请求撤销赔付(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/compensate-bills/out-bill-no/%7Bout_bill_no%7D/cancel
     */
    public function postAsync(array $options = [
        'out_bill_no' => 'plfk2020042013',
    ]): PromiseInterface;
}
