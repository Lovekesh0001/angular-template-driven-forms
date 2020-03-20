<!-- Disable form
	[disabled]="userForm.form.invalid -->

<form #userForm="ngForm">

    <div class="form-group">
        <select (blur)="validateTopic(topic.value)" (change)="validateTopic(topic.value)" #topic="ngModel" required [class.is-invalid]="topicHasError && topic.touched" class="custom-select" [(ngModel)]="userModel.topic" name="topic">
            <option value="">I am interested in</option>
            <option *ngFor="let topic of topics">{{ topic }}</option>
        </select>
        <small class="text-danger" [class.d-none]="!topicHasError || topic.untouched">Topic is required!</small>
    </div>

    <button class="btn btn-primary" [disabled]="userForm.form.invalid" type="submit">Submit form</button>
</form>	 