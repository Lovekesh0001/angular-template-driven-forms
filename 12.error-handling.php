===========================================================================================
#import 
import { catchError } from 'rxjs/operators';
import { throwError } from 'rxjs';

#create function 
errorHandler(error: HttpErrorResponse) {   ===========
  return throwError(error);
}
===========================================================================================
#service.ts

import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { User } from './user';


import { catchError } from 'rxjs/operators';   ======== 
import { throwError } from 'rxjs';             ==========

@Injectable({
  providedIn: 'root'
})
export class EnrollmentService {
  readonly url = 'http://localhost:3000/enroll';
  constructor(private http: HttpClient) { }

  enroll(user: User) {
    return this.http.post<any>(this.url, user)
                              .pipe(catchError(this.errorHandler));   ============
  }

  errorHandler(error: HttpErrorResponse) {   ===========
    return throwError(error);
  }
}

===========================================================================================
app.component.ts

errorMessage = '';
onSubmit() {
    this.submitted = true;
    this.enrollmentService.enroll(this.userModel)
                          .subscribe(
                            data => console.log('Success!', data),
                            error => this.errorMessage = error.message
                          );
  }


=========================================================================================== 
app.component.html
<div class="alert alert-danger" *ngIf="errorMessage">
    {{errorMessage}}
</div>