<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PasswordExemptContract\Contracts\ServiceProvider\PreEntrustSign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface MiniProgram
{
    /**
     * 服务商模式小程序场景预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/password-exempt-contract/contracts/service-provider/pre-entrust-sign/mini-program
     */
    public function post(array $options = [
        'json' => [
            'sp_appid' => 'wxd678efh567hg6787',
            'sp_openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_openid' => 'wxd678efh567hg6787',
            'service_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'notify_url' => 'https://yourapp.com/notify',
            'contract_display_account' => '微信代扣用户A',
        ],
    ]): ResponseInterface;

    /**
     * 服务商模式小程序场景预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/password-exempt-contract/contracts/service-provider/pre-entrust-sign/mini-program
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_appid' => 'wxd678efh567hg6787',
            'sp_openid' => 'oYobu0MVnQfWpSMOYJz2AHPG_gQw',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_openid' => 'wxd678efh567hg6787',
            'service_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'notify_url' => 'https://yourapp.com/notify',
            'contract_display_account' => '微信代扣用户A',
        ],
    ]): PromiseInterface;
}
