<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Cards\_card_id_ $_card_id_
 */
interface Cards
{
    /**
     * 创建会员卡模板(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxea9c30890f48d5ae',
            'logo_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'brand' => [
                'brand_id' => '1004',
                'display_name' => '微信支付',
            ],
            'title' => '微信支付测试卡',
            'background_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'description' => '使用本会员卡表示你同意xxx公司的协议，最终解释权归xxx公司所有',
            'service_phone' => '010-8877xxxx',
            'code_type' => 'BAR_CODE | QRCODE | BAR_CODE_AND_QRCODE | NONE_CODE',
            'total_quantity' => 5000000,
            'date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_begin_time' => '2020-05-20T13:29:35.120+08:00',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
            ],
            'code_mode' => 'SYSTEM_ALLOCATE | MERCHANT_DEPOSIT | REAL_TIME',
            'need_display_level' => true,
            'init_level' => '白银会员',
            'out_request_no' => '100002322019090134234sfdf',
            'balance_information' => [
                'need_balance' => true,
                'balance_appid' => 'wxea9c30890f48d5ae',
                'balance_path' => 'pages/balance/balance',
                'balance_url' => 'https://xxx.com',
            ],
            'user_information_form' => [
                'common_field_list' => ['USER_FORM_FLAG_MOBILE'],
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
     * 创建会员卡模板(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxea9c30890f48d5ae',
            'logo_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'brand' => [
                'brand_id' => '1004',
                'display_name' => '微信支付',
            ],
            'title' => '微信支付测试卡',
            'background_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'description' => '使用本会员卡表示你同意xxx公司的协议，最终解释权归xxx公司所有',
            'service_phone' => '010-8877xxxx',
            'code_type' => 'BAR_CODE | QRCODE | BAR_CODE_AND_QRCODE | NONE_CODE',
            'total_quantity' => 5000000,
            'date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_begin_time' => '2020-05-20T13:29:35.120+08:00',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
            ],
            'code_mode' => 'SYSTEM_ALLOCATE | MERCHANT_DEPOSIT | REAL_TIME',
            'need_display_level' => true,
            'init_level' => '白银会员',
            'out_request_no' => '100002322019090134234sfdf',
            'balance_information' => [
                'need_balance' => true,
                'balance_appid' => 'wxea9c30890f48d5ae',
                'balance_path' => 'pages/balance/balance',
                'balance_url' => 'https://xxx.com',
            ],
            'user_information_form' => [
                'common_field_list' => ['USER_FORM_FLAG_MOBILE'],
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
     * 查询会员卡模板列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards#get
     */
    public function get(array $options = [
        'query' => [
            'brand_id' => '1001622624',
            'appid' => 'wxea9c30890f48d5ae',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询会员卡模板列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards#get
     */
    public function getAsync(array $options = [
        'query' => [
            'brand_id' => '1001622624',
            'appid' => 'wxea9c30890f48d5ae',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
