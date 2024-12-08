<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\MchTransfer\Batches;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 受理商家转账(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/mch-transfer/batches/apply
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'sp_appid' => 'wxf636efh567hg4356',
            'sub_appid' => 'wxf636efh567hg4356',
            'out_batch_no' => 'sjzz20230223',
            'batch_name' => '2023年2月深圳分部报销单',
            'batch_remark' => '2023年2月深圳分部报销单',
            'total_amount' => 4000000,
            'total_num' => 200,
            'transfer_scene_id' => '1000',
            'transfer_detail_list' => [[
                'out_detail_no' => 'x23zy545Bd5436',
                'transfer_amount' => 200000,
                'transfer_remark' => '2023年2月报销',
                'reservation_id' => '1330000071100999991182020050700019480001',
                'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            ],],
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): ResponseInterface;

    /**
     * 受理商家转账(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/mch-transfer/batches/apply
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'sp_appid' => 'wxf636efh567hg4356',
            'sub_appid' => 'wxf636efh567hg4356',
            'out_batch_no' => 'sjzz20230223',
            'batch_name' => '2023年2月深圳分部报销单',
            'batch_remark' => '2023年2月深圳分部报销单',
            'total_amount' => 4000000,
            'total_num' => 200,
            'transfer_scene_id' => '1000',
            'transfer_detail_list' => [[
                'out_detail_no' => 'x23zy545Bd5436',
                'transfer_amount' => 200000,
                'transfer_remark' => '2023年2月报销',
                'reservation_id' => '1330000071100999991182020050700019480001',
                'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            ],],
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): PromiseInterface;
}
