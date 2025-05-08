<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Insurance\MchTransfer\Reservation;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 受理单次预约商家转账(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/insurance/mch-transfer/reservation/apply
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'sp_appid' => 'wxf636efh567hg4356',
            'sub_appid' => 'wxf636efh567hg4356',
            'out_reservation_no' => 'plfk2020042013',
            'transfer_scene_id' => '1000',
            'estimated_date' => '2019-11-22',
            'estimated_max_amount' => 400000,
            'exact_amount' => 100000,
            'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            'user_real_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'reserve_remark' => '由于存在收益波动，实际到账资金可能不等于当前金额',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'scene_report_data' => [
                'insurance_policy' => [
                    'product_registration_no' => '40058541257',
                    'policy_no' => '202301011651',
                    'name' => '养老保险',
                    'withdrawal_no' => '202310410941',
                    'claim_no' => '202310410941',
                ],
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 受理单次预约商家转账(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/insurance/mch-transfer/reservation/apply
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'sp_appid' => 'wxf636efh567hg4356',
            'sub_appid' => 'wxf636efh567hg4356',
            'out_reservation_no' => 'plfk2020042013',
            'transfer_scene_id' => '1000',
            'estimated_date' => '2019-11-22',
            'estimated_max_amount' => 400000,
            'exact_amount' => 100000,
            'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            'user_real_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'reserve_remark' => '由于存在收益波动，实际到账资金可能不等于当前金额',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'scene_report_data' => [
                'insurance_policy' => [
                    'product_registration_no' => '40058541257',
                    'policy_no' => '202301011651',
                    'name' => '养老保险',
                    'withdrawal_no' => '202310410941',
                    'claim_no' => '202310410941',
                ],
            ],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
