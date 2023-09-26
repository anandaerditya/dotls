<?php

namespace Anandaerditya\Dotls\src\Interfaces;

interface ConfigReaderInterface
{
    /**
     * @param string $filename
     * @return string
     */
    public function prepare (string $filename) : string;

    /**
     * @param string $rawContent
     * @return array
     */
    public function readAssoc(string $rawContent) : array;
}