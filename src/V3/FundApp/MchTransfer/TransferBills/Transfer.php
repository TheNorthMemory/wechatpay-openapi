<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\TransferBills;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Transfer
{
    /**
     * 转账（用户自动收款）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/transfer-bills/transfer
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxf636efh567hg4356',
            'out_bill_no' => 'plfk2020042013',
            'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'transfer_amount' => 400000,
            'transfer_remark' => '2020年4月报销',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'user_recv_perception' => '现金奖励',
            'transfer_scene_id' => '1000',
            'transfer_scene_report_infos' => [[
                'info_type' => '活动名称',
                'info_content' => '注册会员有礼',
            ],],
            'authorization_id' => '201202504101000123456789012',
            'sponsor_mchid' => '1900001109',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 转账（用户自动收款）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/transfer-bills/transfer
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxf636efh567hg4356',
            'out_bill_no' => 'plfk2020042013',
            'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'transfer_amount' => 400000,
            'transfer_remark' => '2020年4月报销',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
            'user_recv_perception' => '现金奖励',
            'transfer_scene_id' => '1000',
            'transfer_scene_report_infos' => [[
                'info_type' => '活动名称',
                'info_content' => '注册会员有礼',
            ],],
            'authorization_id' => '201202504101000123456789012',
            'sponsor_mchid' => '1900001109',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
