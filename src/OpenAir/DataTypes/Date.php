<?php

namespace OpenAir\DataTypes;

use OpenAir\Base\DataType;

/**
 * Class Date
 *
 * @package OpenAir\DataTypes
 * @property int $year
 * @property int $month
 * @property int $day
 * @property int $hour
 * @property int $minute
 * @property int $second
 */
class Date extends DataType
{
    protected $data = [
        'year' => null, //Year.
        'month' => null, //Month.
        'day' => null, //Day.
        'hour' => null, //Hour.
        'minute' => null, //Minute.
        'second' => null, //Second.
    ];

    public function __construct($hour = null, $minute = null, $second = null, $month = null, $day = null, $year = null)
    {
        $ary = ['hour' => 'H', 'minute' => 'i', 'second' => 's', 'month' => 'n', 'day' => 'j', 'year' => 'Y'];
        foreach ($ary as $var => $dateStr) {
            if (!is_null($$var) && $$var > 0) {
                $this->data[$var] = $$var;
            }
        }
        parent::__construct();
    }

    /**
     * @return \DateTime|false
     */
    public function toDateTime()
    {
        $strDateTime = $this->year
            . "-" . sprintf("%02d", $this->month)
            . "-" . sprintf("%02d", $this->day)
            . " " . sprintf("%02d", $this->hour)
            . ":" . sprintf("%02d", $this->minute)
            . ":" . sprintf("%02d", $this->second);

        return \DateTime::createFromFormat("Y-m-d H:i:s", $strDateTime);
    }

    public function __toString()
    {
        return $this->toDateTime()->format("Y-m-d H:i:s");
    }

    /**
     * @param \DateTime $dateTime
     */
    public function setFromDateTime(\DateTime $dateTime) : Date
    {
        $this->setYear($dateTime->format('Y'))
            ->setMonth($dateTime->format('m'))
            ->setDay($dateTime->format('d'))
            ->setHour($dateTime->format('H'))
            ->setMinute($dateTime->format('I'))
            ->setSecond((int)$dateTime->format('s'));

        return $this;
    }

    /**
     * @param int|string $timestamp
     * @return $this
     * @throws \Exception
     */
    public function setFromTimestamp($timestamp)
    {
        return $this->setFromDateTime((new \DateTime())->setTimestamp($timestamp));
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     * @return Date
     */
    public function setYear(int $year): Date
    {
        $this->year = $year;

        return $this;
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @param int $month
     * @return Date
     */
    public function setMonth(int $month): Date
    {
        $this->month = $month;

        return $this;
    }

    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * @param int $day
     * @return Date
     */
    public function setDay(int $day): Date
    {
        $this->day = $day;

        return $this;
    }

    /**
     * @return int
     */
    public function getHour(): int
    {
        return $this->hour;
    }

    /**
     * @param int $hour
     * @return Date
     */
    public function setHour(int $hour): Date
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinute(): int
    {
        return $this->minute;
    }

    /**
     * @param int $minute
     * @return Date
     */
    public function setMinute(int $minute): Date
    {
        $this->minute = $minute;

        return $this;
    }

    /**
     * @return int
     */
    public function getSecond(): int
    {
        return $this->second;
    }

    /**
     * @param int $second
     * @return Date
     */
    public function setSecond(int $second): Date
    {
        $this->second = $second;

        return $this;
    }


}
