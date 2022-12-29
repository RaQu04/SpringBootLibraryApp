import { Injectable } from "@angular/core";
import { Observable } from "rxjs";
import { HttpClient } from '@angular/common/http';
import { Book } from "./book";
import { enviroment } from "src/environments/environment";


@Injectable({
    providedIn: 'root'
})
export class BookService{
    private apiServerUrl:String = enviroment.apiBaseUrl;

    constructor(private http: HttpClient) {
        
    }

    public getBooks(): Observable<Book[]>{
        return this.http.get<Book[]>(this.apiServerUrl + '/books/all');
    }

    public addBook(book: Book): Observable<Book>{
        return this.http.post<Book>(this.apiServerUrl + '/books/add', book);
    }

    public updateBook(book: Book): Observable<Book>{
        return this.http.put<Book>(this.apiServerUrl + '/books/update', book);
    }

    public deleteBook(bookId: number): Observable<void>{
        return this.http.delete<void>(this.apiServerUrl + '/books/delete/${bookId}');
    }
}