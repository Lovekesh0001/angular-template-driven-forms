<!-- <small class="text-danger" [class.d-none]="phone.valid && phone.untouched">Phone Number is required & must be 10 digit!</small> Multiple errors in one line-->   
<!-- <div *ngIf="phone.errors && (phone.invalid || phone.touched)">
    <small class="text-danger" *ngIf="phone.errors.required">Phone Number is required!</small>
    <small class="text-danger" *ngIf="phone.errors.pattern">Phone Number is must be 10 digit!</small>
</div> -->





            
<form #userForm="ngForm">

    <div class="form-group">
            <label>Name</label>
            <input type="text" #name="ngModel" [class.is-invalid]="name.invalid && name.touched" required class="form-control" [(ngModel)]="userModel.name" name="name">

            <small class="text-danger" [class.d-none]="name.valid && name.untouched">Name is required!</small>

        </div>


        <div class="form-group">
            <label>Phone</label>
            <input type="tel" #phone="ngModel" pattern="^\d{10}$" [class.is-invalid]="phone.invalid && phone.touched" class="form-control" [(ngModel)]="userModel.phone" name="phone">

            <!-- <small class="text-danger" [class.d-none]="phone.valid && phone.untouched">Phone Number is required & must be 10 digit!</small> Multiple errors in one line-->   
            <div *ngIf="phone.errors && (phone.invalid || phone.touched)">
                <small class="text-danger" *ngIf="phone.errors.required">Phone Number is required!</small>
                <small class="text-danger" *ngIf="phone.errors.pattern">Phone Number is must be 10 digit!</small>
            </div>


        </div>

    <button class="btn btn-primary" type="submit">Submit form</button>
</form>	  