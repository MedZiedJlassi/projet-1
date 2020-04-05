<?php

/**
 * PHP version 7
 *
 * @category App\Helper
 * @package  TemplateBackTrait.php
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 * @link     https://github.com/Projet-collectif/projet-1
 */

namespace App\Helper;

/**
 * PHP version 7
 *
 * @category App\Helper
 * @package  TemplateBackTrait.php
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 * @link     https://github.com/Projet-collectif/projet-1
 */

use App\Service\ParamsService;

/**
 * PHP version 7
 *
 * @category App\Helper
 * @package  TemplateBackTrait.php
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 * @link     https://github.com/Projet-collectif/projet-1
 */
trait TemplateBackTrait
{
    /**
     * Variable $this->templateBack
     *
     * @var string 
     */
    protected $templateBack;

    /**
     * Void __construct()
     *
     * @param ParamsService $params comment
     */
    public function __construct(ParamsService $params)
    {
        $this->templateBack = $params->getTemplateBack();
    }

}