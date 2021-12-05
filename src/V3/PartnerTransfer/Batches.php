<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PartnerTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Batches\OutBatchNo $outBatchNo
 * @property-read Batches\BatchId $batchId
 */
interface Batches
{
    /**
     * 发起批量转账(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
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
                'user_id_card' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            ],],
            'sp_appid' => 'wxf636efh567hg4388',
            'transfer_purpose' => 'COMMISSION',
            'transfer_scene' => 'ORDINARY_TRANSFER',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 发起批量转账(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
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
                'user_id_card' => '8609cb22e1774a50a930e414cc71eca06121bcd266335cda230d24a7886a8d9f',
            ],],
            'sp_appid' => 'wxf636efh567hg4388',
            'transfer_purpose' => 'COMMISSION',
            'transfer_scene' => 'ORDINARY_TRANSFER',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}
