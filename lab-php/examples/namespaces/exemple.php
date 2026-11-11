<?php

declare(strict_types=1);

namespace LabPhp\Catalogue {
    final class Article
    {
        public function titre(): string
        {
            return 'Introduction aux namespaces';
        }
    }
}

namespace LabPhp\Blog {
    final class Article
    {
        public function titre(): string
        {
            return 'Organiser les classes en PHP';
        }
    }
}

namespace {
    use LabPhp\Blog\Article as ArticleBlog;
    use LabPhp\Catalogue\Article as ArticleCatalogue;

    echo 'Catalogue : ' . (new ArticleCatalogue())->titre() . PHP_EOL;
    echo 'Blog : ' . (new ArticleBlog())->titre() . PHP_EOL;
}
