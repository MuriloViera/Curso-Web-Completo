import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-appfinal',
  templateUrl: './appfinal.page.html',
  styleUrls: ['./appfinal.page.scss'],
})
export class AppfinalPage {

  precoAlcool:string;
  precoGasolina:string;
  public resultado: String = "Resultado"

  calcular(){

    //Validar se os campos foram preenchidos
    if(this.precoAlcool && this.precoGasolina){

        var pAlcool = parseFloat(this.precoAlcool)
        var pGasolina = parseFloat(this.precoGasolina)

        if((pAlcool/pGasolina) >= 0.7){
          this.resultado = "Melhor usar a gasolina"
        }
        else{
          this.resultado = "Melhor usar o alcool"
        }

    }else{
      this.resultado = "Preencha corretamente os campos"
    }
  }

}
