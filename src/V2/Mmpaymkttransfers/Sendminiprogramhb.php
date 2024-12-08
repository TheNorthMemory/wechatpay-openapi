<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sendminiprogramhb
{
    /**
     * 发放小程序红包接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/sendminiprogramhb
     */
    public function post(array $options = [
        'xml' => [
            'mch_billno' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'wxappid' => 'wx8888888888888888',
            'send_name' => '天虹百货',
            're_openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'total_amount' => '1000',
            'total_num' => '1',
            'wishing' => '感谢您参加猜灯谜活动，祝您元宵节快乐！',
            'act_name' => '猜灯谜抢红包活动',
            'remark' => '猜越多得越多，快来抢！',
            'notify_way' => 'MINI_PROGRAM_JSAPI',
            'scene_id' => 'PRODUCT_8',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 发放小程序红包接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/sendminiprogramhb
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_billno' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'wxappid' => 'wx8888888888888888',
            'send_name' => '天虹百货',
            're_openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'total_amount' => '1000',
            'total_num' => '1',
            'wishing' => '感谢您参加猜灯谜活动，祝您元宵节快乐！',
            'act_name' => '猜灯谜抢红包活动',
            'remark' => '猜越多得越多，快来抢！',
            'notify_way' => 'MINI_PROGRAM_JSAPI',
            'scene_id' => 'PRODUCT_8',
        ],
        'security' => true,
    ]): PromiseInterface;
}
