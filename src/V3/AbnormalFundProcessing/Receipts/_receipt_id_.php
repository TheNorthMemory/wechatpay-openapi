<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AbnormalFundProcessing\Receipts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _receipt_id_\TransferInstructions $transferInstructions
 */
interface _receipt_id_
{
    /**
     * 查询在途异常资金付款结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/abnormal-fund-processing/receipts/%7Breceipt_id%7D
     */
    public function get(array $options = [
        'receipt_id' => '0100011742874700562078230000',
    ]): ResponseInterface;

    /**
     * 查询在途异常资金付款结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/abnormal-fund-processing/receipts/%7Breceipt_id%7D
     */
    public function getAsync(array $options = [
        'receipt_id' => '0100011742874700562078230000',
    ]): PromiseInterface;
}
