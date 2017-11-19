<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'congreso_congreso_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Congreso\\CongresoBundle\\Controller\\CongresoController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'congreso_congreso_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Congreso\\CongresoBundle\\Controller\\CongresoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'congreso_cientifico_artcen' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Congreso\\CongresoBundle\\Controller\\CientificoController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'congreso_track_arttrac' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Congreso\\CongresoBundle\\Controller\\TrackController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/trac',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'congreso_congreso_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Congreso\\CongresoBundle\\Controller\\CongresoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'congreso_comment_create' => array (  0 =>   array (    0 => 'articulo_id',  ),  1 =>   array (    '_controller' => 'Congreso\\CongresoBundle\\Controller\\CommentController::createAction',  ),  2 =>   array (    'articulo_id' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'articulo_id',    ),    1 =>     array (      0 => 'text',      1 => '/comment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
