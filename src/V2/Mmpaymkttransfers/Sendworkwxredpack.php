<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sendworkwxredpack
{
    /**
     * 发放企业红包(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/sendworkwxredpack
     */
    public function post(array $options = [
        'xml' => [
            'mch_billno' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'wxappid' => 'wx8888888888888888',
            'agentid' => '1',
            'sender_name' => 'XX活动',
            'sender_header_media_id' => '1G6nrLmr5EC3MMb_-zK1dDdzmd0p7cNliYu9V5w7o8K0',
            're_openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'total_amount' => '1000',
            'wishing' => '感谢您参加猜灯谜活动，祝您元宵节快乐！',
            'act_name' => '猜灯谜抢红包活动',
            'remark' => '猜越多得越多，快来抢！',
            'scene_id' => 'PRODUCT_8',
            'workwx_sign' => 'C380BEC2BFD727A4B6845133519F3AD6',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 发放企业红包(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/sendworkwxredpack
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_billno' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'wxappid' => 'wx8888888888888888',
            'agentid' => '1',
            'sender_name' => 'XX活动',
            'sender_header_media_id' => '1G6nrLmr5EC3MMb_-zK1dDdzmd0p7cNliYu9V5w7o8K0',
            're_openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'total_amount' => '1000',
            'wishing' => '感谢您参加猜灯谜活动，祝您元宵节快乐！',
            'act_name' => '猜灯谜抢红包活动',
            'remark' => '猜越多得越多，快来抢！',
            'scene_id' => 'PRODUCT_8',
            'workwx_sign' => 'C380BEC2BFD727A4B6845133519F3AD6',
        ],
        'security' => true,
    ]): PromiseInterface;
}
