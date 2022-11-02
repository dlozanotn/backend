<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class BooksApiTest extends TestCase
{

    use RefreshDatabase;

    function can_get_all_books()

    {

        $book = Book::factory(3)->create();

       dd(route('books.index'));
       $this->get(route('books.index'))->dump();

    }
}
