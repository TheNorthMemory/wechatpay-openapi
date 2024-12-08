<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PasswordExemptContract\Contracts\Qs\PreEntrustSign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface PayRedirectSign
{
    /**
     * 清算机构模式支付后场景预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/password-exempt-contract/contracts/qs/pre-entrust-sign/pay-redirect-sign
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'service_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'notify_url' => 'https://yourapp.com/notify',
            'contract_display_account' => '微信代扣用户A',
            'prepay_id' => 'wx201410272009395522657a690389285100',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        ],
    ]): ResponseInterface;

    /**
     * 清算机构模式支付后场景预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/password-exempt-contract/contracts/qs/pre-entrust-sign/pay-redirect-sign
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'service_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'notify_url' => 'https://yourapp.com/notify',
            'contract_display_account' => '微信代扣用户A',
            'prepay_id' => 'wx201410272009395522657a690389285100',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        ],
    ]): PromiseInterface;
}
