import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from "@angular/router";

// Main Component
import { AppComponent } from './app.component';

// Subscription Components
import { HomeComponent } from './home/home.component';

// Main IAHSP Routes
const SUBSCRIPTION_ROUTES: Routes = [
  { path: "", component: HomeComponent }
];

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,

    // Routing
    RouterModule.forRoot(SUBSCRIPTION_ROUTES)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
