<?php
/**
 * This file is part of Soloproyectos common library.
 *
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos/php.common-libs/blob/master/LICENSE BSD 2-Clause License
 * @link    https://github.com/soloproyectos/php.common-libs
 */
namespace soloproyectos\css\parser\combinator;
use \Closure;
use soloproyectos\css\parser\combinator\CssParserCombinator;

/**
 * Class CssParserCombinatorFactory.
 *
 * @package Css\Parser\Combinator
 * @author  Gonzalo Chumillas <gchumillas@email.com>
 * @license https://github.com/soloproyectos/php.common-libs/blob/master/LICENSE BSD 2-Clause License
 * @link    https://github.com/soloproyectos/php.common-libs
 */
class CssParserCombinatorFactory
{
    /**
     * Gets a combinator instance by class name.
     *
     * @param string  $classname       Class name
     * @param Closure $userDefFunction User defined function (not required)
     *
     * @return CssParserCombinator
     */
    public static function getInstance($classname, $userDefFunction = null)
    {
        $class = "soloproyectos\\css\\parser\\combinator\\"
            . $classname;
        return new $class($userDefFunction);
    }
}
