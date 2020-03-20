<form #userForm="ngForm">

    <div class="form-group">
        <select (blur)="validateTopic(topic.value)" (change)="validateTopic(topic.value)" #topic="ngModel" required [class.is-invalid]="topicHasError && topic.touched" class="custom-select" [(ngModel)]="userModel.topic" name="topic">
            <option value="">I am interested in</option>
            <option *ngFor="let topic of topics">{{ topic }}</option>
        </select>
        <small class="text-danger" [class.d-none]="!topicHasError || topic.untouched">Topic is required!</small>
    </div>

    <button class="btn btn-primary" type="submit">Submit form</button>
</form>	 

export class AppComponent {
  topicHasError = true;
  topics = ['Angular', 'React', 'Vue'];
  userModel = new User('Lovekesh', 'lo@gmail.com', 745, '', 'morning', true);

  validateTopic(value) {
    if (value === '') {
      this.topicHasError = true;
    } else {
      this.topicHasError = false;
    }
  }
} 