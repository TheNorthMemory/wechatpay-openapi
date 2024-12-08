<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\EntrustSign\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface PreEntrustSign
{
    /**
     * 代扣预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/entrust-sign/contracts/pre-entrust-sign
     */
    public function post(array $options = [
        'json' => [
            'sign_scene' => 'SIGN_SCENE_APP',
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'contract_display_account' => '微信代扣用户A',
            'contract_notify_url' => 'https://yourapp.com/notify',
            'out_user_code' => '用户A',
            'return_url' => 'https://yourapp.com/notify',
            'device_info' => [
                'device_type' => 'DEVICE_TYPE_UNKNOW | DEVICE_TYPE_PHONE | DEVICE_TYPE_PAD | DEVICE_TYPE_TV',
                'device_os' => 'example_device_os',
                'device_id' => 'example_device_id',
                'device_running_as_root' => true,
                'device_ip' => 'example_device_ip',
                'weixin_installed' => true,
                'weixin_version' => 'example_weixin_version',
                'days_since_first_login' => 'DAYS_SINCE_FIRST_LOGIN_UNKNOW | DAYS_SINCE_FIRST_LOGIN_WITHIN_1_DAY | DAYS_SINCE_FIRST_LOGIN_WITHIN_7_DAYS | DAYS_SINCE_FIRST_LOGIN_WITHIN_30_DAYS',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 代扣预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/entrust-sign/contracts/pre-entrust-sign
     */
    public function postAsync(array $options = [
        'json' => [
            'sign_scene' => 'SIGN_SCENE_APP',
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'contract_display_account' => '微信代扣用户A',
            'contract_notify_url' => 'https://yourapp.com/notify',
            'out_user_code' => '用户A',
            'return_url' => 'https://yourapp.com/notify',
            'device_info' => [
                'device_type' => 'DEVICE_TYPE_UNKNOW | DEVICE_TYPE_PHONE | DEVICE_TYPE_PAD | DEVICE_TYPE_TV',
                'device_os' => 'example_device_os',
                'device_id' => 'example_device_id',
                'device_running_as_root' => true,
                'device_ip' => 'example_device_ip',
                'weixin_installed' => true,
                'weixin_version' => 'example_weixin_version',
                'days_since_first_login' => 'DAYS_SINCE_FIRST_LOGIN_UNKNOW | DAYS_SINCE_FIRST_LOGIN_WITHIN_1_DAY | DAYS_SINCE_FIRST_LOGIN_WITHIN_7_DAYS | DAYS_SINCE_FIRST_LOGIN_WITHIN_30_DAYS',
            ],
        ],
    ]): PromiseInterface;
}
