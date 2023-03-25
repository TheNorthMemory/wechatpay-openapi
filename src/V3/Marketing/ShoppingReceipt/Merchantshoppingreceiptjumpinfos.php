<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\ShoppingReceipt;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Merchantshoppingreceiptjumpinfos
{
    /**
     * 上传商家电子小票跳转信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/shopping-receipt/merchant-shopping-receipt-jump-infos/create-merchant-shopping-receipt-jump-info.html
     */
    public function post(array $options = [
        'json' => [
            'transaction_id' => '4200000008202209139188072801',
            'transaction_mchid' => '1230000109',
            'transaction_sub_mchid' => '1230000109',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'merchant_upload_time' => '2021-05-20T13:29:35.120+08:00',
            'jump_info' => [
                'merchant_appid' => 'example_merchant_appid',
                'merchant_path' => 'example_merchant_path',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 上传商家电子小票跳转信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/shopping-receipt/merchant-shopping-receipt-jump-infos/create-merchant-shopping-receipt-jump-info.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'transaction_id' => '4200000008202209139188072801',
            'transaction_mchid' => '1230000109',
            'transaction_sub_mchid' => '1230000109',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'merchant_upload_time' => '2021-05-20T13:29:35.120+08:00',
            'jump_info' => [
                'merchant_appid' => 'example_merchant_appid',
                'merchant_path' => 'example_merchant_path',
            ],
        ],
    ]): PromiseInterface;
}
