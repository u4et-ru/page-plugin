<?php declare(strict_types=1);

namespace Plugin\Page;

use App\Domain\AbstractPlugin;
use Psr\Container\ContainerInterface;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class PagePlugin extends AbstractPlugin
{
    const NAME = 'PagePlugin';
    const TITLE = 'Page';
    const VERSION = '1.0';

    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);

        $this->addTwigExtension(\Plugin\Page\PagePluginTwigExt::class);
    }
}
