import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AppfinalPage } from './appfinal.page';

const routes: Routes = [
  {
    path: '',
    component: AppfinalPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AppfinalPageRoutingModule {}
