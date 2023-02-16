<?php
declare(strict_types=1);

namespace FastBillSdk\WorkTime;

use FastBillSdk\Common\AbstractSearchStruct;

class WorkTimeSearchStruct extends AbstractSearchStruct
{
    public function setCustomerIdFilter(int $customerId)
    {
        $this->filters['CUSTOMER_ID'] = $customerId;
    }

    public function setProjectIdFilter(int $projectId)
    {
        $this->filters['PROJECT_ID'] = $projectId;
    }

    public function setTaskIdFilter(int $taskId)
    {
        $this->filters['TASK_ID'] = $taskId;
    }

    public function setTimeIdFilter(int $timeId)
    {
        $this->filters['TIME_ID'] = $timeId;
    }

    public function setStartDateFilter(string $startDate)
    {
        $this->filters['START_DATE'] = $startDate;
    }

    public function setEndDateFilter(string $endDate)
    {
        $this->filters['END_DATE'] = $endDate;
    }

    public function setDateFilter(string $date)
    {
        $this->filters['DATE'] = $date;
    }
}
