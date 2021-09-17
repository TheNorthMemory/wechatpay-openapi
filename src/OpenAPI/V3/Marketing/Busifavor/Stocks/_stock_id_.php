<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Stocks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _stock_id_\Budget $budget
 * @property-read _stock_id_\Couponcodes $couponcodes
 */
interface _stock_id_
{
    /**
     * 查询商家券详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_2.shtml
     */
    public function get(array $options = [
        'stock_id' => '',
    ]): ResponseInterface;

    /**
     * 查询商家券详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_2.shtml#async
     */
    public function getAsync(array $options = [
        'stock_id' => '',
    ]): PromiseInterface;

    /**
     * 修改商家券基本信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_12.shtml
     */
    public function patch(array $options = [
        'stock_id' => '',
        'json' => [
            'custom_entrance' => [],
            'stock_name' => '8月1日活动券',
            'comment' => '活动使用',
            'goods_name' => 'xxx商品使用',
            'out_request_no' => '6122352020010133287985742',
            'display_pattern_info' => [],
            'coupon_use_rule' => [],
            'stock_send_rule' => [],
            'notify_config' => [],
        ],
    ]): ResponseInterface;

    /**
     * 修改商家券基本信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_12.shtml#async
     */
    public function patchAsync(array $options = [
        'stock_id' => '',
        'json' => [
            'custom_entrance' => [],
            'stock_name' => '8月1日活动券',
            'comment' => '活动使用',
            'goods_name' => 'xxx商品使用',
            'out_request_no' => '6122352020010133287985742',
            'display_pattern_info' => [],
            'coupon_use_rule' => [],
            'stock_send_rule' => [],
            'notify_config' => [],
        ],
    ]): PromiseInterface;
}
