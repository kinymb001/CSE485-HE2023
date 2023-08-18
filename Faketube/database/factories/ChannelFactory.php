<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Channel;
class ChannelFactory extends Factory
{

    protected $model = Channel::class;

    public function definition()
    {
        return [
            'ChannelName' => $this->faker->name,
            'Description' => $this->faker->paragraph,
            'SubscribersCount' => $this->faker->buildingNumber,
            'URL' => $this->faker->url,
        ];
    }
}
