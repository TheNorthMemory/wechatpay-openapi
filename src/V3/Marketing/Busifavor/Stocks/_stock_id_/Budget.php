<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Budget
{
    /**
     * 修改批次预算(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_11.shtml
     */
    public function patch(array $options = [
        'stock_id' => '98065001',
        'json' => [
            'target_max_coupons' => 3000,
            'target_max_coupons_by_day' => 0,
            'current_max_coupons' => 500,
            'current_max_coupons_by_day' => 300,
            'modify_budget_request_no' => '1002600620019090123143254436',
        ],
    ]): ResponseInterface;

    /**
     * 修改批次预算(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_11.shtml#async
     */
    public function patchAsync(array $options = [
        'stock_id' => '98065001',
        'json' => [
            'target_max_coupons' => 3000,
            'target_max_coupons_by_day' => 0,
            'current_max_coupons' => 500,
            'current_max_coupons_by_day' => 300,
            'modify_budget_request_no' => '1002600620019090123143254436',
        ],
    ]): PromiseInterface;
}
