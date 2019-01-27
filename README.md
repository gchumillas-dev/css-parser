# CssParser

A library to evaluate CSS expressions.

This library can be used to select elements from a DOM Document.

## Install

Simply execute the following command:
```bash
composer require soloproyectos-php/css-parser
```

## Examples

Selects the frist element and the 'odd' elements
```php
$doc = new DOMDocument("1.0", "UTF-8");
$doc->loadXML(
    '<root><item id="101" /><item id="102" /></root>'
);
$selector = new CssSelector($doc);

// selects the first and the odd elements and prints them
$items = $selector->query('item:odd, item:first-child');
foreach ($items as $item) {
    echo Dom::dom2str($item) . "\n";
}
```
