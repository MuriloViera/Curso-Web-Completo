import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ModelosPageRoutingModule } from './modelos-routing.module';

import { ModelosPage } from './modelos.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ModelosPageRoutingModule
  ],
  declarations: [ModelosPage]
})
export class ModelosPageModule {}
