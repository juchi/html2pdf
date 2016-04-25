<?php

namespace Spipu\Html2Pdf\Css\Selector;

use Spipu\Html2Pdf\Html\NodeInterface;

/**
 * Class TagSelector
 */
class TagSelector extends AbstractSelector
{
    /**
     * {@inheritDoc}
     */
    public function validate(NodeInterface $node)
    {
        return $this->getText() == $node->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'id';
    }
}
