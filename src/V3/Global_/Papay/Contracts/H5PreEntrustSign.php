<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Papay\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface H5PreEntrustSign
{
    /**
     * H5预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter5_1_14.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'sub_appid' => 'wxcbda96de0b165484',
            'plan_id' => 123,
            'out_contract_code' => '100001256',
            'user_display_name' => '张三',
            'success_notify_url' => 'https://pay.weixin.qq.com',
            'return_appid' => 'wxcbda96de0b165484',
            'user_client_ip' => '119.145.83.6',
            'expired_time' => '2021-11-20T13:29:35+08:00',
            'return_url' => 'https://pay.weixin.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * H5预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter5_1_14.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'sp_appid' => 'wx8888888888888888',
            'sp_mchid' => '3200000001',
            'sub_appid' => 'wxcbda96de0b165484',
            'plan_id' => 123,
            'out_contract_code' => '100001256',
            'user_display_name' => '张三',
            'success_notify_url' => 'https://pay.weixin.qq.com',
            'return_appid' => 'wxcbda96de0b165484',
            'user_client_ip' => '119.145.83.6',
            'expired_time' => '2021-11-20T13:29:35+08:00',
            'return_url' => 'https://pay.weixin.qq.com',
        ],
    ]): PromiseInterface;
}
