state                               class if true             class if false
the control has been visited        ng-touched				  ng-untouched

the control value has changed       ng-dirty				  ng-pristine

the control value is valid          ng-valid				  ng-invalid



#name  == template refrence give the all classes
{{name.className}}   == gives all the clas name

#name="ngModel"   == get access to the class true or flase
{{name.dirty}}, {{name.valid}}    == gives true or false value

<form #userForm="ngForm">
     {{name.className}}
    <div class="form-group">
        <label>Name</label>
        <input type="text" #name class="form-control" [(ngModel)]="userModel.name" name="name">
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>	  