<!-- [class.is-invalid]="name.invalid && name.touched" required
is-invalid class is apllied on required
-->
<form #userForm="ngForm">

    <div class="form-group">
            <label>Name</label>
            <input type="text" #name="ngModel" [class.is-invalid]="name.invalid && name.touched" required class="form-control" [(ngModel)]="userModel.name" name="name">
        </div>


        <div class="form-group">
            <label>Phone</label>
            <input type="tel" #phone="ngModel" pattern="^\d{10}$" [class.is-invalid]="phone.invalid && phone.touched" class="form-control" [(ngModel)]="userModel.phone" name="phone">
        </div>

    <button class="btn btn-primary" type="submit">Submit form</button>
</form>	  