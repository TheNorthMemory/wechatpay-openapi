<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Lovefeast\Users\_openid_\Orders\BrandId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _brand_id_
{
    /**
     * 查询用户捐赠单列表(同步模式)
     * @param array<string,mixed> $options
     * @link 商户可根据品牌ID与用户标识查询捐赠单列表
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'brand_id' => '2250',
        'query' => [
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询用户捐赠单列表(异步模式)
     * @param array<string,mixed> $options
     * @link 商户可根据品牌ID与用户标识查询捐赠单列表#async
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'brand_id' => '2250',
        'query' => [
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
