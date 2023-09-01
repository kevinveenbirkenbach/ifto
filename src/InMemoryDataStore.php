<?php

namespace App;

class InMemoryDataStore implements DataStore
{
    private array $data = [
        ['name' => 'Kevin', 'birthdate' => '1993-09-07', 'tags' => ['alive']],
        ['name' => 'Marco', 'birthdate' => '1995-07-13', 'tags' => ['alive']],
        ['name' => 'Albert Camus', 'birthdate' => '1913-11-07', 'tags' => ['dead']],
    ];

    public function insert(array $data): void
    {
        $this->data[] = $data;
    }

    /**
     * For the POC the "query" is just a list of tags.
     *
     * This can be made more sophisticated (or not) in the future.
     */
    public function query(array $query): array
    {
        return array_filter(
            $this->data,
            fn(array $data) => count(array_intersect($data['tags'], $query)) > 0
        );
    }
}
