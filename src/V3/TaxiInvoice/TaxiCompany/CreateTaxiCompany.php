<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice\TaxiCompany;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface CreateTaxiCompany
{
    /**
     * 新增出租车公司(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/taxi-company/create-taxi-company.html
     */
    public function post(array $options = [
        'json' => [
            'company_name' => '深圳市未来有限公司',
            'tax_id' => '12345678901234567J',
            'address' => '广东省深圳市南山区高新科技园科技中一路腾讯大厦',
            'phone' => '075586013388',
            'bank_name' => '中国工商银行南山支行',
            'bank_account' => '12345678901234',
            'invoice_mode' => 'JIAO_WEI',
            'legal_person' => '张三',
            'short_name' => '深圳未来',
            'region_id' => 510100,
            'enterprise_type' => 'ENTERPRISE',
        ],
    ]): ResponseInterface;

    /**
     * 新增出租车公司(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/taxi-company/create-taxi-company.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'company_name' => '深圳市未来有限公司',
            'tax_id' => '12345678901234567J',
            'address' => '广东省深圳市南山区高新科技园科技中一路腾讯大厦',
            'phone' => '075586013388',
            'bank_name' => '中国工商银行南山支行',
            'bank_account' => '12345678901234',
            'invoice_mode' => 'JIAO_WEI',
            'legal_person' => '张三',
            'short_name' => '深圳未来',
            'region_id' => 510100,
            'enterprise_type' => 'ENTERPRISE',
        ],
    ]): PromiseInterface;
}
