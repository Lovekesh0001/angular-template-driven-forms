#userForm="ngForm" == from refrence
#ngModel name="name"   == use name  with ngModel bind data

{{userForm.value | json}}  == { "name": "assasas", "email": "awadhmca@yopmail.com", "phone": "232323", "topic": "Angular", "timePreference": "morning", "subscribe": true }
<div class="container-fluid">
    <h2>Bootcamp Enrollment Form</h2>

    <form #userForm="ngForm">
        {{userForm.value | json}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" ngModel name="name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" ngModel name="email">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="tel" class="form-control" ngModel name="phone">
        </div>


        <div class="form-group">
            <select class="custom-select" ngModel name="topic">
        <option value="default">I am interested in</option>
        <option *ngFor="let topic of topics">{{ topic }}</option>
      </select>
        </div>

        <div class="mb-3">
            <label>Time preference</label>
            <div class="form-check">
                <input class="form-check-input" ngModel type="radio" name="timePreference" value="morning">
                <label class="form-check-label">Morning (9AM - 12PM)</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" ngModel type="radio" name="timePreference" value="evening">
                <label class="form-check-label">Evening (5PM - 8PM)</label>
            </div>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" ngModel type="checkbox" name="subscribe">
            <label class="form-check-label">
        Send me promotional offers
      </label>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>