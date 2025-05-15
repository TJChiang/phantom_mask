<?php

namespace App\Enums;

/**
 * @see \Carbon\CarbonInterface
 * @see \Carbon\WeekDay
 */
enum Weekday: int
{
    case SUNDAY = 0;
    case MONDAY = 1;
    case TUESDAY = 2;
    case WEDNESDAY = 3;
    case THURSDAY = 4;
    case FRIDAY = 5;
    case SATURDAY = 6;

    /**
     * @param Weekday $begin
     * @param Weekday $end
     * @return Weekday[]
     */
    public static function fromInterval(Weekday $begin, Weekday $end): array
    {
        $list = [];
        if ($begin->value >= $end->value) {
            for ($i = $begin->value; $i <= $end->value; $i++) {
                $list[] = self::from($i);
            }
        } else {
            for ($i = $begin->value; $i <= self::lastWeekday()->value; $i++) {
                $list[] = self::from($i);
            }
            for ($i = self::firstWeekday()->value; $i <= $end->value; $i++) {
                $list[] = self::from($i);
            }
        }
        return $list;
    }

    public static function fromShortening(string $shortening): self
    {
        return match ($shortening) {
            'Mon' => self::MONDAY,
            'Tue' => self::TUESDAY,
            'Wed' => self::WEDNESDAY,
            'Thu' => self::THURSDAY,
            'Fri' => self::FRIDAY,
            'Sat' => self::SATURDAY,
            'Sun' => self::SUNDAY,
        };
    }

    public static function values(): array
    {
        return [
            self::MONDAY->value,
            self::TUESDAY->value,
            self::WEDNESDAY->value,
            self::THURSDAY->value,
            self::FRIDAY->value,
            self::SATURDAY->value,
            self::SUNDAY->value,
        ];
    }

    public static function firstWeekday(): self
    {
        return self::SUNDAY;
    }

    public static function lastWeekday(): self
    {
        return self::SUNDAY;
    }

    public function toString(): string
    {
        return match ($this) {
            self::MONDAY => 'Monday',
            self::TUESDAY => 'Tuesday',
            self::WEDNESDAY => 'Wednesday',
            self::THURSDAY => 'Thursday',
            self::FRIDAY => 'Friday',
            self::SATURDAY => 'Saturday',
            self::SUNDAY => 'Sunday',
        };
    }
}
