# 微信支付OpenAPI接口文档

整理自[微信支付官方文档](https://pay.weixin.qq.com/wiki/doc/apiv3/index.shtml)

## PHP包

推荐使用 `composer v2` 安装

`composer require --dev iwechatpay/openapi`

## 自有语法糖规则

| URI | 模版变量 | 值 | 说明
| --- | --- | --- | ---
| [`secapi/mch/addInstitutionsub`](v2/secapi/mch/addInstitutionsub.yaml) | `{addinstitutionsub}` | `addInstitutionsub` | URI上有大写字符
| [`secapi/mch/modifyInstitutionsub`](v2/secapi/mch/modifyInstitutionsub.yaml) | `{modifyinstitutionsub}` | `modifyInstitutionsub` | URI上有大写字符
| [`secapi/mch/queryInstitutionsub`](v2/secapi/mch/queryInstitutionsub.yaml) | `{queryinstitutionsub}` | `queryInstitutionsub` | URI上有大写字符
| [`v3/applyment4sub/applyment/`](v3/applyment4sub/applyment/stub.yaml) | `{stub}` | | 固定值，空字符串，构造末尾是`/`需要
| [`v3/ecommerce/applyments/`](v3/ecommerce/applyments/stub.yaml) | `{stub}` | | 固定值，空字符串，构造末尾是`/`需要
| [`v3/ecommerce/subsidies/return`](v3/ecommerce/subsidies/return.yaml) | `{return}` | `return` | 固定值，`return`为PHP语法关键字
| [`v3/marketing/busifavor/coupons/return`](v3/marketing/busifavor/coupons/return.yaml) | `{return}` | `return` | 固定值，`return`为PHP语法关键字
| [`v3/marketing/busifavor/coupons/use`](v3/marketing/busifavor/coupons/use.yaml) | `{use}` | `use` | 固定值，`use`为PHP语法关键字
## License

[MIT](LICENSE)
