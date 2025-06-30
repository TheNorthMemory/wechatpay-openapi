<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AbnormalFundProcessing\Receipts\_receipt_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
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
            'appid' => ['wxf636efh567hg4356'],
            'transfer_mode' => 'TRANSFER_TO_ORIGINAL_RECEIVE_USER',
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
            'appid' => ['wxf636efh567hg4356'],
            'transfer_mode' => 'TRANSFER_TO_ORIGINAL_RECEIVE_USER',
            'notify_url' => 'https://weixin.qq.com',
        ],
    ]): PromiseInterface;
}
