<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Stocks\_stock_id_\Couponcodes;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _coupon_code_
{
    /**
     * 查询预存code详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/merchant-exclusive-coupon/introduction.html
     */
    public function get(array $options = [
        'stock_id' => '1212',
        'coupon_code' => '1212',
        'query' => [
            'appid' => 'wx233544546545989',
        ],
    ]): ResponseInterface;

    /**
     * 查询预存code详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/merchant-exclusive-coupon/introduction.html#async
     */
    public function getAsync(array $options = [
        'stock_id' => '1212',
        'coupon_code' => '1212',
        'query' => [
            'appid' => 'wx233544546545989',
        ],
    ]): PromiseInterface;

    /**
     * 删除预存code(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/merchant-exclusive-coupon/introduction.html
     */
    public function delete(array $options = [
        'stock_id' => '101156451224',
        'coupon_code' => '1212',
        'query' => [
            'delete_request_no' => '1212',
        ],
    ]): ResponseInterface;

    /**
     * 删除预存code(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/merchant-exclusive-coupon/introduction.html#async
     */
    public function deleteAsync(array $options = [
        'stock_id' => '101156451224',
        'coupon_code' => '1212',
        'query' => [
            'delete_request_no' => '1212',
        ],
    ]): PromiseInterface;
}
