<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface TransferBatches
{
    /**
     * 发起批量转账(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_6.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1111111',
            'sub_appid' => 'wxf636efh567hg4356',
            'authorization_type' => 'INFORMATION_AUTHORIZATION_TYPE',
            'out_batch_no' => 'plfk2020042013',
            'batch_name' => '2019年1月深圳分部报销单',
            'batch_remark' => '2019年1月深圳分部报销单',
            'total_amount' => 4000000,
            'total_num' => 200,
            'transfer_detail_list' => [[
                'out_detail_no' => 'x23zy545Bd5436',
                'transfer_amount' => 200000,
                'transfer_remark' => '2020年4月报销',
                'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
                'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            ],],
            'sp_appid' => 'wxf636efh567hg4388',
            'employment_type' => 'LONG_TERM_EMPLOYMENT',
            'employment_scene' => 'LOGISTICS',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 发起批量转账(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_6.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1111111',
            'sub_appid' => 'wxf636efh567hg4356',
            'authorization_type' => 'INFORMATION_AUTHORIZATION_TYPE',
            'out_batch_no' => 'plfk2020042013',
            'batch_name' => '2019年1月深圳分部报销单',
            'batch_remark' => '2019年1月深圳分部报销单',
            'total_amount' => 4000000,
            'total_num' => 200,
            'transfer_detail_list' => [[
                'out_detail_no' => 'x23zy545Bd5436',
                'transfer_amount' => 200000,
                'transfer_remark' => '2020年4月报销',
                'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
                'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            ],],
            'sp_appid' => 'wxf636efh567hg4388',
            'employment_type' => 'LONG_TERM_EMPLOYMENT',
            'employment_scene' => 'LOGISTICS',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
