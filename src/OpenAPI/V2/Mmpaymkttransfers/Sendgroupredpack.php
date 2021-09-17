<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Sendgroupredpack
{
    /**
     * 发放裂变红包(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/cash_coupon.php?chapter=13_5&index=4
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
            'risk_info' => 'posttime%3d123123412%26clientversion%3d234134%26mobile%3d122344545%26deviceid%3dIOS',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 发放裂变红包(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/tools/cash_coupon.php?chapter=13_5&index=4#async
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
            'risk_info' => 'posttime%3d123123412%26clientversion%3d234134%26mobile%3d122344545%26deviceid%3dIOS',
        ],
        'security' => true,
    ]): PromiseInterface;
}
