import { HttpErrorResponse } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { User } from './user';
import { UserService } from './user.service';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {
  public users: User[] = [];

  constructor(private userService: UserService) {

  }


  ngOnInit(): void {
    this.getUsers();
  }

  public getUsers(): void {
    this.userService.getBooks().subscribe(
      (respose: User[]) => {
        this.users = respose;
      },
      (error: HttpErrorResponse) => {
        alert(error.message)
      }
    );

  }
}
