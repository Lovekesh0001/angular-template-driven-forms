#Data Binding
#Change Tracking
#Validation
#Visual Feedback
#Error Message
#Form Submisson

1. Template Driven Forms
Most code written in the template
create simple form with using unit testing

2.Reactive or Model Driven Forms
Most code written in the component class

import { FormsModule } from '@angular/forms';  in app.module.ts
imports: [
	BrowserModule,
	AppRoutingModule,
	FormsModule
]

<form>
<div ngModelGroup="address">
	
</div>
</form>