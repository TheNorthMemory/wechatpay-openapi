<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Sendredpack
{
    /**
     * 发放普通红包(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/cash_coupon.php?chapter=13_4&index=3
     */
    public function post(array $options = [
        'xml' => [
            'nonce_str' => '',
            'sign' => '',
            'mch_billno' => '',
            'mch_id' => '',
            'wxappid' => '',
            'send_name' => '',
            're_openid' => '',
            'total_amount' => '0',
            'total_num' => '0',
            'wishing' => '',
            'client_ip' => '',
            'act_name' => '',
            'remark' => '',
            'scene_id' => '',
            'risk_info' => '',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 发放普通红包(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/cash_coupon.php?chapter=13_4&index=3#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'nonce_str' => '',
            'sign' => '',
            'mch_billno' => '',
            'mch_id' => '',
            'wxappid' => '',
            'send_name' => '',
            're_openid' => '',
            'total_amount' => '0',
            'total_num' => '0',
            'wishing' => '',
            'client_ip' => '',
            'act_name' => '',
            'remark' => '',
            'scene_id' => '',
            'risk_info' => '',
        ],
        'security' => true,
    ]): PromiseInterface;
}
