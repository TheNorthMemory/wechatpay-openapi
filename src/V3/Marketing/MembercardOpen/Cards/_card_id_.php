<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _card_id_\Codes $codes
 * @property-read _card_id_\DecryptCode $decryptCode
 * @property-read _card_id_\Qrcode $qrcode
 * @property-read _card_id_\Rights $rights
 * @property-read _card_id_\Upgrade $upgrade
 */
interface _card_id_
{
    /**
     * 查询会员卡模板信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_2.shtml
     */
    public function get(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
    ]): ResponseInterface;

    /**
     * 查询会员卡模板信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
    ]): PromiseInterface;

    /**
     * 修改会员卡模板信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_9.shtml
     */
    public function patch(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'appid' => 'wxea9c30890f48d5ae',
            'logo_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'title' => '微信支付测试卡',
            'background_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'description' => '使用本会员卡表示你同意xxx公司的协议，最终解释权归xxx公司所有',
            'service_phone' => '010-8877xxxx',
            'total_quantity' => 5000000,
            'date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
                'wait_days_after_receive' => 2,
            ],
            'need_display_level' => true,
            'init_level' => '白银会员',
            'balance_information' => [
                'need_balance' => true,
                'balance_appid' => 'wxea9c30890f48d5ae',
                'balance_path' => 'pages/balance/balance',
                'balance_url' => 'https://xxx.com',
            ],
            'user_information_form' => [
                'can_modify_after_activate' => true,
                'common_field_list' => ['string'],
                'custom_field_list' => [[
                    'type' => 'TEXT | SELECT | RADIO | CHECK_BOX',
                    'name' => '喜欢的运动',
                    'values' => ['string'],
                ],],
            ],
            'additional_statement' => [
                'title' => 'xxx会员卡使用须知',
                'url' => 'https://xxx.111.com',
                'appid' => 'wxea9c30890f48d5ae',
                'path' => 'pages/statement/statement',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 修改会员卡模板信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_9.shtml#async
     */
    public function patchAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'appid' => 'wxea9c30890f48d5ae',
            'logo_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'title' => '微信支付测试卡',
            'background_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'description' => '使用本会员卡表示你同意xxx公司的协议，最终解释权归xxx公司所有',
            'service_phone' => '010-8877xxxx',
            'total_quantity' => 5000000,
            'date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
                'wait_days_after_receive' => 2,
            ],
            'need_display_level' => true,
            'init_level' => '白银会员',
            'balance_information' => [
                'need_balance' => true,
                'balance_appid' => 'wxea9c30890f48d5ae',
                'balance_path' => 'pages/balance/balance',
                'balance_url' => 'https://xxx.com',
            ],
            'user_information_form' => [
                'can_modify_after_activate' => true,
                'common_field_list' => ['string'],
                'custom_field_list' => [[
                    'type' => 'TEXT | SELECT | RADIO | CHECK_BOX',
                    'name' => '喜欢的运动',
                    'values' => ['string'],
                ],],
            ],
            'additional_statement' => [
                'title' => 'xxx会员卡使用须知',
                'url' => 'https://xxx.111.com',
                'appid' => 'wxea9c30890f48d5ae',
                'path' => 'pages/statement/statement',
            ],
        ],
    ]): PromiseInterface;

    /**
     * 删除会员卡模板(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_11.shtml
     */
    public function delete(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
    ]): ResponseInterface;

    /**
     * 删除会员卡模板(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter3_11.shtml#async
     */
    public function deleteAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
    ]): PromiseInterface;
}
