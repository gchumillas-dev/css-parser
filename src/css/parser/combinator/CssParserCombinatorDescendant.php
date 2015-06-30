<?php
/**
 * This file is part of Soloproyectos common library.
 *
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos/php.common-libs/blob/master/LICENSE BSD 2-Clause License
 * @link    https://github.com/soloproyectos/php.common-libs
 */
namespace soloproyectos\css\parser\combinator;
use \DOMElement;
use soloproyectos\css\parser\combinator\CssParserCombinator;
use soloproyectos\dom\Dom;

/**
 * Class CssParserCombinatorDescendant.
 *
 * This class represents a filter in a CSS expression.
 *
 * @package Css\Parser\Combinator
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos/php.common-libs/blob/master/LICENSE BSD 2-Clause License
 * @link    https://github.com/soloproyectos/php.common-libs
 */
class CssParserCombinatorDescendant extends CssParserCombinator
{
    /**
     * Gets the descendant nodes.
     *
     * @param DOMElement $node    DOMElement object
     * @param string     $tagname Tag name
     *
     * @return array of DOMElement
     */
    public function filter($node, $tagname)
    {
        return Dom::getElementsByTagName($node, $tagname);
    }
}
