<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MedIns;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Orders\OutTradeNo $outTradeNo
 * @property-read Orders\MixTradeNo $mixTradeNo
 */
interface Orders
{
    /**
     * 医保自费混合收款下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/med-ins/orders
     */
    public function post(array $options = [
        'json' => [
            'mix_pay_type' => 'CASH_AND_INSURANCE',
            'order_type' => 'REG_PAY',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'payer' => [
                'name' => '',
                'id_digest' => '',
                'card_type' => 'ID_CARD',
            ],
            'pay_for_relatives' => true,
            'relative' => [
                'name' => '',
                'id_digest' => '',
                'card_type' => 'ID_CARD',
            ],
            'out_trade_no' => '202204022005169952975171534816',
            'serial_no' => '1217752501201',
            'pay_order_id' => 'ORD530100202204022006350000021',
            'pay_auth_no' => 'AUTH530100202204022006310000034',
            'geo_location' => '102.682296,25.054260',
            'city_id' => '530100',
            'med_inst_name' => '北大医院',
            'med_inst_no' => '1217752501201407033233368318',
            'med_ins_order_create_time' => '2018-06-08T10:34:56+08:00',
            'total_fee' => 202000,
            'med_ins_gov_fee' => 100000,
            'med_ins_self_fee' => 45000,
            'med_ins_other_fee' => 5000,
            'med_ins_cash_fee' => 50000,
            'wechat_pay_cash_fee' => 42000,
            'cash_add_detail' => [[
                'cash_add_fee' => 2000,
                'cash_add_type' => 'FREIGHT',
            ],],
            'cash_reduce_detail' => [[
                'cash_reduce_fee' => 10000,
                'cash_reduce_type' => 'DEFAULT_REDUCE_TYPE',
            ],],
            'callback_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'prepay_id' => 'wx201410272009395522657a690389285100',
            'passthrough_request_content' => \json_encode([
                'payAuthNo' => 'AUTH****',
                'payOrdId' => 'ORD****',
                'setlLatlnt' => '118.096435,24.485407',
            ]),
            'extends' => '{}',
            'attach' => '{}',
            'channel_no' => 'AAGN9uhZc5EGyRdairKW7Qnu',
            'med_ins_test_env' => true,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 医保自费混合收款下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/med-ins/orders
     */
    public function postAsync(array $options = [
        'json' => [
            'mix_pay_type' => 'CASH_AND_INSURANCE',
            'order_type' => 'REG_PAY',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wxd678efh567hg6999',
            'sub_mchid' => '1900000109',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'payer' => [
                'name' => '',
                'id_digest' => '',
                'card_type' => 'ID_CARD',
            ],
            'pay_for_relatives' => true,
            'relative' => [
                'name' => '',
                'id_digest' => '',
                'card_type' => 'ID_CARD',
            ],
            'out_trade_no' => '202204022005169952975171534816',
            'serial_no' => '1217752501201',
            'pay_order_id' => 'ORD530100202204022006350000021',
            'pay_auth_no' => 'AUTH530100202204022006310000034',
            'geo_location' => '102.682296,25.054260',
            'city_id' => '530100',
            'med_inst_name' => '北大医院',
            'med_inst_no' => '1217752501201407033233368318',
            'med_ins_order_create_time' => '2018-06-08T10:34:56+08:00',
            'total_fee' => 202000,
            'med_ins_gov_fee' => 100000,
            'med_ins_self_fee' => 45000,
            'med_ins_other_fee' => 5000,
            'med_ins_cash_fee' => 50000,
            'wechat_pay_cash_fee' => 42000,
            'cash_add_detail' => [[
                'cash_add_fee' => 2000,
                'cash_add_type' => 'FREIGHT',
            ],],
            'cash_reduce_detail' => [[
                'cash_reduce_fee' => 10000,
                'cash_reduce_type' => 'DEFAULT_REDUCE_TYPE',
            ],],
            'callback_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'prepay_id' => 'wx201410272009395522657a690389285100',
            'passthrough_request_content' => \json_encode([
                'payAuthNo' => 'AUTH****',
                'payOrdId' => 'ORD****',
                'setlLatlnt' => '118.096435,24.485407',
            ]),
            'extends' => '{}',
            'attach' => '{}',
            'channel_no' => 'AAGN9uhZc5EGyRdairKW7Qnu',
            'med_ins_test_env' => true,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
