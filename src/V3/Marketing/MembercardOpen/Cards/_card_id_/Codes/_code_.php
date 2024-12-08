<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Codes;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _code_\Bonus $bonus
 * @property-read _code_\Activate $activate
 * @property-read _code_\Rights $rights
 * @property-read _code_\Unavailable $unavailable
 */
interface _code_
{
    /**
     * 查询用户会员卡信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D
     */
    public function get(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'code' => '478515832665',
    ]): ResponseInterface;

    /**
     * 查询用户会员卡信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D
     */
    public function getAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'code' => '478515832665',
    ]): PromiseInterface;

    /**
     * 修改用户会员卡信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D#patch
     */
    public function patch(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'code' => '478515832665',
        'json' => [
            'membership_number' => '316510891298',
            'background_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'level' => '钻石会员',
            'out_request_no' => '100002322019090134234sfdf',
            'balance_information' => [
                'before_balance' => 888,
                'balance' => 888,
                'add_balance' => 100,
                'balance_remark' => '购买一杯珍珠奶茶，消耗30元',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 修改用户会员卡信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D#patch
     */
    public function patchAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'code' => '478515832665',
        'json' => [
            'membership_number' => '316510891298',
            'background_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'level' => '钻石会员',
            'out_request_no' => '100002322019090134234sfdf',
            'balance_information' => [
                'before_balance' => 888,
                'balance' => 888,
                'add_balance' => 100,
                'balance_remark' => '购买一杯珍珠奶茶，消耗30元',
            ],
        ],
    ]): PromiseInterface;
}
