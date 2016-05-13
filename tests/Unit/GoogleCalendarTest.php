<?php

namespace Spatie\GoogleCalendar\Test\Unit;

use Google_Service_Calendar;
use Mockery;
use Spatie\GoogleCalendar\GoogleCalendar;

class GoogleCalendarTest extends \PHPUnit_Framework_TestCase
{
    /** @var Mockery\Mock|Google_Service_Calendar */
    protected $googleServiceCalendar;

    /** @var string */
    protected $calendarId;

    /** @var \Spatie\GoogleCalendar\GoogleCalendar */
    protected $googleCalendar;

    public function setUp()
    {
        parent::setUp();

        $this->googleServiceCalendar = Mockery::mock(Google_Service_Calendar::class);

        $this->calendarId = 'abc123';

        $this->googleCalendar = new GoogleCalendar($this->googleServiceCalendar, $this->calendarId);
    }

    /** @test */
    public function it_provides_a_getter_for_calendarId()
    {
        $this->assertEquals($this->calendarId, $this->googleCalendar->getCalendarId());
    }
}
