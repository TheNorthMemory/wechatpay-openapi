<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Couponcodes\_coupon_code_ $_coupon_code_
 */
interface Couponcodes
{
    /**
     * 上传预存code (同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_6.shtml
     */
    public function post(array $options = [
        'stock_id' => '98065001',
        'json' => [
            'coupon_code_list' => ['string'],
            'upload_request_no' => '100002322019090134234sfdf',
        ],
    ]): ResponseInterface;

    /**
     * 上传预存code (异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_6.shtml#async
     */
    public function postAsync(array $options = [
        'stock_id' => '98065001',
        'json' => [
            'coupon_code_list' => ['string'],
            'upload_request_no' => '100002322019090134234sfdf',
        ],
    ]): PromiseInterface;

    /**
     * 查询预存code列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/merchant-exclusive-coupon/introduction.html
     */
    public function get(array $options = [
        'stock_id' => '98065001',
        'query' => [
            'status' => 'SENDED | USED | EXPIRED | DELETED',
            'appid' => 'wx233544546545989',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询预存code列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/merchant-exclusive-coupon/introduction.html#async
     */
    public function getAsync(array $options = [
        'stock_id' => '98065001',
        'query' => [
            'status' => 'SENDED | USED | EXPIRED | DELETED',
            'appid' => 'wx233544546545989',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
