<?php

namespace Drupal\io\Ajax;

use Drupal\Core\Ajax\ReplaceCommand;

/**
 * Extends core ReplaceCommand.
 *
 * @ingroup io
 */
class IoReplaceCommand extends ReplaceCommand {

  /**
   * The caller for the method to reduce deep checks, if known.
   *
   * @var string
   */
  protected $ioCaller;

  /**
   * Overrides an ReplaceCommand object.
   */
  public function __construct($selector, $content, array $settings = NULL, $io_caller = 'block') {
    parent::__construct($selector, $content, $settings);
    $this->ioCaller = $io_caller;
  }

  /**
   * Implements Drupal\Core\Ajax\CommandInterface:render().
   */
  public function render() {

    return [
      'io' => $this->ioCaller,
    ] + parent::render();
  }

}
