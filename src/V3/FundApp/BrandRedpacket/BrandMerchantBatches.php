<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\BrandRedpacket;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read BrandMerchantBatches\_batch_no_ $_batch_no_
 */
interface BrandMerchantBatches
{
    /**
     * 品牌商户发放红包(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/brand-redpacket/brand-merchant-batches
     */
    public function post(array $options = [
        'json' => [
            'brand_id' => 1234,
            'brand_appid' => 'wxf636efh567hg4356',
            'scene' => 'CUSTOM_SEND',
            'template_id' => '123400001',
            'out_batch_no' => 'plfk2020042013',
            'batch_name' => '双十一营销用品牌红包',
            'batch_remark' => '双十一营销用品牌红包',
            'total_amount' => 10000,
            'total_num' => 10,
            'detail_list' => [[
                'out_detail_no' => 'x23zy545Bd5436',
                'amount' => 100,
                'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
                'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
                'remark' => '来自XX的红包',
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 品牌商户发放红包(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/brand-redpacket/brand-merchant-batches
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_id' => 1234,
            'brand_appid' => 'wxf636efh567hg4356',
            'scene' => 'CUSTOM_SEND',
            'template_id' => '123400001',
            'out_batch_no' => 'plfk2020042013',
            'batch_name' => '双十一营销用品牌红包',
            'batch_remark' => '双十一营销用品牌红包',
            'total_amount' => 10000,
            'total_num' => 10,
            'detail_list' => [[
                'out_detail_no' => 'x23zy545Bd5436',
                'amount' => 100,
                'openid' => 'o-MYE42l80oelYMDE34nYD456Xoy',
                'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
                'remark' => '来自XX的红包',
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
