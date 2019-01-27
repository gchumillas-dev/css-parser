# CssParser

A library to evaluate CSS expressions.

This library can be used to select elements from a DOM Document using CSS selectors.

## Install

Simply execute the following command:
```bash
composer require soloproyectos-php/css-parser
```

## Examples

You can create instances of `CssParser` from different sources:
```php
// Loads a DOMDocument
$doc = new DOMDocument("1.0", "UTF-8");
$doc->loadXML('<root><item id="101" /><item id="102" /></root>');
$selector = new CssParser($doc);

// Loads a DOMElement
$doc = new DOMDocument("1.0", "UTF-8");
$doc->loadXML('<root><item id="101" /><item id="102" /></root>);
$root = $doc->documentElement;
$selector = new CssParser($root);

// Loads a file
$selector = new CssParser('/path/to/my/document.xml');

// Loads an URL
$selector = new CssParser('http://www.my-site.com/document.xml');
```

Selects the first and the odd elements:
```php
$doc = new DOMDocument("1.0", "UTF-8");
$doc->loadXML(
    '<root><item id="101" /><item id="102" /></root>'
);
$selector = new CssSelector($doc);

// selects the first and the odd elements and prints them
$items = $selector->query('item:odd, item:first-child');
foreach ($items as $item) {
    echo $doc->saveXML($item) . "\n";
}
```

This class support different CSS Pseudo-classes such as `:odd`, `:even`, `first-child`, but you can create customs ones. In the following example we are going to create a `fibonacci` pseudo-class:
```php
// is node position a Fibonacci number?
$css->registerPseudoFilter(
    "fibonacci", function ($node, $input, $position, $items
) {
    $isFibonacci = false;
    if ($position > 0) {
        $n = sqrt(5 * pow($position, 2) + 4);
        $isFibonacci = $n - floor($n) == 0;
        if (!$isFibonacci) {
            $n = sqrt(5 * pow($position, 2) - 4);
            $isFibonacci = $n - floor($n) == 0;
        }
    }
    return $isFibonacci;
});
$items = $selector->query('item:fibonacci');
```

