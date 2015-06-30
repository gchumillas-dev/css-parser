<?php
/**
 * This file is part of Soloproyectos common library.
 *
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos/php.common-libs/blob/master/LICENSE BSD 2-Clause License
 * @link    https://github.com/soloproyectos/php.common-libs
 */
namespace soloproyectos\css\parser\filter;
use \ArrayObject;
use \DOMElement;
use soloproyectos\css\parser\filter\CssParserFilterPseudo;
use soloproyectos\dom\Dom;

/**
 * Class CssParserFilterPseudoNot.
 *
 * This class represents the first-child pseudo filter.
 *
 * @package Css\Parser\Filter
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos/php.common-libs/blob/master/LICENSE BSD 2-Clause License
 * @link    https://github.com/soloproyectos/php.common-libs
 */
class CssParserFilterPseudoNot extends CssParserFilterPseudo
{
    /**
     * List of DOMElements
     * @var ArrayObject
     */
    private $_items;

    /**
     * Constructor.
     *
     * @param ArrayObject $input List of DOMElements
     */
    public function __construct($input)
    {
        $this->_items = $input;
    }

    /**
     * Does the node match?
     *
     * @param DOMElement $node     DOMElement object
     * @param integer    $position Node position
     * @param array      $items    List of nodes
     *
     * @return boolean
     */
    public function match($node, $position, $items)
    {
        return Dom::searchNode($node, $this->_items) === false;
    }
}
