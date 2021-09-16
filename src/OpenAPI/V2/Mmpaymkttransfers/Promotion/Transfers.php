<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers\Promotion;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Transfers
{
    /**
     * 向微信用户个人付款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay.php?chapter=14_2
     */
    public function post(array $options = [
        'xml' => [
            'mch_appid' => '',
            'mchid' => '',
            'device_info' => '',
            'nonce_str' => '',
            'sign' => '',
            'partner_trade_no' => '',
            'openid' => '',
            'check_name' => '',
            're_user_name' => '',
            'amount' => '0',
            'desc' => '',
            'spbill_create_ip' => '',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 向微信用户个人付款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/mch_pay.php?chapter=14_2#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_appid' => '',
            'mchid' => '',
            'device_info' => '',
            'nonce_str' => '',
            'sign' => '',
            'partner_trade_no' => '',
            'openid' => '',
            'check_name' => '',
            're_user_name' => '',
            'amount' => '0',
            'desc' => '',
            'spbill_create_ip' => '',
        ],
        'security' => true,
    ]): PromiseInterface;
}
