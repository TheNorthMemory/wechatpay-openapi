<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\GoodsSubsidyActivity\RetailStoreAct\_brand_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Materials
{
    /**
     * 生成小店活动物料码(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/create-materials.html
     */
    public function post(array $options = [
        'brand_id' => '1001',
        'json' => [
            'out_request_no' => '1002600620019090123143254436',
            'material_num' => 100,
        ],
    ]): ResponseInterface;

    /**
     * 生成小店活动物料码(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/retail-store/retail-store-act/create-materials.html#async
     */
    public function postAsync(array $options = [
        'brand_id' => '1001',
        'json' => [
            'out_request_no' => '1002600620019090123143254436',
            'material_num' => 100,
        ],
    ]): PromiseInterface;
}
