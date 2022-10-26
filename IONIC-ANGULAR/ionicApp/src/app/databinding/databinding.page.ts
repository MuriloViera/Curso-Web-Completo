import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-databinding',
  templateUrl: './databinding.page.html',
  styleUrls: ['./databinding.page.scss'],
})
export class DatabindingPage{

  public resultado:String = ""
  public titulo: String = "Meu primeiro App" //Atributo de classe publico
  public imagemRandomica: String = "https://picsum.photos/200"
  public imagemLocal: String = "../assets/icon/icone-celular.png"
  public titulo2: String = "Olha aqui"
  public cor: String = "success"

  public atualiza(){
     this.titulo2 = "Inputou no campo ein irmao "
  }

  public mudaCor(){
    this.cor = "danger"
  }

}
