<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Users;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Import
{
    /**
     * 根据openid导入用户会员卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_13.shtml
     */
    public function post(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'code' => '478515832665',
            'out_request_no' => '100002322019090134234sfdf',
        ],
    ]): ResponseInterface;

    /**
     * 根据openid导入用户会员卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_13.shtml#async
     */
    public function postAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'code' => '478515832665',
            'out_request_no' => '100002322019090134234sfdf',
        ],
    ]): PromiseInterface;
}
