import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { DatabindingPage } from './databinding.page';

const routes: Routes = [
  {
    path: '',
    component: DatabindingPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class DatabindingPageRoutingModule {}
