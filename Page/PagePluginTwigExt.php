<?php declare(strict_types=1);

namespace Plugin\Page;

use App\Domain\AbstractExtension;

class PagePluginTwigExt extends AbstractExtension
{
    public function getName()
    {
        return 'page_plugin';
    }

    public function getFunctions()
    {
        return [
            new \Twig\TwigFunction('page', [$this, 'page']),
        ];
    }

    public function page(array $criteria = [])
    {
        return $this->container->get(\App\Domain\Service\Page\PageService::class)->read($criteria);
    }
}
