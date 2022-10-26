import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AppfinalPageRoutingModule } from './appfinal-routing.module';

import { AppfinalPage } from './appfinal.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AppfinalPageRoutingModule
  ],
  declarations: [AppfinalPage]
})
export class AppfinalPageModule {}
