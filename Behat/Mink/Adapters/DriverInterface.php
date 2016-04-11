<?php
/**
 * PhalconSlayer\Framework
 *
 * @copyright 2015-2016 Daison Carino <daison12006013@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phalconslayer.readme.io
 */

/**
 * @package Clarity
 * @subpackage Clarity\TestSuite\Behat\Mink\Adapters
 */
namespace Clarity\TestSuite\Behat\Mink\Adapters;

interface DriverInterface
{
    public function __construct($args);

    public function driver();
}
