<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer\CompensateBills\BillId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _bill_id_
{
    /**
     * 查询赔付结果（按微信支付赔付单号）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/compensate-bills/bill-id/%7Bbill_id%7D
     */
    public function get(array $options = [
        'bill_id' => '1330000071100999991182020050700019480001',
    ]): ResponseInterface;

    /**
     * 查询赔付结果（按微信支付赔付单号）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/compensate-bills/bill-id/%7Bbill_id%7D
     */
    public function getAsync(array $options = [
        'bill_id' => '1330000071100999991182020050700019480001',
    ]): PromiseInterface;
}
