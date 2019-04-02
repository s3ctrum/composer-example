<?php

namespace s3ctrum\parser;

interface ParserInterface
{
    public function process(string $url, string $tag): array;
}