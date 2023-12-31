<?php declare(strict_types=1);

namespace Plugin\Page;

use App\Domain\AbstractPlugin;
use Psr\Container\ContainerInterface;

class PagePlugin extends AbstractPlugin
{
    const NAME = 'PagePlugin';
    const TITLE = 'Page';
    const VERSION = '1.1';

    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);

        $this->addTwigExtension(\Plugin\Page\PagePluginTwigExt::class);
    }
}
