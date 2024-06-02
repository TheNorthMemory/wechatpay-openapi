<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PasswordExemptContract\Contracts\Qs\PreEntrustSign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface MiniProgram
{
    /**
     * 清算机构模式小程序场景预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-password-free-contract/sign/qs-mini-program-pre-entrust-sign.html
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
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        ],
    ]): ResponseInterface;

    /**
     * 清算机构模式小程序场景预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-password-free-contract/sign/qs-mini-program-pre-entrust-sign.html#async
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
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        ],
    ]): PromiseInterface;
}
