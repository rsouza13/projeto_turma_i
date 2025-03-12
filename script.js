function digaOi(nomeAluno){
    alert('Olá, ALuno ' + nomeAluno + '!');
}

function tituloMaisculo(){
    document.getElementById('tituloh1').textContent = document.getElementById('tituloh1').textContent.toUpperCase();
}

function confimarExclusao(nomeAluno, idAluno){
    if(confirm("Tem certeza que quer excluir o aluno "+nomeAluno+"?")){
        window.location.assign("deletarAluno.php?idAluno="+idAluno);
    }
    return false;

}

function nomeAlunoMaisculo(idAluno){
    document.getElementById('nomeAluno'+idAluno).textContent = document.getElementById('nomeAluno'+idAluno).textContent.toUpperCase();
}