var dados = [{
	identificador: "",
  Quantidade: "",
  Descricao: "",
}];


function carregardados(){
	let dados_container = document.querySelector("#dadosContainer");
  		dados_container.innerHTML = "";
  dados.forEach((el)=>{
  	let identificador = el.identificador;
  	let Quantidade = el.Quantidade;
    let Descricao = el.Descricao;
    let dependente_container = `<div class="dependente" data-id="${identificador}">
    												<input class="Quantidade" placeholder="Quantidade" type="text" value="${Quantidade}"/>
                                  <input class="Descricao" placeholder="Descrição" type="text" value="${Descricao}"/>
                                  <div class="action">
                                  <a href="#" class="remover">❌</a>
                                  	<a id="save" href="#" class="salvar">💾</a>
																	</div>
															  </div>`;
  	dados_container.innerHTML += dependente_container;
  });
  salvardados();
  removerdados();
  travarOutros(false);
}

function removerdados(){
	document.querySelectorAll("#dadosContainer .remover").forEach((el, i)=>{
  	el.addEventListener("click", ()=>{
  		dados.splice(i, 1);  	
      carregardados();
    });
  });
}

function adicionardados(){
  dados.push({identificador:"", Quantidade:"", Descricao: ""});
  carregardados();
  travarOutros(document.querySelector("#dadosContainer > div:last-child"));
}

function salvardados(){
		document.querySelectorAll("#dadosContainer .salvar").forEach((el, i)=>{
  	el.addEventListener("click", ()=>{
      let identificador = el.parentElement.parentElement.getAttribute("data-id");
      let Quantidade = el.parentElement.parentElement.querySelector(".Quantidade").value;
      let Descricao = el.parentElement.parentElement.querySelector(".Descricao").value;
    	
      if(!Quantidade.length || !Descricao.length){
      	alert("Quantidade e Descrição precisam ser preenchidos para salvar.");
        return false;
      }
  		dados.splice(i, 1, {identificador: identificador, Quantidade: Quantidade, Descricao: Descricao});
      carregardados();
      travarOutros(false);
    });
  });
}

function travarOutros(element){
	if(element == false){
  	document.querySelectorAll(".dados button, .dados .container > div").forEach((el)=>{
    	el.classList.remove("disabled");
    });
    document.querySelector("#containerDados").innerHTML = "";
    return false;
  }
  document.querySelectorAll(".dados button, .dados .container > div").forEach((el)=>{
  	if(el != element){
    	el.classList.add("disabled");
    }
  });
}

//init
document.querySelector("#btnAdicionardados").addEventListener("click", adicionardados);
carregardados();

//capturarDados
document.querySelector("#submit").addEventListener("click", ()=>{
	document.querySelector("#containerDados").innerHTML = JSON.stringify(dados, undefined, 4);
});
   
