<?php

namespace Chart;

class DoughnutChart extends Chart
{
    /**
     * PieChart constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->type = 'doughnut';
    }
}