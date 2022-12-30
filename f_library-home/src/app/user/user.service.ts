import { Injectable } from "@angular/core";
import { Observable } from "rxjs";
import { HttpClient } from '@angular/common/http';
import { User } from "./user";
import { enviroment } from "src/environments/environment";


@Injectable({
    providedIn: 'root'
})
export class UserService{
    private apiServerUrl:String = enviroment.apiBaseUrl;

    constructor(private http: HttpClient) {
        
    }

    public getBooks(): Observable<User[]>{
        return this.http.get<User[]>(this.apiServerUrl + '/users/all');
    }

    public addBook(book: User): Observable<User>{
        return this.http.post<User>(this.apiServerUrl + '/users/add', book);
    }

    public updateBook(book: User): Observable<User>{
        return this.http.put<User>(this.apiServerUrl + '/users/update', book);
    }

    public deleteBook(userId: number): Observable<void>{
        return this.http.delete<void>(this.apiServerUrl + '/users/delete/${userId}');
    }
}