<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\FapiaoApplications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _fapiao_apply_id_\InsertCards $insertCards
 * @property-read _fapiao_apply_id_\Reverse $reverse
 */
interface _fapiao_apply_id_
{
    /**
     * 查询电子发票(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter4_8_9.shtml
     */
    public function get(array $options = [
        'fapiao_apply_id' => '4200000444201910177461284488',
        'query' => [
            'sub_mchid' => '1900000109',
            'fapiao_id' => '20200701123456',
        ],
    ]): ResponseInterface;

    /**
     * 查询电子发票(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter4_8_9.shtml#async
     */
    public function getAsync(array $options = [
        'fapiao_apply_id' => '4200000444201910177461284488',
        'query' => [
            'sub_mchid' => '1900000109',
            'fapiao_id' => '20200701123456',
        ],
    ]): PromiseInterface;
}
