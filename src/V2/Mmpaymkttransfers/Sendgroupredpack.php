<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sendgroupredpack
{
    /**
     * 发放裂变红包(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2024.06.05
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/sendgroupredpack
     */
    public function post(array $options = [
        'xml' => [
            'mch_billno' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'wxappid' => 'wx8888888888888888',
            'send_name' => '天虹百货',
            're_openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'total_amount' => '1000',
            'total_num' => '3',
            'amt_type' => 'ALL_RAND',
            'wishing' => '感谢您参加猜灯谜活动，祝您元宵节快乐！',
            'act_name' => '猜灯谜抢红包活动',
            'remark' => '猜越多得越多，快来抢！',
            'scene_id' => 'PRODUCT_8',
            'risk_info' => \urlencode(\WeChatPay\Formatter::queryStringLike([
                'posttime' => 1717171199,
                'mobile' => '122344545',
                'deviceid' => 'IOS',
                'clientversion' => '234134',
            ])),
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 发放裂变红包(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2024.06.05
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/sendgroupredpack
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_billno' => '10000098201411111234567890',
            'mch_id' => '10000098',
            'wxappid' => 'wx8888888888888888',
            'send_name' => '天虹百货',
            're_openid' => 'oxTWIuGaIt6gTKsQRLau2M0yL16E',
            'total_amount' => '1000',
            'total_num' => '3',
            'amt_type' => 'ALL_RAND',
            'wishing' => '感谢您参加猜灯谜活动，祝您元宵节快乐！',
            'act_name' => '猜灯谜抢红包活动',
            'remark' => '猜越多得越多，快来抢！',
            'scene_id' => 'PRODUCT_8',
            'risk_info' => \urlencode(\WeChatPay\Formatter::queryStringLike([
                'posttime' => 1717171199,
                'mobile' => '122344545',
                'deviceid' => 'IOS',
                'clientversion' => '234134',
            ])),
        ],
        'security' => true,
    ]): PromiseInterface;
}
