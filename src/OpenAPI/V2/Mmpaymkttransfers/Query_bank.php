<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Query_bank
{
    /**
     * 查询企业付款银行卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay.php?chapter=24_3
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '',
            'partner_trade_no' => '',
            'nonce_str' => '',
            'sign' => '',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询企业付款银行卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay.php?chapter=24_3#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '',
            'partner_trade_no' => '',
            'nonce_str' => '',
            'sign' => '',
        ],
        'security' => true,
    ]): PromiseInterface;
}
