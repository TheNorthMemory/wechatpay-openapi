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
            'mch_appid' => 'wx8888888888888888',
            'mchid' => '1900000109',
            'device_info' => '013467007045764',
            'partner_trade_no' => '10000098201411111234567890',
            'openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'check_name' => 'FORCE_CHECK',
            're_user_name' => '王小王',
            'amount' => '10099',
            'desc' => '理赔',
            'spbill_create_ip' => '192.168.0.1',
            'scene' => 'BRAND_REDPACKET',
            'brand_id' => '1234',
            'finder_template_id' => '1243100000000000',
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
            'mch_appid' => 'wx8888888888888888',
            'mchid' => '1900000109',
            'device_info' => '013467007045764',
            'partner_trade_no' => '10000098201411111234567890',
            'openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'check_name' => 'FORCE_CHECK',
            're_user_name' => '王小王',
            'amount' => '10099',
            'desc' => '理赔',
            'spbill_create_ip' => '192.168.0.1',
            'scene' => 'BRAND_REDPACKET',
            'brand_id' => '1234',
            'finder_template_id' => '1243100000000000',
        ],
        'security' => true,
    ]): PromiseInterface;
}
