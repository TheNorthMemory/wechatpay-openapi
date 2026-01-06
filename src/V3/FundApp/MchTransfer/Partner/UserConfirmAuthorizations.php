<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read UserConfirmAuthorizations\_out_authorization_no_ $_out_authorization_no_
 */
interface UserConfirmAuthorizations
{
    /**
     * 申请免确认收款授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/user-confirm-authorizations
     */
    public function post(array $options = [
        'json' => [
            'out_authorization_no' => 'plfk2020042013',
            'appid' => '102022609',
            'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            'transfer_scene_id' => '1000',
            'user_display_name' => 'wx_123456',
            'user_recv_perception' => '现金奖励',
            'authorization_notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): ResponseInterface;

    /**
     * 申请免确认收款授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/user-confirm-authorizations
     */
    public function postAsync(array $options = [
        'json' => [
            'out_authorization_no' => 'plfk2020042013',
            'appid' => '102022609',
            'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            'transfer_scene_id' => '1000',
            'user_display_name' => 'wx_123456',
            'user_recv_perception' => '现金奖励',
            'authorization_notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): PromiseInterface;
}
