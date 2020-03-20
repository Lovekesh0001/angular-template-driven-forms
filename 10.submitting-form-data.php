#novalidate
#(ngSubmit)="onSubmit()"
#ng g s serviceName
#*ngIf="!submitted"   after submitted data hide form


The novalidate attribute in HTML is used to signify that the form won’t get validated on submit. It is a Boolean attribute and useful if you want the user to save the progress of form filing. If the form validation is disabled, the user can easily save the form and continue & submit the form later. While continuing, the user does not have to first validate all the entries.
<form #userForm="ngForm" *ngIf="!submitted" (ngSubmit)="onSubmit()" novalidate>

    <div class="form-group">
        <select (blur)="validateTopic(topic.value)" (change)="validateTopic(topic.value)" #topic="ngModel" required [class.is-invalid]="topicHasError && topic.touched" class="custom-select" [(ngModel)]="userModel.topic" name="topic">
            <option value="">I am interested in</option>
            <option *ngFor="let topic of topics">{{ topic }}</option>
        </select>
        <small class="text-danger" [class.d-none]="!topicHasError || topic.untouched">Topic is required!</small>
    </div>

    <button class="btn btn-primary" [disabled]="userForm.form.invalid" type="submit">Submit form</button>
</form>	 

===============================================================================================
#app.module.ts
import { HttpClientModule } from '@angular/common/http';

imports: [
    BrowserModule,
    HttpClientModule
  ],

===============================================================================================
#create service
#ng g s serviceName

import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';   == import this
import { User } from './user';                       ==import model

@Injectable({
  providedIn: 'root'
})
export class EnrollmentService {
  readonly url = 'http://localhost:3000/enroll';
  constructor(private http: HttpClient) { }

  enroll(user: User) {
    return this.http.post(this.url, user);
  }
}
===============================================================================================
#app.component.ts
import { Component } from '@angular/core';
import { User } from './user';
import { EnrollmentService } from './enrollment.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  topicHasError = true;
  submitted = false;
  topics = ['Angular', 'React', 'Vue'];
  userModel = new User('Lovekesh', 'lo@gmail.com', 745, '', 'morning', true);

  constructor(private enrollmentService: EnrollmentService) { }

  validateTopic(value) {
    if (value === '') {
      this.topicHasError = true;
    } else {
      this.topicHasError = false;
    }
  }

  onSubmit() {
    submitted = true;
    this.enrollmentService.enroll(this.userModel)
                          .subscribe(
                            data => console.log('Success!', data),
                            error => console.error('Error!', error)
                          );
  }
}
