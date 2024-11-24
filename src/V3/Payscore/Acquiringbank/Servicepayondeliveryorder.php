<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Acquiringbank;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Servicepayondeliveryorder
{
    /**
     * 从业机构创建先用后付订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-order/create-acquiring-bank-pay-on-delivery-service-order.html
     */
    public function post(array $options = [
        'json' => [
            'out_order_no' => '1234323JKHDFE1243252',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'channel_id' => '1230000109',
            'service_id' => '500001',
            'service_introduction' => '某某酒店',
            'post_payments' => [[
                'name' => '就餐费用, 服务费',
                'amount' => 40000,
                'description' => '就餐人均100元，服务费：100/小时',
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'amount' => 100,
                'count' => 2,
            ],],
            'time_range' => [
                'start_time' => '20091225091010',
                'start_time_remark' => '备注1',
                'end_time' => '20091225121010',
                'end_time_remark' => '备注2',
            ],
            'location' => [
                'start_location' => '嗨客时尚主题展餐厅',
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'risk_fund' => [
                'name' => 'DEPOSIT | ADVANCE | CASH_DEPOSIT | ESTIMATE_ORDER_COST',
                'amount' => 10000,
                'description' => '就餐的预估费用',
            ],
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
            'notify_url' => 'https://api.test.com',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'need_user_confirm' => true,
            'mchid' => '1230000109',
            'shopping_info' => [
                'real_merchant_appid' => 'wxd678efh567hg6787',
                'jump_link' => [
                    'jump_link_type' => 'JUMP_LINK_MINI_PROGRAM',
                    'appid' => '',
                    'path' => '',
                ],
                'goods' => [[
                    'name' => '森海塞尔 MOMENTUM 4 无线耳机大馒头4 头戴式蓝牙音乐耳机自适应降噪',
                    'picture' => 'http://mmbiz.qpic.cn/mmbiz_png/ldTw9dg46zkjOrzyTkbQAvQkysliaiblZhdthZWewgQMyqLZwStaNEsJrYmjwh2MlK7G4wibAFOEuISQKplSnxMWA/640?wx_fmt=png&wxfrom=200',
                    'amount' => 40000,
                    'count' => 4,
                ],],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 从业机构创建先用后付订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-order/create-acquiring-bank-pay-on-delivery-service-order.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_order_no' => '1234323JKHDFE1243252',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'channel_id' => '1230000109',
            'service_id' => '500001',
            'service_introduction' => '某某酒店',
            'post_payments' => [[
                'name' => '就餐费用, 服务费',
                'amount' => 40000,
                'description' => '就餐人均100元，服务费：100/小时',
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'amount' => 100,
                'count' => 2,
            ],],
            'time_range' => [
                'start_time' => '20091225091010',
                'start_time_remark' => '备注1',
                'end_time' => '20091225121010',
                'end_time_remark' => '备注2',
            ],
            'location' => [
                'start_location' => '嗨客时尚主题展餐厅',
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'risk_fund' => [
                'name' => 'DEPOSIT | ADVANCE | CASH_DEPOSIT | ESTIMATE_ORDER_COST',
                'amount' => 10000,
                'description' => '就餐的预估费用',
            ],
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
            'notify_url' => 'https://api.test.com',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'need_user_confirm' => true,
            'mchid' => '1230000109',
            'shopping_info' => [
                'real_merchant_appid' => 'wxd678efh567hg6787',
                'jump_link' => [
                    'jump_link_type' => 'JUMP_LINK_MINI_PROGRAM',
                    'appid' => '',
                    'path' => '',
                ],
                'goods' => [[
                    'name' => '森海塞尔 MOMENTUM 4 无线耳机大馒头4 头戴式蓝牙音乐耳机自适应降噪',
                    'picture' => 'http://mmbiz.qpic.cn/mmbiz_png/ldTw9dg46zkjOrzyTkbQAvQkysliaiblZhdthZWewgQMyqLZwStaNEsJrYmjwh2MlK7G4wibAFOEuISQKplSnxMWA/640?wx_fmt=png&wxfrom=200',
                    'amount' => 40000,
                    'count' => 4,
                ],],
            ],
        ],
    ]): PromiseInterface;
}
