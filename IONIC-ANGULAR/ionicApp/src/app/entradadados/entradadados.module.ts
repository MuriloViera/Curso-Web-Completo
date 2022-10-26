import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { EntradadadosPageRoutingModule } from './entradadados-routing.module';

import { EntradadadosPage } from './entradadados.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    EntradadadosPageRoutingModule
  ],
  declarations: [EntradadadosPage]
})
export class EntradadadosPageModule {}
