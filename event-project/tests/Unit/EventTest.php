<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Event;
use App\Models\UserSetting;
use Database\Factories\EventFactory;

class EventTest extends TestCase
{
    public function testEventCreation()
    {
        // Create an event using the factory
        $event = Event::factory()->create();

        // Assert that the event was created successfully
        $this->assertInstanceOf(Event::class, $event);
        $this->assertDatabaseHas('events', $event->toArray());
    }

    public function testEventAttributes()
    {
        // Create an event using the factory
        $event = Event::factory()->create();

        // Assert that the event attributes match the factory definition
        $this->assertNotNull($event->title);
        $this->assertNotNull($event->description);
        $this->assertNotNull($event->start_date);
        $this->assertNotNull($event->location);
        $this->assertNotNull($event->capacity);
        $this->assertNotNull($event->user_id);
        $this->assertNotNull($event->category_id);
    }
    public function testUserSettingSeeding()
    {
        // Run the UserSettingSeeder
        $this->artisan('db:seed', ['--class' => 'UserSettingSeeder']);

        // Retrieve the first UserSetting document
        $userSetting = UserSetting::first();

        // Assert that the UserSetting was seeded correctly with everything disabled
        $this->assertNotNull($userSetting);
        $this->assertFalse($userSetting->autoReservation);
        $this->assertFalse($userSetting->autoApproval);
        $this->assertFalse($userSetting->autoCreation);
    }
}
