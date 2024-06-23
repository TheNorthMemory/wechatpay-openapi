<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Permissions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AssessUserRiskLevel
{
    /**
     * 商户评估用户分层(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-auth/assess-user-risk-level.html
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'authorization_code' => '1234323JKHDFE1243252',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'shopping_info' => [
                'goods' => [[
                    'name' => '森海塞尔 MOMENTUM 4 无线耳机大馒头4 头戴式蓝牙音乐耳机自适应降噪',
                    'picture' => 'http://mmbiz.qpic.cn/mmbiz_png/ldTw9dg46zkjOrzyTkbQAvQkysliaiblZhdthZWewgQMyqLZwStaNEsJrYmjwh2MlK7G4wibAFOEuISQKplSnxMWA/640?wx_fmt=png&wxfrom=200',
                    'amount' => 550,
                    'count' => 1,
                    'category_id' => ['string'],
                ],],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 商户评估用户分层(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-auth/assess-user-risk-level.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'authorization_code' => '1234323JKHDFE1243252',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'shopping_info' => [
                'goods' => [[
                    'name' => '森海塞尔 MOMENTUM 4 无线耳机大馒头4 头戴式蓝牙音乐耳机自适应降噪',
                    'picture' => 'http://mmbiz.qpic.cn/mmbiz_png/ldTw9dg46zkjOrzyTkbQAvQkysliaiblZhdthZWewgQMyqLZwStaNEsJrYmjwh2MlK7G4wibAFOEuISQKplSnxMWA/640?wx_fmt=png&wxfrom=200',
                    'amount' => 550,
                    'count' => 1,
                    'category_id' => ['string'],
                ],],
            ],
        ],
    ]): PromiseInterface;
}
