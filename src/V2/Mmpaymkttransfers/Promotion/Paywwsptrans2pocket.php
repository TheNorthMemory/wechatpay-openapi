<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers\Promotion;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Paywwsptrans2pocket
{
    /**
     * 向员工付款(同步模式)
     * @param array<string,mixed> $options
     * @link https://open.work.weixin.qq.com/api/doc/90000/90135/90278
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mchid' => '1900000109',
            'device_info' => '013467007045764',
            'partner_trade_no' => '10000098201411111234567890',
            'openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'check_name' => 'FORCE_CHECK',
            're_user_name' => '王小王',
            'amount' => '10099',
            'desc' => '六月出差报销费用',
            'spbill_create_ip' => '192.168.0.1',
            'workwx_sign' => 'C380BEC2BFD727A4B6845133519F3AD6',
            'ww_msg_type' => 'NORMAL_MSG',
            'approval_number' => '201705160008',
            'approval_type' => '1',
            'act_name' => '产品部门报销',
            'agentid' => '1',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 向员工付款(异步模式)
     * @param array<string,mixed> $options
     * @link https://open.work.weixin.qq.com/api/doc/90000/90135/90278#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mchid' => '1900000109',
            'device_info' => '013467007045764',
            'partner_trade_no' => '10000098201411111234567890',
            'openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'check_name' => 'FORCE_CHECK',
            're_user_name' => '王小王',
            'amount' => '10099',
            'desc' => '六月出差报销费用',
            'spbill_create_ip' => '192.168.0.1',
            'workwx_sign' => 'C380BEC2BFD727A4B6845133519F3AD6',
            'ww_msg_type' => 'NORMAL_MSG',
            'approval_number' => '201705160008',
            'approval_type' => '1',
            'act_name' => '产品部门报销',
            'agentid' => '1',
        ],
        'security' => true,
    ]): PromiseInterface;
}
