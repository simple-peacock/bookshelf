<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookTest extends TestCase
{
    use DatabaseTransactions;

    public function testBorrowAndReturnBook()
    {
        $this->visit('/')
             ->click('Borrow Book')
             ->seePageIs('/book/create')
             ->submitForm('OK', [
                'title' => 'Test Book Title',
                'author' => 'Test Book Author',
                'barcode' => 'CODE12345',
                'name' => 'Test User Name',
                'email' => 'testuser@example.com'])
             ->seeInDatabase('books', ['title' => 'Test Book Title', 'status' => 'borrowed']);

        // does the book appear on the front page as borrowed?
        $this->visit('/')
             ->see('Test Book Title');

        // return a book
        $this->visit('/')
            ->see('Test Book Title')
            ->click('Return Book')
            ->seeInDatabase('books', ['title' => 'Test Book Title', 'status' => 'returned']);

        // book should not appear in the listing
        $this->visit('/')
             ->dontSee('Test Book Title');
    }
}
