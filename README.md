<h2 style="text-align: center">Bootstrap Icons font and helper for Yii 2.0 Framework</h2>

<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
</p>

---

## Installation #

___

The preferred way to install this extension is through [composer ](http://getcomposer.org/download/)

Either run: `composer require mylistryx/yii2-bootstrap-icon`  or add `"yii2-bootstrap-icon": "~1.0.0"` into your `composer.json` file.

Then register assets in your view file: `\yii\bootstrap5\BootstrapIconAsset::register($this)`

To use helper just write `<?= \yii\bootstrap5\BI:i('icon-name) ?>` in your template

Custom usage:

`<?= \yii\bootstrap5\BI:i('accordion')->addCssClass('text-danger')->addDataAttribute('error-icon') ?>`
