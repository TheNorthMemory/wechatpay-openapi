<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\WithdrawFavor\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Coupons
{
    /**
     * 为用户发银行提现免费券(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter3_2_1.shtml
     */
    public function post(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'json' => [
            'mchid' => '1230000109',
            'stock_id' => '1304490000000059',
            'appid' => 'wxd678efh567hg6787',
            'send_request_no' => '89560002019101000121',
        ],
    ]): ResponseInterface;

    /**
     * 为用户发银行提现免费券(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter3_2_1.shtml#async
     */
    public function postAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'json' => [
            'mchid' => '1230000109',
            'stock_id' => '1304490000000059',
            'appid' => 'wxd678efh567hg6787',
            'send_request_no' => '89560002019101000121',
        ],
    ]): PromiseInterface;

    /**
     * 查询批次下用户银行提现免费券列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter3_2_2.shtml
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'query' => [
            'mchid' => '1230000109',
            'stock_id' => '1304490000000059',
            'appid' => 'wxd678efh567hg6787',
            'offset' => 1,
            'limit' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 查询批次下用户银行提现免费券列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter3_2_2.shtml#async
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'query' => [
            'mchid' => '1230000109',
            'stock_id' => '1304490000000059',
            'appid' => 'wxd678efh567hg6787',
            'offset' => 1,
            'limit' => 10,
        ],
    ]): PromiseInterface;
}
