
//MODELO PARA OBJETOS
class Despesa{
	//ATRIBUTOS
	constructor(ano, mes, dia, tipo, descricao, valor){
		this.ano = ano
		this.mes = mes
		this.dia = dia 
		this.tipo = tipo 
		this.descricao = descricao
		this.valor = valor
	}

	//METODOS
	validarDados(){
		for(var i in this){//Aqui to fazendo um for percorrendo os atributos dos elementos dentro do proprio atributo dessa classe(despesa)
			if(this[i] === undefined || this[i] === '' || this[i] === null){
				return false
			}
			else{
				return true
			}
			//O i ele vai me retornar o nome de cada atributo
			//this[i] seria a mesam coisa que this.ano, this.mes etc
		}
	}
}

//MODELO PARA OBJETOS
class Bd {
	//ATRIBUTOS
	constructor(){
		var id = localStorage.getItem('id')

		if(id === null){
			localStorage.setItem('id', 0) //Aqui o set item eu to adicionando um item chamado id com o valor de 0
		}
		
	}

	//METODOS
	getProximoId(){
		var proximoId = localStorage.getItem('id')
		return parseInt(proximoId) + 1
	}

	gravar(d){
		
		var id = this.getProximoId()

		localStorage.setItem(id, JSON.stringify(d))//Pra eu alocar algum dado localmente no navegador, tem que ser JSON

		localStorage.setItem('id', id)
	}

	recuperaTodosRegistros(){
		//array das despesas
		var despesas = Array()

		var id = localStorage.getItem('id')//O getItem('id') ele vai pegar o ultimo item com o nome de id, no caso meu ultimo id inserido

		//Recuperar todas as despesas em localstorage
		for(var i = 1; i <= id; i++){

			//Recuperar a despesa
			var despesa = JSON.parse(localStorage.getItem(i))//Com o get item, eu pego um JSON, pq eu la em cima, to gravando um JSON, e pra usar ele, preiso de um objeto, entao preciso de-converter de JSON para objeto


			//Verificar se existe itens que foram excluidos, e caso exista, vamos pular eles
			if(despesa === null){
				continue //O continue pula o restante das instruçõe e continua o for
			}

			despesas.id = i
			despesas.push(despesa)//Pego a variavel despesa e coloco ele dentro do array despesas
		}

		return despesas
	}

	pesquisar(despesa){//Despesa é o array que o cara coloca nos campos e busca
		var despesasFiltradas = Array()

		despesasFiltradas = this.recuperaTodosRegistros()

		//ano
		if(despesa.ano != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano)
		}

		//mes
		if(despesa.mes != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes)
		}

		//dia
		if(despesa.dia != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia)
		}

		//tipo
		if(despesa.tipo != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo)
		}
	
		//descicao
		if(despesa.descricao != ''){
			despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao)
		}

		return despesasFiltradas
	}
}

var bd = new Bd()


function cadastrarDespesa(){

	var ano = document.getElementById('ano')
	var mes = document.getElementById('mes')
	var dia = document.getElementById('dia')
	var tipo = document.getElementById('tipo')
	var decricao = document.getElementById('descricao')
	var valor = document.getElementById('valor')

	//OBJETOS	
	var despesa = new Despesa(ano.value, mes.value, dia.value, tipo.value, descricao.value, valor.value)

	if(despesa.validarDados()){
		bd.gravar(despesa)

		document.getElementById('modal_titulo').innerHTML = 'Registro inserido com sucesso'
		document.getElementById('modal_titulo_div').className = 'modal-header text-success'
		document.getElementById('modal_conteudo').innerHTML = 'Despesa foi cadastrada com sucesso'
		document.getElementById('modal_btn').innerHTML = 'Voltar'
		document.getElementById('modal_btn').className = 'btn btn-success'

		//dialog de sucesso
		$('#modalRegistraDespesa').modal('show')

		//Resetar os campos
		ano.value = '' 
		mes.value = ''
		dia.value = ''
		tipo.value = ''
		descricao.value = ''
		valor.value = ''	
	}
	else{
		document.getElementById('modal_titulo').innerHTML = 'Erro na inclusão do registro'
		document.getElementById('modal_titulo_div').className = 'modal-header text-danger'
		document.getElementById('modal_conteudo').innerHTML = 'Erro na gravação, verifique se todos os campos foram preenchidos'
		document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir'
		document.getElementById('modal_btn').className = 'btn btn-danger'
	
		//dialog de erro
		$('#modalRegistraDespesa').modal('show')
	}

}

/*JSON.stringify()*/ //Com essa instrução eu pego algum objeto e transformo pra string que o JSON aceita, eu basicamente trasnformo o objeto em JSON
/*JSON.parse()*/ //Aqui é o processo contrario, eu pego um JSON e transformo em objeto literal

function carregaListaDespesas(despesas = Array(), filtro = false){
	
	if(despesas.length == 0 && filtro == false){
		despesas = bd.recuperaTodosRegistros()
	}

	//Selecionando o elemento tbody da tabela
	var lista_despesas = document.getElementById('lista-despesas')
	lista_despesas.innerHTML = ''

	//Percorrer o array despesas listando cada uma
	despesas.forEach(function(d){

		//Criando a linha(tr)
		var linha = lista_despesas.insertRow()//O lista_despesas ta no elemento tbody, e o insertRow insere uma linha nele

		//Criar as colunas(td)
		linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`//Insere uma coluna na linha, nesse caso to inserindo 4 colunas
		
		//Ajustar o tipo
		switch(d.tipo){
			case '1': 
				d.tipo = 'Alimentação'
				break

			case '2':
				d.tipo = 'Educação'
				break

			case '3':
				d.tipo = 'Lazer'
				break
			
			case '4':
				d.tipo = 'Saúde'
				break

			case '5':
				d.tipo = 'Transporte'
				break
		}	

		linha.insertCell(1).innerHTML = d.tipo
		linha.insertCell(2).innerHTML = d.descricao
		linha.insertCell(3).innerHTML = d.valor

		//Criar o botao de exclusao
		var btn = document.createElement('button')
		btn.className = 'btn btn-danger'
		btn.innerHTML = '<i class="fas fa-times"></i>'
		btn.id = 'id_despesa_' + d.id
		btn.onclick = function(){
			//Remover despesa
			alert(this)

		}
		linha.insertCell(4).append(btn) 

		console.log(d)

	})
}

function pesquisarDespesas(){
	ano = document.getElementById('ano').value
	mes = document.getElementById('mes').value
	dia = document.getElementById('dia').value
	tipo = document.getElementById('tipo').value
	descricao = document.getElementById('descricao').value
	valor = document.getElementById('valor').value

	var despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

	var despesas = bd.pesquisar(despesa)

	this.carregaListaDespesas(despesas, true)

}