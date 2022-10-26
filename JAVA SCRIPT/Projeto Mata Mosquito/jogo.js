
var altura = 0
var largura = 0
var vidas = 1
var tempo = 15

var criaMosquitoTempo = 1500

var nivel = window.location.search //Diferente do href que me retorna o URL inteiro, o search me retorna somente o que tiver depois do ?, inclusive o ?
nivel = nivel.replace('?', '')

if (nivel === 'normal') {
	criaMosquitoTempo = 1500
} else if (nivel === 'dificil') {
	criaMosquitoTempo = 1000
}else if (nivel === 'god'){
	criaMosquitoTempo = 750
}

function ajustaTamanhoPalcoJogo(){
	altura = window.innerHeight
	largura = window.innerWidth

	//console.log(largura, altura)
}

ajustaTamanhoPalcoJogo()

var cronometro = setInterval(function(){
	tempo -= 1 //Pego a variavel tempo e decremento 1 sempre que ele passa aqui
	
	if (tempo < 0) {
		clearInterval(cronometro)//Aqui eu saio do fluxo do interval, saio da repetição
		clearInterval(criaMosca)
		window.location.href = 'vitoria.html'
	}
	else
	{
		document.getElementById('cronometro').innerHTML =  tempo //O inner HTML, como o nome ja diz, inner significa meio, entao aqui eu vou alterar o que está no meio da tag html, nesse caso o span
	}

	
} , 1000)// O set interval vai fazer a função ficar rodando a cada 1000ms

function posicaoRandomica(){
	//Remover o mosquito anterior (caso exista)
	if (document.getElementById('mosquito')) { //Nao preciso colocar == true, o JavaScript tem a inteligencia pra fazer isso sozinho
		document.getElementById('mosquito').remove()

		if(vidas < 4){
			document.getElementById('v' + vidas).src="imagens/coracao_vazio.png"
			//Seleciono o elemento v1, e altero ou atribuo o src dele

			vidas++
		}
		else{
			window.location.href = 'fim_de_jogo.html' //Estou recuperando o URL da janela atual, e forçando ele a virar outro URL
		}
		
	}

	var posicaoX = Math.floor(Math.random() * largura) - 90 //O math.floor arredonda o valor pra baixo
	var posicaoY = Math.floor(Math.random() * altura) - 90

	posicaoX = posicaoX < 0 ? 0 : posicaoX//Se for 0, recebe 0 se nao recebe ela mesma
	posicaoY = posicaoY < 0 ? 0 : posicaoY

	console.log(posicaoX,posicaoY)

	//Criar o elemento html
	var mosquito = document.createElement('img')//Crio um elemento do tipo imagem

	mosquito.src = 'imagens/mosca.png'//Acesso os valores do elemento e dou a ele uma imagem
	mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio()//Acesso os valores de classe do elemento e dou a ele uma classe
	mosquito.style.left = posicaoX + 'px'//Acesso os valores de posição e atribuo o valor do x a ele + px pra ficar em pixels
	mosquito.style.top = posicaoY + 'px'//Acesso os valores de posição e atribuo o valor do y a ele + px pra ficar em pixels
	mosquito.style.position = 'absolute' //Defino ele como absolute para que isso funcione
	mosquito.id = 'mosquito'
	mosquito.onclick = function(){
		this.remove()//Removo o elemento mosquito, this no caso seria o elemento 'mosquito'
	}

	document.body.appendChild(mosquito)//Acesso o body e crio um filho pra ele 
	//adiciono o elemento ao body

}

function tamanhoAleatorio(){
	var classe = Math.floor(Math.random() * 3)

	switch(classe){
		case 0:
			return 'mosquito1'
		case 1:
			return 'mosquito2'
		case 2:
			return 'mosquito3'
	}

}

function ladoAleatorio(){
	var classe = Math.floor(Math.random() * 2)

	switch(classe){
		case 0:
			return 'ladoA'
		case 1:
			return 'ladoB'
		
	}

}


