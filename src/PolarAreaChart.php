<?php

namespace Chart;

class PolarAreaChart extends Chart
{
    /**
     * PieChart constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->type = 'polarArea';
    }
}