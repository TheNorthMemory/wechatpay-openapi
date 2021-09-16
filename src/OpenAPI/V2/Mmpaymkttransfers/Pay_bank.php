<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Pay_bank
{
    /**
     * 企业付款到银行卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay.php?chapter=24_2
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '',
            'partner_trade_no' => '',
            'nonce_str' => '',
            'sign' => '',
            'enc_bank_no' => '',
            'enc_true_name' => '',
            'bank_code' => '',
            'amount' => '0',
            'desc' => '',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 企业付款到银行卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay.php?chapter=24_2#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '',
            'partner_trade_no' => '',
            'nonce_str' => '',
            'sign' => '',
            'enc_bank_no' => '',
            'enc_true_name' => '',
            'bank_code' => '',
            'amount' => '0',
            'desc' => '',
        ],
        'security' => true,
    ]): PromiseInterface;
}
