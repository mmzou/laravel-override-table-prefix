<?php

namespace Mmzou\LaravelOverrideTablePrefix;

trait OverrideTablePrefix
{
    /**
     * Boot the override table prefix trait for a model.
     *
     * @return void
     */
    public static function bootOverrideTablePrefix()
    {
        static::addGlobalScope(new OverrideTablePrefixScope);
    }
}