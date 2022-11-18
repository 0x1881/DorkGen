<?php

namespace C4N\DorkGen;

class Google
{
    const URL             = 'https://www.google.com/search?q=%s',
        SITE              = 'site:',
        LINK              = 'link:',
        INURL             = 'inurl:',
        INTEXT            = 'intext:',
        INTITLE           = 'intitle:',
        INANCHOR          = 'inanchor:',
        INPOSTTITLE       = 'inposttitle:',
        INPOSTAUTHOR      = 'inpostauthor:',
        ALLINURL          = 'allinurl:',
        ALLINTEXT         = 'allintext:',
        ALLINTITLE        = 'allintitle:',
        ALLINANCHOR       = 'allinanchor:',
        ALLINPOSTTITLE    = 'allinposttitle:',
        ALLINPOSTAUTHOR   = 'allinpostauthor:',
        IP                = 'ip:',
        IN                = 'in',
        EXT               = 'ext:',
        LOC               = 'loc:',
        BOOK              = 'book:',
        MAPS              = 'maps:',
        INFO              = 'info:',
        CACHE             = 'cache:',
        MOVIE             = 'movie:',
        AFTER             = 'after:',
        DEFINE            = 'define:',
        STOCKS            = 'stocks:',
        BEFORE            = 'before:',
        SOURCE            = 'source:',
        RELATED           = 'related:',
        BLOGURL           = 'blogurl:',
        WEATHER           = 'weather:',
        FILETYPE          = 'filetype:',
        LOCATION          = 'location:',
        PHONEBOOK         = 'phonebook:',
        DATERANGE         = 'daterange:',
        AROUND            = 'AROUND',
        HASHTAG           = '#',
        USERNAME          = '@',
        BETWEEN           = '..',

        INCLUDE           = '+',
        EXCLUDE           = '-',
        ANY               = '*',
        OR                = 'OR',
        AND               = 'AND';

    protected array $tags = [];

    public function plain(string $text): Google
    {
        if (!empty($text)) $this->tags[] = $text;
        return $this;
    }

    public function site(string $text): Google
    {
        return $this->plain(self::SITE . $text);
    }

    public function link(string $text): Google
    {
        return $this->plain(self::LINK . $text);
    }

    public function inurl(string $text): Google
    {
        return $this->plain(self::INURL . $text);
    }

    public function intext(string $text): Google
    {
        return $this->plain(self::INTEXT . $text);
    }

    public function intitle(string $text): Google
    {
        return $this->plain(self::INTITLE . $text);
    }

    public function inanchor(string $text): Google
    {
        return $this->plain(self::INANCHOR . $text);
    }

    public function inposttitle(string $text): Google
    {
        return $this->plain(self::INPOSTTITLE . $text);
    }

    public function inpostauthor(string $text): Google
    {
        return $this->plain(self::INPOSTAUTHOR . $text);
    }

    public function allintext(string $text): Google
    {
        return $this->plain(self::ALLINTEXT . $text);
    }

    public function allintitle(string $text): Google
    {
        return $this->plain(self::ALLINTITLE . $text);
    }

    public function allinurl(string $text): Google
    {
        return $this->plain(self::ALLINURL . $text);
    }

    public function allinanchor(string $text): Google
    {
        return $this->plain(self::ALLINANCHOR . $text);
    }

    public function allinposttitle(string $text): Google
    {
        return $this->plain(self::ALLINPOSTTITLE . $text);
    }

    public function allinpostauthor(string $text): Google
    {
        return $this->plain(self::ALLINPOSTAUTHOR . $text);
    }

    public function filetype(string $text): Google
    {
        return $this->plain(self::FILETYPE . $text);
    }

    public function cache(string $text): Google
    {
        return $this->plain(self::CACHE . $text);
    }

    public function related(string $text): Google
    {
        return $this->plain(self::RELATED . $text);
    }

    public function ext(string $text): Google
    {
        return $this->plain(self::EXT . $text);
    }

    public function book(string $text): Google
    {
        return $this->plain(self::BOOK . $text);
    }

    public function ip(string $text): Google
    {
        return $this->plain(self::IP . $text);
    }

    public function in(string $type_1, string $type_2): Google
    {
        return $this->plain($type_1 . self::IN . $type_2);
    }

    public function maps(string $text): Google
    {
        return $this->plain(self::MAPS . $text);
    }

    public function info(string $text): Google
    {
        return $this->plain(self::INFO . $text);
    }

    public function define(string $text): Google
    {
        return $this->plain(self::DEFINE . $text);
    }

    public function stocks(string $text): Google
    {
        return $this->plain(self::STOCKS . $text);
    }

    public function hashtag(string $text): Google
    {
        return $this->plain(self::HASHTAG . $text);
    }

    public function username(string $text): Google
    {
        return $this->plain(self::USERNAME . $text);
    }

    public function loc(string $text): Google
    {
        return $this->plain(self::LOC . $text);
    }

    public function location(string $text): Google
    {
        return $this->plain(self::LOCATION . $text);
    }

    public function blogurl(string $text): Google
    {
        return $this->plain(self::BLOGURL . $text);
    }

    public function source(string $text): Google
    {
        return $this->plain(self::SOURCE . $text);
    }

    public function phonebook(string $text): Google
    {
        return $this->plain(self::PHONEBOOK . $text);
    }

    public function movie(string $text): Google
    {
        return $this->plain(self::MOVIE . $text);
    }

    public function weather(string $text): Google
    {
        return $this->plain(self::WEATHER . $text);
    }

    public function around(string $text): Google
    {
        return $this->plain(self::AROUND . '(' . $text . ')');
    }

    public function before(string $text): Google
    {
        return $this->plain(self::BEFORE . ':' . $text);
    }

    public function after(string $text): Google
    {
        return $this->plain(self::AFTER . ':' . $text);
    }

    public function betweenrange(int $start, int $end): Google
    {
        return $this->plain($start . self::BETWEEN . $end);
    }

    public function daterange(string $start, string $end): Google
    {
        $format = "m-d-Y";
        $date1 = date_create($start);
        $date2 = date_create($end);
        $date1 = date_format($date1, $format);
        $date2 = date_format($date2, $format);
        $date1 = date_parse_from_format($format, $date1);
        $date2 = date_parse_from_format($format, $date2);

        if ($date1['warning_count'] > 0) {
            throw new \Exception(implode(PHP_EOL, $date1['warnings']));
        }

        if ($date2['warning_count'] > 0) {
            throw new \Exception(implode(PHP_EOL, $date2['warnings']));
        }

        $date1 = juliantojd($date1['month'], $date1['day'], $date1['year']);
        $date2 = juliantojd($date2['month'], $date2['day'], $date2['year']);

        return $this->plain(self::DATERANGE . $date1 . '-' . $date2);
    }

    public function quotes(string $text): Google
    {
        return $this->plain('"' . $text . '"');
    }

    public function quote(string $text): Google
    {
        return $this->quotes($text);
    }

    public function includePlain(string $text): Google
    {
        return $this->plain(self::INCLUDE . $text);
    }

    public function excludePlain(string $text): Google
    {
        return $this->plain(self::EXCLUDE . $text);
    }

    public function any(): Google
    {
        return $this->plain(self::ANY);
    }

    public function or(): Google
    {
        return $this->plain(self::OR);
    }

    public function and(): Google
    {
        return $this->plain(self::AND);
    }

    public function include(Google $tags): Google
    {
        foreach ($tags->tags as $tag) {
            if ($tag === self::OR || $tag === self::AND || $tag === self::ANY || $tag === self::INCLUDE || $tag === self::EXCLUDE) {
                $this->tags[] = $tag;
            } else $this->plain(self::INCLUDE . $tag);
        }
        
        return $this;
    }

    public function exclude(Google $tags): Google
    {
        foreach ($tags->tags as $tag) {
            if ($tag === self::OR || $tag === self::AND || $tag === self::ANY || $tag === self::INCLUDE || $tag === self::EXCLUDE) {
                $this->tags[] = $tag;
            } else $this->plain(self::EXCLUDE . $tag);
        }

        return $this;
    }

    public function group(Google $tags): Google
    {
        return $this->plain('(' . join(' ', $tags->tags) . ')');
    }

    public function merge(array $tags): Google
    {
        array_map(fn($tag) => $this->plain($tag), $tags);
        return $this;
    }

    public function tags(): array
    {
        return $this->tags;
    }

    public function url(): string
    {
        return sprintf(self::URL, urlencode($this->string()));
    }

    public function string(): string
    {
        return implode(' ', $this->tags);
    }

    public function dork(): string
    {
        return $this->string();
    }

    public function __toString()
    {
        return $this->string();
    }
}