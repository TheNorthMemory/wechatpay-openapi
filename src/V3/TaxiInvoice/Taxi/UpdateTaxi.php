<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice\Taxi;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UpdateTaxi
{
    /**
     * 更新出租车信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/taxi/update-taxi.html
     */
    public function post(array $options = [
        'json' => [
            'plate_number' => '粤B12345',
            'company_name' => '深圳市未来有限公司',
            'mchid' => '1900000109',
            'main_license' => '6298416',
            'deputy_license' => '6298416',
            'region_id' => 510100,
            'invoice_flag' => 'INVOICE',
        ],
    ]): ResponseInterface;

    /**
     * 更新出租车信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/taxi/update-taxi.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'plate_number' => '粤B12345',
            'company_name' => '深圳市未来有限公司',
            'mchid' => '1900000109',
            'main_license' => '6298416',
            'deputy_license' => '6298416',
            'region_id' => 510100,
            'invoice_flag' => 'INVOICE',
        ],
    ]): PromiseInterface;
}
