import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-modelos',
  templateUrl: './modelos.page.html',
  styleUrls: ['./modelos.page.scss'],
})
export class ModelosPage{

  pesquisa: string;//Preciso criar isso se seu quiser usar ela dentro DESSE arquivo, home.page.ts, se for pra usar no home.page.html nao precisa pq o ngModel ja faz tudo

  public resultado:String = ""
  
  recuperar(){ /*Esse aqui é o jeito mais simples né, que eu aprendi com o Jorge, mas o Jamilton ensinou escrevendo public e void ainda, o que nao precisa pq eles sao padroes ja*/
    this.resultado = this.pesquisa
  }

}
