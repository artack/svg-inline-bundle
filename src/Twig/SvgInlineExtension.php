<?php

declare(strict_types=1);

namespace Artack\SvgInlineBundle\Twig;

use Symfony\Component\String\UnicodeString;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class SvgInlineExtension extends AbstractExtension
{
    private readonly string $path;

    public function __construct(string $path)
    {
        $this->path = (new UnicodeString($path))->ensureEnd('/')->toString();
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('svg_inline', [$this, 'svgInline'], ['is_safe' => ['html']]),
        ];
    }

    public function svgInline($value): string
    {
        $filename = $this->path.$value;
        if (!is_readable($filename)) {
            return '';
        }

        return file_get_contents($filename);
    }
}
