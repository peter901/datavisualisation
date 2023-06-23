<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class APITransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $transaction_date = $this->faker->dateTimeThisYear();

        return [
            'payment_agent' =>$this->faker->randomElement(['Airtel', 'MTN']),
            'accountNumber' =>str_pad(rand(20,40), 9, 0, STR_PAD_LEFT),
            'name' =>$this->faker->name(),
            'phoneNumber' =>$this->faker->phoneNumber(),
            'transactionAmount' =>$this->faker->numberBetween(1,99)*1000,
            'transactionId' =>$this->faker->numberBetween(10000000000, 90000000000),
            'transactionDate' =>$transaction_date->format("d M Y"),
            'payment_agent_timestamp' =>$transaction_date,
            'API_timestamp' =>$transaction_date,
            'paymentTypeId' =>1,
            'locale' =>'en',
            'dateFormat' =>"dd MMMM yyyy",
            'receiptNumber' =>"API" .$this->faker->numberBetween(1000, 9000),
            'sync' =>'EB_SYNC_OK',
            'comment' =>'OK',
        ];
    }
}
