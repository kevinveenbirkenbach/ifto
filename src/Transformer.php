<?php

namespace App;

class Transformer
{
    /**
     * Calculate the age of people queried from the data store.
     */
    public function transform(array $data): array
    {
        return [
            'name' => $data['name'],
            'age' => (new \DateTimeImmutable())->diff(new \DateTimeImmutable($data['birthdate']))->format('%y'),
        ];
    }
}
