import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)
  },
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: 'botoes',
    loadChildren: () => import('./botoes/botoes.module').then( m => m.BotoesPageModule)
  },
  {
    path: 'lista',
    loadChildren: () => import('./lista/lista.module').then( m => m.ListaPageModule)
  },
  {
    path: 'cartoes',
    loadChildren: () => import('./cartoes/cartoes.module').then( m => m.CartoesPageModule)
  },
  {
    path: 'entradadados',
    loadChildren: () => import('./entradadados/entradadados.module').then( m => m.EntradadadosPageModule)
  },
  {
    path: 'grid',
    loadChildren: () => import('./grid/grid.module').then( m => m.GridPageModule)
  },
  {
    path: 'databinding',
    loadChildren: () => import('./databinding/databinding.module').then( m => m.DatabindingPageModule)
  },
  {
    path: 'modelos',
    loadChildren: () => import('./modelos/modelos.module').then( m => m.ModelosPageModule)
  },
  {
    path: 'appfinal',
    loadChildren: () => import('./appfinal/appfinal.module').then( m => m.AppfinalPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }