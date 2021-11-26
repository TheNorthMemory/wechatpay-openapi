<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaysptrans;

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
            'mch_id' => '1900000109',
            'partner_trade_no' => '1212121221227',
            'enc_bank_no' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            'enc_true_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'bank_code' => '1001',
            'amount' => '100000',
            'desc' => '理财',
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
            'mch_id' => '1900000109',
            'partner_trade_no' => '1212121221227',
            'enc_bank_no' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            'enc_true_name' => 'ca775af5f841bdf424b2e6eb86a6e21e',
            'bank_code' => '1001',
            'amount' => '100000',
            'desc' => '理财',
        ],
        'security' => true,
    ]): PromiseInterface;
}
