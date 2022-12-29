import { HttpErrorResponse } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Book } from './book/book';
import { BookService } from './book/book.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit{
  public books: Book[] = [];
  
  constructor(private bookService: BookService) {
    
  }

  ngOnInit(): void {
      this.getBooks();
  }

  public getBooks(): void{
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
