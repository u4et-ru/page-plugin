<?php declare(strict_types=1);

namespace Plugin\Page;

use App\Domain\AbstractExtension;
use App\Domain\Entities\Catalog\Order;
use App\Domain\Entities\User;
use App\Domain\Service\Catalog\Exception\OrderNotFoundException;
use App\Domain\Service\Catalog\OrderService as CatalogOrderService;

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
