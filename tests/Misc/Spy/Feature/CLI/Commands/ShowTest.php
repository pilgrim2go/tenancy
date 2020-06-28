<?php

declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * Copyright Tenancy for Laravel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://tenancy.dev
 * @see https://github.com/tenancy
 */

namespace Tenancy\Tests\Misc\Spy\Feature\CLI\Commands;

use Tenancy\Misc\Spy\Provider;
use Tenancy\Testing\TestCase;

class ShowTest extends TestCase
{
    protected $additionalProviders = [Provider::class];

    /** @test */
    public function the_command_can_be_performed()
    {
        $this->artisan('spy:show')
            ->assertExitCode(0);
    }

    /** @test */
    public function it_can_be_called_with_installed()
    {
        $this->artisan('spy:show', [
            '--installed' => true
        ])
            ->assertExitCode(0);
    }

    /** @test */
    public function it_can_be_called_with_registered()
    {
        $this->artisan('spy:show', [
            '--registered' => true
        ])
            ->assertExitCode(0);
    }

    /** @test */
    public function it_can_be_called_with_configured()
    {
        $this->artisan('spy:show', [
            '--configured' => true
        ])
            ->assertExitCode(0);
    }
}