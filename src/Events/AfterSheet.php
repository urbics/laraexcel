<?php

namespace Urbics\Laraexcel\Events;

use Urbics\Laraexcel\Sheet;

class AfterSheet
{
    /**
     * @var Sheet
     */
    public $sheet;

    /**
     * @param Sheet $sheet
     */
    public function __construct(Sheet $sheet)
    {
        $this->sheet = $sheet;
    }

    /**
     * @return Sheet
     */
    public function getSheet(): Sheet
    {
        return $this->sheet;
    }
}
