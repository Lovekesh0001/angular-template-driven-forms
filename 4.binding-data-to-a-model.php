ng generate class User

[(ngModel)] == two way binding

user.ts   model class

export class User {
    constructor(
        public name: string,
        public email: string,
        public phone: number,
        public topic: string,
        public timePreference: string,
        public subscribe: boolean
    ) {}
}

app.component.ts
import { User } from './user';

userModel = new User('Lovekesh', 'lo@gmail.com', 745, '', 'morning', true);


<div class="container-fluid">
    <h2>Bootcamp Enrollment Form</h2>

    <form #userForm="ngForm">
        {{userForm.value | json}}
        <hr /> {{userModel | json}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" [(ngModel)]="userModel.name" name="name">
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>

