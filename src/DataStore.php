<?php

namespace App;

/**
 * A data store that allows us to store and query (aka filter) data.
 *
 * Since the way data is inserted and queried are tightly coupled to the concrete implementation of the data store, it
 * makes sense for these two actions to be part of the same class.
 */
interface DataStore
{
    /**
     * Insert unstructured data into the data store.
     */
    public function insert(array $data): void;

    /**
     * Query data from the data store.
     *
     * The input here doesn't need to be an array - as we continue working on this we will eventually figure out what
     * the best input for this will be.
     */
    public function query(array $query): array;
}
