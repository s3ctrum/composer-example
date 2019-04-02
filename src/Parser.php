<?php

namespace s3ctrum\parser;


class Parser implements ParserInterface
{
    public function process(string $url, string $tag): array
    {
        $htmlPage = file_get_contents($url);

        if ($htmlPage === false) {
            return ['Invalid URL'];
        }

        // Regular expression

        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);
        if (empty($strings[1])) {
            return ['There are no such tags on the page'];
        }

        return $strings[1];
    }

    public function test()
    {
        // New feature
    }
}