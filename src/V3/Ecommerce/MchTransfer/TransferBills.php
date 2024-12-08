<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\MchTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read TransferBills\TransferBillNo $transferBillNo
 * @property-read TransferBills\OutBillNo $outBillNo
 */
interface TransferBills
{
    /**
     * 发起转账(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/transfer-bills
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'appid' => 'wxf636efh567hg4356',
            'out_bill_no' => 'plfk2020042013',
            'transfer_scene_id' => '1000',
            'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'transfer_amount' => 400000,
            'transfer_remark' => '2020年4月报销',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 发起转账(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/transfer-bills
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'appid' => 'wxf636efh567hg4356',
            'out_bill_no' => 'plfk2020042013',
            'transfer_scene_id' => '1000',
            'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
            'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'transfer_amount' => 400000,
            'transfer_remark' => '2020年4月报销',
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
