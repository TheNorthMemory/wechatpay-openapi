<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardActivity\Activities;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _activity_id_\Terminate $terminate
 */
interface _activity_id_
{
    /**
     * 查询活动详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/membership-card/member-gift/query-activity-detail.html
     */
    public function get(array $options = [
        'activity_id' => '371067',
    ]): ResponseInterface;

    /**
     * 查询活动详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/membership-card/member-gift/query-activity-detail.html#async
     */
    public function getAsync(array $options = [
        'activity_id' => '371067',
    ]): PromiseInterface;
}
