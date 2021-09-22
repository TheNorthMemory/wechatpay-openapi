<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mchrisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Setmchriskcallback
{
    /**
     * 设置风险通知回调链接(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_294
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'callback_url' => 'https://pay.weixin.qq.com/wxpay/risk.action',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 设置风险通知回调链接(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/mch_bank.php?chapter=9_294#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'callback_url' => 'https://pay.weixin.qq.com/wxpay/risk.action',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
