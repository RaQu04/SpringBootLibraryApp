import { HttpErrorResponse } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Book } from './book';
import { BookService } from './book.service';

@Component({
  selector: 'app-book',
  templateUrl: './book.component.html',
  styleUrls: ['./book.component.css']
})
export class BookComponent implements OnInit {
  public books: Book[] = [];

  constructor(private bookService: BookService) {

  }
  ngOnInit(): void {
    this.getBooks();
  }

  public getBooks(): void {
    this.bookService.getBooks().subscribe(
      (respose: Book[]) => {
        this.books = respose;
      },
      (error: HttpErrorResponse) => {
        alert(error.message)
      }
    );

  }
}
