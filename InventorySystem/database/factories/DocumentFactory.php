<?php

namespace Database\Factories;

use App\Models\Document;
use App\Models\Client;
use App\Models\Inventory;
use App\Models\DocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'client_id' => Client::all()->random()->id,
            'product_id' => Inventory::all()->random()->id,
            'document_type_id' => DocumentType::all()->random()->id,
            'additional_notes' => $this->faker->sentence,
            'date_submitted' => $this->faker->date(),
            'file' => $this->faker->word . '.pdf',
        ];
    }
}