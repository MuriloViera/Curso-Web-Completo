import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { DatabindingPageRoutingModule } from './databinding-routing.module';

import { DatabindingPage } from './databinding.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    DatabindingPageRoutingModule
  ],
  declarations: [DatabindingPage]
})
export class DatabindingPageModule {}
