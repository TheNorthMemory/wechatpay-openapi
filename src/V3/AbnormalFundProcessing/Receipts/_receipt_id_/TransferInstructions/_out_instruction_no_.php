<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AbnormalFundProcessing\Receipts\_receipt_id_\TransferInstructions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_instruction_no_
{
    /**
     * 查询在途异常资金付款指令执行结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/abnormal-fund-processing/receipts/%7Breceipt_id%7D/transfer-instructions/%7Bout_instruction_no%7D
     */
    public function get(array $options = [
        'receipt_id' => '0100011742874700562078230000',
        'out_instruction_no' => '1200002',
    ]): ResponseInterface;

    /**
     * 查询在途异常资金付款指令执行结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/abnormal-fund-processing/receipts/%7Breceipt_id%7D/transfer-instructions/%7Bout_instruction_no%7D
     */
    public function getAsync(array $options = [
        'receipt_id' => '0100011742874700562078230000',
        'out_instruction_no' => '1200002',
    ]): PromiseInterface;
}
