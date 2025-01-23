<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer\CompensateBills\OutBillNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_bill_no_\Cancel $cancel
 */
interface _out_bill_no_
{
    /**
     * 查询赔付结果（按商户赔付单号）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/compensate-bills/out-bill-no/%7Bout_bill_no%7D
     */
    public function get(array $options = [
        'out_bill_no' => 'plfk2020042013',
    ]): ResponseInterface;

    /**
     * 查询赔付结果（按商户赔付单号）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/compensate-bills/out-bill-no/%7Bout_bill_no%7D
     */
    public function getAsync(array $options = [
        'out_bill_no' => 'plfk2020042013',
    ]): PromiseInterface;
}
