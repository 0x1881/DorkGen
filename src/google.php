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
        BETWEENYEAR       = '..',

        EXCLUDE           = '-',
        ANY               = '*',
        OR                = 'OR',
        AND               = 'AND';

    public $tags;

    public function plain($text)
    {
        $this->tags[] = $text;
        return $this;
    }

    public function site($text)
    {
        return $this->plain(self::SITE . $text);
    }

    public function link($text)
    {
        return $this->plain(self::LINK . $text);
    }

    public function inurl($text)
    {
        return $this->plain(self::INURL . $text);
    }

    public function intext($text)
    {
        return $this->plain(self::INTEXT . $text);
    }

    public function intitle($text)
    {
        return $this->plain(self::INTITLE . $text);
    }

    public function inanchor($text)
    {
        return $this->plain(self::INANCHOR . $text);
    }

    public function inposttitle($text)
    {
        return $this->plain(self::INPOSTTITLE . $text);
    }

    public function inpostauthor($text)
    {
        return $this->plain(self::INPOSTAUTHOR . $text);
    }

    public function allintext($text)
    {
        return $this->plain(self::ALLINTEXT . $text);
    }

    public function allintitle($text)
    {
        return $this->plain(self::ALLINTITLE . $text);
    }

    public function allinurl($text)
    {
        return $this->plain(self::ALLINURL . $text);
    }

    public function allinanchor($text)
    {
        return $this->plain(self::ALLINANCHOR . $text);
    }

    public function allinposttitle($text)
    {
        return $this->plain(self::ALLINPOSTTITLE . $text);
    }

    public function allinpostauthor($text)
    {
        return $this->plain(self::ALLINPOSTAUTHOR . $text);
    }

    public function filetype($text)
    {
        return $this->plain(self::FILETYPE . $text);
    }

    public function cache($text)
    {
        return $this->plain(self::CACHE . $text);
    }

    public function related($text)
    {
        return $this->plain(self::RELATED . $text);
    }

    public function ext($text)
    {
        return $this->plain(self::EXT . $text);
    }

    public function book($text)
    {
        return $this->plain(self::BOOK . $text);
    }

    public function ip($text)
    {
        return $this->plain(self::IP . $text);
    }

    public function maps($text)
    {
        return $this->plain(self::MAPS . $text);
    }

    public function info($text)
    {
        return $this->plain(self::INFO . $text);
    }

    public function define($text)
    {
        return $this->plain(self::DEFINE . $text);
    }

    public function stocks($text)
    {
        return $this->plain(self::STOCKS . $text);
    }

    public function hashtag($text)
    {
        return $this->plain(self::HASHTAG . $text);
    }

    public function username($text)
    {
        return $this->plain(self::USERNAME . $text);
    }

    public function loc($text)
    {
        return $this->plain(self::LOC . $text);
    }

    public function location($text)
    {
        return $this->plain(self::LOCATION . $text);
    }

    public function blogurl($text)
    {
        return $this->plain(self::BLOGURL . $text);
    }

    public function source($text)
    {
        return $this->plain(self::SOURCE . $text);
    }

    public function phonebook($text)
    {
        return $this->plain(self::PHONEBOOK . $text);
    }

    public function movie($text)
    {
        return $this->plain(self::MOVIE . $text);
    }

    public function weather($text)
    {
        return $this->plain(self::WEATHER . $text);
    }

    public function around($text)
    {
        return $this->plain(self::AROUND . '(' . $text . ')');
    }

    public function before($text)
    {
        return $this->plain(self::BEFORE . ':' . $text);
    }

    public function after($text)
    {
        return $this->plain(self::AFTER . ':' . $text);
    }

    public function betweenyear($year1, $year2)
    {
        return $this->plain($year1 . self::BETWEENYEAR . $year2);
    }

    public function daterange($date1, $date2)
    {
        return $this->plain(self::DATERANGE . $date1 . '-' . $date2);
    }

    public function quotes($text)
    {
        return $this->plain('"' . $text . '"');
    }

    public function any()
    {
        return $this->plain(self::ANY);
    }

    public function or()
    {
        return $this->plain(self::OR);
    }

    public function and()
    {
        return $this->plain(self::AND);
    }

    public function exclude(Google $tags)
    {
        foreach ($tags->tags as $tag) {
            if ($tag == self::OR || $tag == self::AND || $tag == self::ANY || $tag == self::EXCLUDE) {
                $this->tags[] = $tag;
            } else $this->tags[] = self::EXCLUDE . $tag;
        }
        return $this;
    }

    public function group(Google $tags)
    {
        return $this->plain('(' . join(' ', $tags->tags) . ')');
    }

    public function string()
    {
        return implode(' ', $this->tags);
    }

    public function url()
    {
        return sprintf(self::URL, urlencode($this->string()));
    }
}