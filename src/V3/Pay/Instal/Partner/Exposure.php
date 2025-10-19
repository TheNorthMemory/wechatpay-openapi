<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Instal\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Exposure
{
    /**
     * 商户贴息-获取微信分付曝光建议(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/instal/partner/exposure
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '1230000109',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'user_id' => [
                'user_id_type' => 'OPENID',
                'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'phone_number_hash' => 'ABDEF3445546456B',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 商户贴息-获取微信分付曝光建议(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/instal/partner/exposure
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '1230000109',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'user_id' => [
                'user_id_type' => 'OPENID',
                'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                'phone_number_hash' => 'ABDEF3445546456B',
            ],
        ],
    ]): PromiseInterface;
}
