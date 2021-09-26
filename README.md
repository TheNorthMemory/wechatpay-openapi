# 微信支付OpenAPI接口文档

为 `wechatpay/wechatpay` 增加IDE提示的接口描述包，整理自[官方文档中心](https://pay.weixin.qq.com/wiki/doc/apiv3/index.shtml)

[![GitHub actions](https://github.com/TheNorthMemory/wechatpay-openapi/workflows/CI/badge.svg)](https://github.com/TheNorthMemory/wechatpay-openapi/actions)
[![Packagist Stars](https://img.shields.io/packagist/stars/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)
[![Packagist Downloads](https://img.shields.io/packagist/dm/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)
[![Packagist Version](https://img.shields.io/packagist/v/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)
[![Packagist License](https://img.shields.io/packagist/l/iwechatpay/openapi)](https://packagist.org/packages/iwechatpay/openapi)

## PHP

推荐使用 `composer v2` 安装

`composer require --dev iwechatpay/openapi`

## 特殊URI语法规则

| URI | 模版变量 | 值 | 说明
| --- | --- | --- | ---
| `secapi/mch/addInstitutionsub` | `{addinstitutionsub}` | `addInstitutionsub` | URI上有大写字符
| `secapi/mch/modifyInstitutionsub` | `{modifyinstitutionsub}` | `modifyInstitutionsub` | URI上有大写字符
| `secapi/mch/queryInstitutionsub` | `{queryinstitutionsub}` | `queryInstitutionsub` | URI上有大写字符
| `v3/applyment4sub/applyment/` | `{stub}` | | 固定值，空字符串，构造末尾是`/`需要
| `v3/ecommerce/applyments/` | `{stub}` | | 固定值，空字符串，构造末尾是`/`需要
| `v3/ecommerce/subsidies/return` | `{return}` | `return` | 固定值，`return`为PHP语法关键字
| `v3/marketing/busifavor/coupons/return` | `{return}` | `return` | 固定值，`return`为PHP语法关键字
| `v3/marketing/busifavor/coupons/use` | `{use}` | `use` | 固定值，`use`为PHP语法关键字
## License

[MIT](LICENSE)
