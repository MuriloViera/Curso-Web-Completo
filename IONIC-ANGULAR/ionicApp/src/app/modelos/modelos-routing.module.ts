import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ModelosPage } from './modelos.page';

const routes: Routes = [
  {
    path: '',
    component: ModelosPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ModelosPageRoutingModule {}
