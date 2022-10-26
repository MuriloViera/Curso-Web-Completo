import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { EntradadadosPage } from './entradadados.page';

const routes: Routes = [
  {
    path: '',
    component: EntradadadosPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EntradadadosPageRoutingModule {}
