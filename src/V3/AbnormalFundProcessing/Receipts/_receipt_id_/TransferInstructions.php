<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AbnormalFundProcessing\Receipts\_receipt_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read TransferInstructions\_out_instruction_no_ $_out_instruction_no_
 */
interface TransferInstructions
{
    /**
     * 发起在途异常资金付款指令(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/abnormal-fund-processing/receipts/%7Breceipt_id%7D/transfer-instructions
     */
    public function post(array $options = [
        'receipt_id' => '0100011742874700562078230000',
        'json' => [
            'out_instruction_no' => '1200002',
            'transfer_mode' => 'TRANSFER_TO_ORIGINAL_RECEIVE_USER | TRANSFER_MODE_TO_ORIGINAL_RECEIVE_MERCHANT | TRANSFER_MODE_TO_SPECIFIED_RECEIVE_MERCHANT',
            'receiver' => [
                'mchid' => '1900001108',
            ],
            'notify_url' => 'https://weixin.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 发起在途异常资金付款指令(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/abnormal-fund-processing/receipts/%7Breceipt_id%7D/transfer-instructions
     */
    public function postAsync(array $options = [
        'receipt_id' => '0100011742874700562078230000',
        'json' => [
            'out_instruction_no' => '1200002',
            'transfer_mode' => 'TRANSFER_TO_ORIGINAL_RECEIVE_USER | TRANSFER_MODE_TO_ORIGINAL_RECEIVE_MERCHANT | TRANSFER_MODE_TO_SPECIFIED_RECEIVE_MERCHANT',
            'receiver' => [
                'mchid' => '1900001108',
            ],
            'notify_url' => 'https://weixin.qq.com',
        ],
    ]): PromiseInterface;
}
