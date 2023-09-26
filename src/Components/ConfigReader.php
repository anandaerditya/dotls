<?php

namespace Anandaerditya\Dotls\src\Components;

use Anandaerditya\Dotls\src\Interfaces\ConfigReaderInterface;

class ConfigReader implements ConfigReaderInterface
{
    private array $fileRawContent;

    /**
     * @param string $filename
     * @return string
     */
    public function prepare(string $filename): string
    {
        return fread(fopen($filename, 'r+'), filesize($filename));
    }

    /**
     * @param string $rawContent
     * @return array
     */
    public function readAssoc(string $rawContent): array
    {
        $explEOL = explode(PHP_EOL, $rawContent);

        foreach ($explEOL as $item) {
            $explConf = explode(':', $item);
            $this->fileRawContent[$explConf[0]] = $explConf[1];
        }

        return $this->fileRawContent;
    }
}